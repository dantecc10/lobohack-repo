#!/usr/bin/env python3.5
#-- coding: utf-8 --
import requests
import json
import RPi.GPIO as GPIO #Import the library to control the GPIOs
from pirc522 import RFID
import time

GPIO.setmode(GPIO.BOARD) #Define the numbering mode (Board)
GPIO.setwarnings(False) #Disable warning messages

rc522 = RFID() #Instantiate the library

print('Waiting for a badge (to quit, Ctrl + c): ') #Display a message asking the user to pass their badge

#We will make an infinite loop to read in a loop
while True :
    rc522.wait_for_tag() #Wait for an RFID tag to come within range
    (error, tag_type) = rc522.request() #When a tag has been read, retrieve its information
    

    if not error : #If there is no error
        (error, uid) = rc522.anticoll() #Clean up possible collisions, this happens if several cards pass at the same time
        cardResponse = requests.get("API/DataOfCard").json()
        userResponse = requests.get(f"API/DataOfUsers/{cardResponse["user-name"]}")

        if not error and userResponse["sKigo-Card-Id"] == str(uid) : #If we managed to clean up
            print('You passed the badge with the id : {}'.format(uid)) #Display the unique identifier of the RFID badge
            #Realizar operaciones correspondientes a la terminal usada...
            time.sleep(1) #Wait 1 second to not read the tag hundreds of times in a few milliseconds

#/pro/v1/content/properties/
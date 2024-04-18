import mysql.connector

mydb = mysql.connector.connect(
    host="74.208.62.188",
    user="lobohacker",
    passwd="SQLTester23!!"
)

print(mydb)

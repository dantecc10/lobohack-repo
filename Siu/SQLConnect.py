import mysql.connector

mydb = mysql.connector.connect(
    host="74.208.62.188",
    user="lobohacker",
    passwd="SQLTester23!!",
    database="lobohack"
)

mycursor = mydb.cursor()

sqlFormula = "INSERT INTO users VALUES(%s, %s, %s, %s, %s, %s, %s, %s, %s,%s,%s)" 
usuario1 = ("","Dante","CC","dantecc10@gmail.com","SteakNyPSWD23!!","Puebla","Puebla","72570","Rio Colorado 6113","0.0","1")

mycursor.execute(sqlFormula,usuario1)

mydb.commit()


def update_cars_quantity(id, quantity):
    sql = "UPDATE `semaphores` SET `cars_quantity_semaphore` = %s WHERE `id_semaphore` = %s"
    val = (quantity, id)
    mycursor.execute(sql, val)
    mydb.commit()
import MySQLdb

myDB = MySQLdb.connect(host="74.208.62.188",port=3306,user="lobohacker",passwd="SQLTester23!!",db="lobohack")
cHandler = myDB.cursor()
cHandler.execute("SHOW DATABASES")
results = cHandler.fetchall()
for items in results:
    print (items[0])
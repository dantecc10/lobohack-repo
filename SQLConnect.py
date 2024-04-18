import pymssql

conn = pymssql.connect(
    server='74.208.62.188:3306',
    user='lobohacker',
    password='SQLTester23!!',
    database='lobohack',
    as_dict=True
)

cursor = conn.cursor()

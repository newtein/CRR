import csv
import mysql.connector
con=mysql.connector.connect(user='root', password='',
                              host='localhost',
                              database='goibibo_api')
mycur=con.cursor();
i=0
with open('city_list.csv',encoding="utf8") as csvfile:
    readCSV=csv.reader(csvfile,delimiter=',')

    for row in readCSV:
     try:    
      insertQ=("insert into cityids (cityname, cityid) values (%s, %s)")
      data=(row[0],row[1])
      mycur.execute(insertQ,data)
      con.commit()
      print(i)
      i=i+1
     except UnicodeDecodeError as e:
      print("Error")

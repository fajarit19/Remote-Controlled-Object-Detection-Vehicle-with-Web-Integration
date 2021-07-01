#!/usr/bin/env python
from importlib import import_module
import mysql.connector
import os
import time
import pytz
from datetime import datetime
from flask import Flask, render_template, Response, request, redirect, url_for, flash

import pymysql.cursors

# Connect to the database
connection = pymysql.connect(host='localhost',
                             user='root',
                             password='raspberry',
                             db='project_it',
                             charset='utf8mb4',
                             cursorclass=pymysql.cursors.DictCursor)

# Database
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="raspberry",
  database="project_it"
)

mycursor = mydb.cursor()

mycursor.execute("SHOW DATABASES")

# View All Database
for x in mycursor:
  print(x)

# import camera driver
if os.environ.get('CAMERA'):
    Camera = import_module('camera_' + os.environ['CAMERA']).Camera
    print("Load module {}".format('camera_' + os.environ['CAMERA']))
else:
    from camera import Camera

# Raspberry Pi camera module (requires picamera package)
# from camera_pi import Camera

app = Flask(__name__)
APP_ROOT = os.path.dirname(os.path.abspath(__file__))


@app.route('/')
def index():
    """Video streaming home page."""
    return render_template('main.html')

@app.route("/upload", methods=['POST','GET'])
def upload():
    target = os.path.join(APP_ROOT, 'images/')
    print(target)

    if not os.path.isdir(target):
        os.mkdir(target)

    for file in request.files.getlist("file"):
        print(file)

        status = request.form.get('status')
        filename = file.filename

        tw = pytz.timezone('Asia/Taipei')
        today = datetime.now(tw)

        database(name=filename, data=status, date=today )
        destination = "/".join([target, filename])
        print(destination)
        file.save(destination)
        
        return render_template("main.html")

def database(name, data, date):
    # conn= sqlite3.connect("YTD.db")
    conn = mysql.connector.connect(
    host="localhost",
    user="root",
    password="raspberry",
    database="project_it"
    )
    cursor = conn.cursor()

    sql = "INSERT INTO test (name, status, date) VALUES (%s, %s, %s)"
    value = (name,data,date)
    cursor.execute(sql, value)
    conn.commit()

    # cursor.execute("""CREATE TABLE IF NOT EXISTS my_table (name TEXT,data BLOP) """)
    # cursor.execute("""INSERT INTO test (name, data) VALUES (?,?) """,(name,data))

    # cursor.close()
    # conn.close()

def gen(camera):
    """Video streaming generator function."""
    while True:
        frame = camera.get_frame()
        yield (b'--frame\r\n'
               b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')


@app.route('/video_feed')
def video_feed():
    """Video streaming route. Put this in the src attribute of an img tag."""
    return Response(gen(Camera()),
                    mimetype='multipart/x-mixed-replace; boundary=frame')


if __name__ == '__main__':
    app.run(host='0.0.0.0', threaded=True)

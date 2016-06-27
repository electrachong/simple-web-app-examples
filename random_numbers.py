#!/usr/bin/env python
''' Above line tells system this is a Python script. '''

'''
    If using apache, you may need to follow the guide here - http://code-maven.com/set-up-cgi-with-apache - to make sure the cgi module is enabled, and either place this file in the /usr/lib/cgi-bin/ file or make a symbolic link, per the following:
    
    cd /usr/lib/cgi-bin
    sudo ln -s [path to webapp repo]/random_numbers.py
    
    If using a different web server, look up the appropriate instructions for enabling cgi scripts.
''' 

import html
import cgi			 # Use CGI package to access form data
import cgitb; cgitb.enable()     # for troubleshooting
import datetime
import random

''' We have to format our response in the format of a HTML response '''
print("Content-Type: text/html") # HTTP header to say HTML is following
print()                          # blank line, end of headers

''' Blank line must separate response header and message body.
    Message body contains the html we want to be rendered in the document. '''
form = cgi.FieldStorage()
name  = html.escape(form["name"].value);
range   = html.escape(form["range"].value);

random_number = random.randint(1,30)

print("<p>Hi", name + "!</p>")
print("The time is", datetime.datetime.now())
print("<p>The lucky number was", str(random_number) + "</p>")

if (1 <= random_number <= 10 and range == "1_10") or \
(11 <= random_number <= 21 and range == "11_20") or \
(21 <= random_number <= 30 and range == "21_30"):
   print("<p>You won!</p>")
else:
   print("<p>Try again.</p>")
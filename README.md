<b> Venue Access Management for Olympic Officials System(VAMOOS) 2016 </b>

This is a group project, completed for the Computer Science Development Exercise module in the 2015-16 academic year. My group scored 93%, which was the second best final mark across all students' groups. I was responsible for most of the back-end and front-end parts of the system, with a main concentration on a correct functionality followed by the client's User Acceptance Testing(UAT). I also focused on the User Interface Design, based on the Nielsen's 10 Usability Heuristic Principles including visibility of system status, error prevention, aestetic and minimalist design, as well as help and documentation. 

The main functions of the system are to:
- manage the authorisations which allow Officials to enter Rio Olympic venues for sports events,
- respond to and log results of requests to enter venues by Officials.

The VAMOOS system can handle data about:
- the Officials and their ID cards, sports, their events and event venues,
- authorisation of cards to enter venues,
- response to requests by a card to enter a venue for an event,
- the log of actual entries to venues by Officials.


The system was created using EasyPHP WAMP Stack platform with the CodeIgniter framework and Grocery CRUD library. 

Languages used: HTML, CSS, PHP and SQL(for storing data about Officials). 
  
  
<br>
<br>
=============================================================== <br>
VAMOOS SYSTEM [installation guide]:

1. Download EasyPHP development platform from:
http://www.easyphp.org/

2. Go to EasyPHP/data/localweb and paste all 'vamoos' directory.

3. Run EasyPHP

4. Open a browser and type in: localhost:8080/phpmyadmin

5. Go to "Databases" tab

6. Create a new database called "vamoos" and drop "orders" database.

7. Go to "Import" and import 'vamoos.sql' from the 'vamoos' directory.

8. Go to localhost:8080/vamoos
   You will be presented with the VAMOOS System Login Page

9. In order to test the system, login as one of the AID users, e.g.:
login: f.lampard@vamoos.com 
password: frank

10. Any questions? Please contact me on lukaszbol@yahoo.co.uk

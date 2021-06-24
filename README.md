# ControlPanelForRobotArm

This project is an interface to control a robot arm using html, css and php programming langauges.
there are 3 files for the project:

1-ConntrolPanel.html: 
This page include the code for html starting from linking the page with the css file for the page layout, then linking it with the php page that includes the functional methodes.
there are 6 servo in the arm that is why there are 6 objects, each object is spreated by div and each object contain a range slider. The slider ranges between 0 and 180. 
Each slider has a uniqe name to ease the process of sending the values to php page.
last thing in the html page is the saving button which works to save the values from the range sliders to the database at mySQL.

2-style.css:
This page include the design of the elements on the html page like the bakeground, fonts and the layout style of the page.

3-connect.php:
This page connect the the values of the servo to the database and if the values are sucessfully saved a page will show up that have the values of the servo.


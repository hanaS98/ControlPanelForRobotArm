# * Control Panel For a Robot Arm * 

This repository is about an interface to control a robot arm.
<p><img src="./Untitled.png" width="350" title="interface"></p>

 ## Description 
<p>This project is an interface of a control panel made to move a robot arm.</p>
<p>There are four pages in this repository and a database</p>

### 1. ConntrolPanel.html:
 
This file include the code for html starting from linking the page with the css file for the page layout, then linking it with the php page that includes the functional methodes.
there are 6 servo in the arm that is why there are 6 objects, each object is spreated by div and each object contain a range slider. The slider ranges between 0 and 180. 
Each slider has a uniqe name to ease the process of sending the values to php page.
last thing in the html page is the saving button which works to save the values from the range sliders to the database at mySQL.
<p><img src="./Untitled.png" width="350" title="interface"></p>

### 2. style.css:

This file include the design of the elements on the html page like the bakeground, fonts and the layout style of the page.
<p><img src="./Untitled.png" width="350" title="interface"></p>

### 3. connect.php:

This file connect the the values of the servo to the database and if the values are sucessfully saved a page will appear with the saved values.
<p><img src="./Untitled.png" width="350" title="interface"></p>

### 4. lastRecord.php:

This file retrive the last raw in the database and display it on the page.
<p><img src="./Untitled.png" width="350" title="interface"></p>

### 5. the database:
<p><img src="./Untitled.png" width="350" title="interface"></p>


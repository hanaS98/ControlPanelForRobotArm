<?php
$servo1=$_POST['servo1'];
$servo2=$_POST['servo2'];
$servo3=$_POST['servo3'];
$servo4=$_POST['servo4'];
$servo5=$_POST['servo5'];
$servo6=$_POST['servo6'];
$power= "ON";


$conn= new mysqli("localhost","root","","robotcontroller");
if($conn->connect_error){
  die('connection failed :'.$conn->connect_error);
}else{

$stmt = $conn->prepare("INSERT INTO `controller`(`servo1`, `servo2`, `servo3`, `servo4`, `servo5`, `servo6`,`power`)
VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("iiiiiis",$servo1,$servo2,$servo3,$servo4,$servo5,$servo6,$power);
$stmt->execute();
echo "Saved Sucessfully";



$stmt->close();
$conn->close();
}
 ?>

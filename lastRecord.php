<?php



$conn= new mysqli("localhost","root","","robotcontroller");
if($conn->connect_error){
  die('connection failed :'.$conn->connect_error);
}else{

$sql = mysqli_query($conn,"SELECT * FROM `controller` ORDER BY ID DESC LIMIT 1");
$print_data=mysqli_fetch_row($sql);
echo "servo1= ";
echo $print_data[1];
echo"\n";
echo "servo2= ";
echo $print_data[2];
echo"\n";
echo "servo3= ";
echo $print_data[3];
echo"\n";
echo "servo4= ";
echo $print_data[4];
echo"\n";
echo "servo5= ";
echo $print_data[5];
echo"\n";
echo "servo6= ";
echo $print_data[6];

$conn->close();
}
 ?>

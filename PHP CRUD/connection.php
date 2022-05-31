<?php
$host="127.0.0.1";
$username="PATRICK";
$db_name="CRUDS";
$db_password="DATAbase@123";
$connect=mysqli_connect($host,$username,$db_password,$db_name);
// if($connect){
//     echo "<h3>DATABASE CONNECTION: SUCCESSFULLY";
// }else{
//     echo "<h3>DATABASE CONNECTION: FAILED".mysqli_error();
// }
<?php
$id=$_GET['user_id'];
$email=$_GET['user_email'];
include_once("./../connection.php");

$deleteQuery=mysqli_query($connection,"DELETE FROM USERS WHERE id=$id");
if($deleteQuery){
echo "<h3 style='color: green'>Your account has been deleted successfully! </h3>";
echo "<h3>Thank You for using our program and services!</h3>";
echo "<h3>You can click on this link given to you if you want to <strong><b style='color: red'>REGISTER</b></strong> again. </h3>";
echo "<a href='./../REGISTER/Home.html'>Register Again</a>";
}
?>
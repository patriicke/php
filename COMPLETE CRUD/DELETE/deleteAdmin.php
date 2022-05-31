<?php
$id=$_GET['user_id'];
$email=$_GET['user_email'];
$userEmail=1;
$userStat=1;
include_once("./../connection.php");
$checkEmail=mysqli_query($connection,"SELECT email,userStatus FROM USERS WHERE email='$email'");
while($rw=mysqli_fetch_assoc($checkEmail)){
    $userEmail=$rw['email'];
    $userStat=$rw['userStatus'];
}
if($userStat==="Administrator"){
   $deleteQuery=mysqli_query($connection,"DELETE FROM USERS WHERE id=$id");
if($deleteQuery){
echo "<h3 style='color: green'><strong color: black>{$email} </strong> You are no longer an Administrator of this Web Application </h3>";
echo "<h3>Thank You for using our program and services!</h3>";
echo "<h3>You can click on this link given to you if you want to <strong><b style='color: red'>REGISTER</b></strong> again. </h3>";
echo "<a href='./../REGISTER/Home.html'>Register Again</a>";
} 
}else{
$deleteQuery=mysqli_query($connection,"DELETE FROM USERS WHERE id=$id");
if($deleteQuery){
echo "<h3 style='color: green'>Your have successfully deleted  <strong style='color: black'>{$email}</strong>! </h3>";
echo "<h3>Thank You for using our program and services!</h3>";
echo "<h3>You can click on this link given to you if you want to <strong><b style='color: red'>REGISTER</b></strong> again. </h3>";
echo "<a href='./../REGISTER/Home.html'>Register Again</a>";
}
}

?>
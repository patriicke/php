<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h2{
        color:  "red";
    }
    table,td,tr,th{
        border: 1px black solid;
        border-collapse: collapse;
        padding: 2em;
    }
     img{
        height: 5em;
        width: 5em;
        border-radius: 50%;
    }
    </style>
</head>

<body>
<?php
$email=$_POST['email'];
$password=$_POST['password'];
$statusUser=$_POST['userStatus'];

include_once("./../connection.php");

$getUserQuery=mysqli_query($connection,"SELECT id,fname,lname,email,gender,IMG,Password,userStatus FROM USERS WHERE email='$email'");
?>
<table>
   
<?php 
while($row=mysqli_fetch_assoc($getUserQuery)){
    $id=$row['id'];
    $userPassword=$row['Password'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $userEmail=$row['email'];
    $gender=$row['gender'];
    $img=$row['IMG'];
    $userStatus=$row['userStatus'];
}
if($email!==$userEmail){
        echo "<h2 style='color: red'>USER EMAIL IS INCORRECT!</h2>";
}else if(!password_verify($password,$userPassword)){
        echo "<h2 style='color: red'>USER  PASSWORD IS INCORRECT!</h2>";
}else{
    if($userStatus!==$statusUser){
        echo "<h3 style='color : red'> This is not your user status. Try using your status Please.</h3>";
    }else {
   if ($statusUser==='Administrator'){
        $getAllUserQuery=mysqli_query($connection,"SELECT id,fname,lname,email,gender,IMG,userStatus FROM USERS ORDER BY userStatus ASC");
    
?>
   <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>IMG</th>
    <th>USER STATUS</th>
    <td>DELETE USERS</td>
    <td>UPDATE USERS</td>
    </tr>
    <tr>
<?php
    while($rw=mysqli_fetch_assoc($getAllUserQuery)){
?>
<tr>
        <td><?=$rw['id']?></td>
        <td><?=$rw['fname']?></td>
        <td><?=$rw['lname']?></td>
        <td><?=$rw['email']?></td>
        <td><?=$rw['gender']?></td>
        <td><img src="./../REGISTER/<?=$rw['IMG']?>"></td>
        <td><?=$rw['userStatus']?></td>
        <td><?="<a href=./../DELETE/deleteAdmin.php?user_id=".$rw['id']."&user_email=".$rw['email'].">DELETE</a>"?></td>
        <td><?="<a href=./../UPDATEUSER/formUpdate.php?user_id=".$rw['id']."&user_email=".$rw['email'].">UPDATE</a>"?></td>
</tr>
<?php 
}}else{
?>
     <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>IMG</th>
    <th>USER STATUS</th>
    <td>DELETE</td>
    <td>UPDATE</td>
    </tr>
    <tr>
        <td><?=$id?></td>
        <td><?=$fname?></td>
        <td><?=$lname?></td>
        <td><?=$email?></td>
        <td><?=$gender?></td>
        <td><img src="./../REGISTER/<?=$img?>"></td>
        <td><?=$userStatus?></td>
        <td><?="<a href=./../DELETE/delete.php?user_id=".$id.">DELETE</a>"?></td>
        <td><?="<a href=./../UPDATEUSER/formUpdate.php?user_id=".$id."&user_email=".$email.">UPDATE</a>"?></td>
    </tr>
<?php }}}  ?>
    </table>
</body>
</html>




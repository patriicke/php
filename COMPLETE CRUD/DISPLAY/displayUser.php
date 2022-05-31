<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,tr,td,th{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 1em;
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
include_once("./../connection.php");
$getUserQuery=mysqli_query($connection,"SELECT id,fname,lname,email,gender,IMG,userStatus FROM USERS");
?>
<table>
    <tr>
    <th>id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>IMG</th>
    <th>USER STATUS</th>
    <td><a href="./../REGISTER/Home.html">CREATE USER</a></td>
    <td><a href="#">UPDATE USER</a></td>
    </tr>
<?php 
while($row=mysqli_fetch_assoc($getUserQuery)){
?>
  <tr>
      <td><?=$row["id"]  ?></td>
      <td><?=$row['fname'] ?></td>
      <td><?=$row['lname'] ?></td>
      <td><?=$row['email'] ?></td>
      <td><?=$row['gender'] ?></td>
      <td><img src="./../REGISTER/<?=$row['IMG']?>"></td>
      <td><?=$row['userStatus'] ?></td>
      <td><?="<a href=./../DELETE/delete.php?user_id=".$row['id'].">DELETE</a>"?></td>
      <td><?="<a href=./../UPDATE/updateForm.php?user_id=".$row['id'].">UPDATE</a>" ?></td>
  </tr>
<?php } ?>
</table>
</body>
</html>


    
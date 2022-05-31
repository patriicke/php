<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$submit=$_POST['submit'];
include_once('../connection.php');

echo "<br>";
$query=mysqli_query($connect,"INSERT INTO register(fname,lname,password) VALUES('$fname','$lname','$password');");
if($query){
    echo "<h2>REGISTERED SUCCESSFULLY</h2>";
}else{
    echo "<h2>AN ERRO OCCURED</h2>".mysqli_error();
}
// echo "<br>";
// echo "<a href='../READ/readUser.php'>DISPLAY USERS</a>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 1.5em;
        }
    </style>
</head>
<body>
<?php
include_once('../connection.php');
$displayQuery=mysqli_query($connect, "SELECT * FROM register");
?>
    <table>
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>EDIT USER</th>
            <th>REMOVE USER</th>
    <td><?="<a href='../CREATE/form.html'>CREATE USER</a>"?></td>
            
        </tr>
  <?php
while($data=mysqli_fetch_assoc($displayQuery)){
  ?>
<tr>
    <td><?=$data['id']?></td>
    <td><?=$data['fname']?></td>
    <td><?=$data['lname']?></td>
    <td><?="<a href='../UPDATE/updateForm.php?userid={$data['id']}&firstname={$data['fname']}&lastname={$data['lname']}'>UPDATE</a>"?></td>
    <td><?="<a href='../DELETE/delete.php?userid={$data['id']}'>DELETE</a>"?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
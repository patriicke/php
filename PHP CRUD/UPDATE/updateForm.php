<?php
include_once('../connection.php');
echo "<br>";
$our_id=$_GET['userid'];
$firstName=$_GET['firstname'];
$lastName=$_GET['lastname'];

echo "We are going to edit this ID ".$our_id;
echo "<br>";
echo "We are going to edit this FIRST NAME".$firstName;
echo "<br>";
echo "We are going to edit this LAST NAME ".$lastName;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>

    <style>
        h1 {
            text-align: center;
        }
        
        .container {
            width: 40%;
            height: 50vh;
        }
        
        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1em;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>UPDATE USER</h1>
        <form action="<?php echo "./update.php?my_id={$our_id}"?>" method="POST">
            <label for="fname">FIRST NAME</label><input type="text" name="fname">
            <label for="lname">LAST NAME</label><input type="text" name="lname">
            <label for="password">PASSWORD</label><input type="password" name="password">
            <input type="submit" name="submit" value="UPDATE">
        </form>
    </div>

</body>

</html>
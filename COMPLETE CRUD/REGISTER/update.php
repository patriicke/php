<?php
$id=$_GET['user_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$gender=$_POST['gender'];
$userStatus=$_POST['userStatus'];
$encrypt=password_hash($password,PASSWORD_DEFAULT);


$fileName=$_FILES['file']['name'];
$fileSize=$_FILES['file']['size'];
$fileExt=$_FILES['file']['type'];
$fielError=$_FILES['file']['error'];
$fileTmpName=$_FILES['file']['tmp_name'];

$fileExtName=explode(".",$fileName);
$fileExtActualName=strtolower(end($fileExtName));
$allowed=array('png','jpeg','jpg');
include_once("./../connection.php");


if(in_array($fileExtActualName,$allowed)){
    if($fielError===0){
        if($fileSize<1000000){
            $fileActualName=uniqid("",true).".".$fileExtActualName;
            $destination="uploads/".$fileActualName;
            move_uploaded_file($fileTmpName,$destination);
            if($password===$cpassword){

    $updateQuery=mysqli_query($connection, "UPDATE USERS SET fname='$fname', lname='$lname' , email='$email' , Password='$encrypt' , gender= '$gender' , userStatus= '$userStatus', IMG='$destination' WHERE id= $id");
    if($updateQuery){
    echo "<h3>You have been account is update Successfully</h3>";
    echo "<h3>Click on this link to sign in</h3>";
    echo "<a href=./../SIGNIN/SignIn.html>Click on this link to sign in to your updated account</a>";
}




}else{
    echo "<h3 style='color: red'>Passwords don't match. <a href=./formUpdate.php>Try again</a></h3>";
}

        }else{
            echo "This is file is too larger. Find a smaller on it.";
        }
    }else{
        echo "<h3>There was an error while uplpoading the image</h3>";
    }
}else{
    echo "<h3>This file format is not supported</h3>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../SIGNIN/signin.css"/>
    <style>
        .sign-in{
            padding: 0.3em 1.3em;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
if (isset($_POST['submit']))
{
    include_once ("./../connection.php");
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $userStatus = $_POST['userStatus'];
    $encrypt = password_hash($password,PASSWORD_DEFAULT);

    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileTemName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array(
        "png",
        "jpg",
        "jpeg"
    );
    $occurency = 1;
    if (in_array($fileActualExt, $allowed))
    {
        if ($fileError === 0)
        {
            if ($fileSize < 1000000)
            {
                if ($password === $cpassword)
                {
                    $name = uniqid("", true) . "." . $fileActualExt;
                    $destination = "uploads/" . $name;
                    move_uploaded_file($fileTemName, $destination);

                    $searchQuery = mysqli_query($connection, " SELECT email FROM USERS WHERE email='$email'");
                    while ($emailChek = mysqli_fetch_assoc($searchQuery))
                    {
                        $occurency = $emailChek['email'];
                    }
                    if ($userStatus === 'Administrator')
                    {
                        if ($email === "patrickndayambaje4@gmail.com")
                        {
                            if ($occurency !== $email)
                            {
                                $insertQuery = mysqli_query($connection, "INSERT INTO USERS(fname,lname,email,Password,gender,IMG,userStatus) VALUES('$fname','$lname','$email','$encrypt','$gender','$destination','$userStatus')");
                                if (!$insertQuery)
                                {
                                    echo "An error occured when registering new user";
                                }
                                else
                                {
                                    echo "<h2> YOU HAVE REGISTERED SUCCESSFULLY!</h2>";
                                    echo "Click on the link below to Sign In.";
                                    echo "<div><a href='./../SIGNIN/SignIn.html'>SIGN IN</a></div>";

                                }
                            }
                        }
                        else
                        {
                            echo "<h3 style='color: green'>Sorry! You are not allowed to be the administrator of this Web application!</h3>";
                        }
                    }
                    else
                    {
                        if ($occurency !== $email)
                        {
                            $insertQuery = mysqli_query($connection, "INSERT INTO USERS(fname,lname,email,Password,gender,IMG,userStatus) VALUES('$fname','$lname','$email','$encrypt','$gender','$destination','$userStatus')");
                            if (!$insertQuery)
                            {
                                echo "An error occured when registering new user";
                            }
                            else
                            {
                                echo "<h2> YOU HAVE REGISTERED SUCCESSFULLY!</h2>";
                                echo "Click on the link below to Sign In.";
                                echo "<div><a href='./../SIGNIN/SignIn.html'>SIGN IN</a></div>";

                            }
                        }
                         else
                    {
                        echo "<h2 style='color:red;'>Try using another email! It seems like this is already taken.</h2>";
                    }
                    }
                   
                }
                else
                {
                    echo "<h2 style='color : red'>Passwords don't match</h2>";
                }

            }
            else
            {
                echo "<h2 style='color'>File is too larger to be uploaded</h2>";
            }
        }
        else
        {
            echo "<h2 style='color'>The file ended up into an error while uploading</h2>";
        }
    }
    else
    {
        echo "<h2 style='color : red'>Image type not allowed</h2>";
    }
}
?>

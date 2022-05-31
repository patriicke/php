
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE USER</title>
    <style>
     form {
  height: 63%;
  display: grid;
  grid-template-columns: 1fr 1fr;
  margin-top: 1em;
  justify-content: center;
  width: 60%;
  gap: 0.4em;
  font-size: 1.4em;
  background-color: rgb(129, 171, 182);
  padding: 2em 4em;
  border-radius: 0.8em;
  color: rgb(0, 0, 0);
}
input ,select{
  font-size: 1.1em;
  border-radius: 0.4em;
  border: none;
  padding-left: 0.5em;
}
input:focus{
  outline: none;
  border: none;
}
h3 {
  width: 60%;
  display: flex;
  justify-content: center;
  font-size: 1.4em;
}
form > a {
  background-color: #fff;
  border-radius: 0.4em;
  text-decoration: none;
  display: flex;
  justify-content: center;
  align-items: center;
}
    </style>
</head>
<body>
<?php
$id=$_GET['user_id'];
$email=$_GET['user_email'];
include_once("./../connection.php");
?>  

<h3>UPDATE FORM</h3>
<h3>We are going to update <h3 style='color: green'><?=$email?></h3></h3>
<form action="<?="./../REGISTER/update.php?user_id=".$id?>" method="POST" enctype="multipart/form-data">
                <label> First Name </label>
          <input type="text" placeholder="First Name" name="fname" id="fname" />
          <label> Last Name </label>
          <input type="text" placeholder="Last Name" name="lname" />
          <label> Email </label>
          <input type="email" placeholder="Email" name="email" />
          <label> Enter Password </label>
          <input type="password" placeholder="New Password" name="password" />
          <label> Confirm Password </label>
          <input
            type="password"
            placeholder="Confirm New Password"
            name="cpassword"
          />
          <label> Gender </label>
          <div class="gender">
            <span> Male<input type="radio" name="gender" value="Male" /> </span>
            <span
              >Female<input type="radio" name="gender" value="Female"
            /></span>
          </div>
          <label> Upload an image </label>
          <input type="file" name="file" />
          <label>User Status</label>
          <select name="userStatus">
            <option value="Standard User">Standard User</option>
            <option value="Administrator">Administrator</option>
          </select>
          <a href="./../SIGNIN/SignIn.html">SIGN IN</a>
          <input
            type="submit"
            value="UPDATE DATA"
            name="submit"
            class="sign-up-btn"
          />
</form>
</body>
</html>

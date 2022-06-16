<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>
<?="<h1>$heading</h1>"?>
<?php echo form_open("login/process") ?>
<label>Username</label>
<input type="text" name="username"/>
<label>Password</label>
<input type="password" name="password"/>
<?php echo form_close() ?>
</body>
</html>

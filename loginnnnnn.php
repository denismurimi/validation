<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title> 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Login</h1>
	</div>

	<form method="post" action="login.php"> 
		<!--display validation errors here-->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		Not a Member? <a href="register.php">Register</a>
	</form>
  
</body>
</html>
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
			<label for="usernameInput">Username</label>
			<input id="usernameInput" type="text" name="username">
		</div>
		<div class="input-group">
			<label for="passwordInput">Password</label>
			<input id="passwordInput" type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		Already a Member? <a href="register.php">Register</a>
	</form>
  
</body>
</html>
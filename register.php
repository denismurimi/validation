<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
<head> 
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Register</h1>
	</div>

	<form method="post" action="register.php">
	<!--display validation errors here-->
	<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label> 
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="e.g example@domain.com">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" placeholder="Password">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2" placeholder="Confrim above Password">
		</div>
		<div class="input-group">
			<label>Register</label>
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		Already a Member? <a href="login.php">Login</a>
	</form>
 
</body>
</html>
<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title> 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Home Page</h1>
	</div>

	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class=" error success"> 
				<h3>
					<?php echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
				</h3>
			</div>
			
		<?php endif ?>

		<?php if (isset($_SESSION['username'])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="index.php?logout='1' " style="color: red;">Logout</a></p>
			
		<?php endif ?>


	</div>
<form>
	<p>Not a Member? <a href="register.php">Register</a></p>
	<p>Already a Member? <a href="login.php">Login</a></p>
</form>

  
</body>
</html>
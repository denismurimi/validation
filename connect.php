<?php
session_start();

$username = "";
$email = "";
$errors = array();

// connect to the DB

$con = mysqli_connect('localhost', 'root', '', 'validation') or die("unable to connect to DB");
 
// if the register button is clicked
if(isset($_POST['register'])) {

	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

	// ensure that all form fields are filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password_1)) {
		array_push($errors, "Password is required");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "Passwords do not match");
	}

	// if there are no errors, save user to DB
	if (count($errors) == 0) {
		$password = md5($password_1); // This is to encrypt password for security purposes.
		$insert = "INSERT INTO `register`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
		mysqli_query($con, $insert);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php'); //this is to redirect to home page
	}
}
else
// log user in from login page using the save data in the DB
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // ensure that all form fields are filled properly
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    } else if (count($errors) == 0) {
        $password = md5($password); //hash password before comparing with that from the DB
        $select = "SELECT * FROM `register` WHERE `username`='$username' AND `password`='$password'";
        $result = mysqli_query($con, $select);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            //log user in
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
             header('location: index.php'); //this is to redirect to home page
        } else {
            array_push($errors, "Either username or password is incorrect");
        }
    }
} else
     // logout button is clicked and reloads to login page
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>
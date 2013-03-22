<?php

include("functions/connect.php");
session_start();

if(isset($_SESSION['loggedin']))
{
    die("You are already logged in!");
} // That bit of code checks if you are logged in or not, and if you are, you can't log in again!

if (isset($_POST['is_ajax']) && ($_POST['btn_submit'] == 'Login')) {

  	$username = mysql_real_escape_string($_POST['username']);
  	$password = mysql_real_escape_string($_POST['password']);
	$password = md5($password);
	
	$query = "SELECT * FROM $table WHERE `email`='$username' AND `pass`='$password'";
	$result = mysql_query($query) or die(mysql_error());
	
	if(mysql_num_rows($result) == 1)
	{
		$valid = true;
		$_SESSION['username'] = $username;
		$_SESSION['loggedin'] = "YES"; // Set it so the user is logged in!
   		die("You are now logged in!"); // Kill the script here so it doesn't show the login form after you are logged in!
	  	
  	}
  	else {
  		$valid = false;
  	}
	
	echo json_encode($valid);
}
?>
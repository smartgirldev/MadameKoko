<?php

include("functions/connect.php");


/*if (isset($_POST["password"]) && isset($_POST["confirm_password"])) {
	if($_POST["confirm_password"] != "" && $_POST["password"] != $_POST["confirm_password"]) {
		echo "missmatch";
	}
}
*/
if(!empty($_POST['username']))//If a username has been submitted
{
	$username = trim(strtolower($_REQUEST['username']));//Some clean up :)
	
	/*if($username != "" && !preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $username)) {
		echo "notvalid";
	}*/
	
	//Query to check if username is available or not
	$query = "SELECT * FROM $table WHERE email = '".$username."'";
	$result = mysql_query($query) or die(mysql_error());
	
	if(mysql_num_rows($result) == 1)
	{
	  	$valid = false;
  	}
	else
	{
		$valid = true;
		
	}
	
	echo json_encode($valid);
}

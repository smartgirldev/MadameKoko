<?php

include("functions/connect.php");

if (isset($_POST['is_ajax']) && ($_POST['btn_submit'] == 'Register')) {

	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	$query = "INSERT INTO $table (`id`, `email`, `pass`, `regIP`, `dt`) VALUES ('', '$username', md5('$password'), '".$_SERVER['REMOTE_ADDR']."', NOW())";
	$result = mysql_query($query) or die(mysql_error());
	
	if(mysql_num_rows($result) == 1)
	{
	  	$valid = true;
  	}
	else
	{
		$valid = false;
		
	}
	
	echo json_encode($valid);
}
?>

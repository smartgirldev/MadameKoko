<?php

session_start();

function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function clean_string($string) {
	$bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
}

function sentence_case($str) {
   $cap = true;
   $ret='';
   for($x = 0; $x < strlen($str); $x++){
       $letter = substr($str, $x, 1);
       if($letter == "." || $letter == "!" || $letter == "?"){
           $cap = true;
       }elseif($letter != " " && $cap == true){
           $letter = strtoupper($letter);
           $cap = false;
       } 
       $ret .= $letter;
   }
   return $ret;
}

function format_phone($phone)
{
    $phone = preg_replace("/[^0-9]/", "", $phone);
     
    if(strlen($phone) == 7)
   		return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phone);
    elseif(strlen($phone) == 10)
    	return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $phone);
    else
    	return $phone;
}

if(isset($_POST['email'])) {
     
    $email_to = "smartgirldev@gmail.com";
    $email_subject = "Contact form from SmartGirl Development";
	$error_message = "";
    

    /*function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
	*/
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['comments'])) {
        $error_message .= "\n All fields are required. ";
		//died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    
	/*if(empty($name) || empty($email) || empty($phone) || empty($comments))
	{
		$error_message .= "\n All fields are required. ";	
	}*/
	if(IsInjected($email))
	{
		$error_message .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
		$error_message .= "\n The Captcha code does not match!";
	}
	
    $name = check_input(sentence_case($_POST['name'])); // required
    $email = check_input($_POST['email']); // required
    $phone = check_input($_POST['phone']); // required
	$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    $comments = check_input(sentence_case($_POST['comments'])); // required
	 
	// validate a phone number
	format_phone($phone);
		
	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$name)) {
	  $error_message .= 'The Name you entered does not appear to be valid.<br />';
	}
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(!preg_match($email_exp,$email)) {
	  $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}
	if(strlen($comments) < 2) {
	  $error_message .= 'The Comments you entered do not appear to be valid.<br />';
	}
	if(strlen($error_message) > 0) {
	   echo $error_message;
	}
    $email_message = clean_string($name). " filled out your form on SmartGirlDevelopment.com\n\n";
    
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
	$email_message .= "IP: ".$ip."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
		
	// create email headers
	$headers = 'From: '.$email."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();  
			
	if (@mail($email_to, $email_subject, $email_message, $headers))
	{
		echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..
		//header('Location: thanks.html');      
	}
	else
	{
		echo 'failed';// ... or this one to tell it that it wasn't sent    
	}
	
	
    
}
?>

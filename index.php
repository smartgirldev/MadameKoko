<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Madame Koko : Login</title>
<link rel="stylesheet" href="scripts/css3menu/style.css" type="text/css">
<style type="text/css">
body,td,th {
	color: #fa04ac;
	font-size: 24px;
}
body {
	background-color: #000;
}
a { 
	text-decoration:none; 
	color:#00c6ff;
}
.main {
	width: 800px;
	margin-left: auto;
	margin-right: auto;
}
.header {
	width: 645px;
	margin-left: auto;
	margin-right: auto;
}
.container {
	margin-left: auto;
	margin-right: auto;
	width: 798px;
}
.left {
	float: left;
	width: 266px;
}
.middle {
	float: left;
	width: 266px;
}
.right {
	float: left;
	width: 266px;
	padding-left: 190px;
}
.btn-sign {
	width:345px;
	margin-bottom:20px;
	margin:170px auto;
	padding:20px;
	border-radius:5px;
	background: -moz-linear-gradient(center top, #dedede, #fa04ac);
    background: -webkit-gradient(linear, left top, left bottom, from(#dedede), to(#fa04ac));
	background:  -o-linear-gradient(top, #dedede, #fa04ac);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#dedede', EndColorStr='#fa04ac');
	text-align:center;
	font-size:36px;
	color:#fff;
	text-transform:uppercase;
}

.btn-sign a { color:#fff; text-shadow:0 1px 2px #161616; }

#mask {
	display: none;
	background: #000; 
	position: fixed; left: 0; top: 0; 
	z-index: 10;
	width: 100%; height: 100%;
	opacity: 0.8;
	z-index: 999;
}

.login-popup{
	display:none;
	background: #333;
	padding: 10px; 	
	border: 2px solid #ddd;
	float: left;
	font-size: 1.2em;
	position: fixed;
	top: 50%; left: 50%;
	z-index: 99999;
	box-shadow: 0px 0px 20px #999;
	-moz-box-shadow: 0px 0px 20px #999; /* Firefox */
    -webkit-box-shadow: 0px 0px 20px #999; /* Safari, Chrome */
	border-radius:3px 3px 3px 3px;
    -moz-border-radius: 3px; /* Firefox */
    -webkit-border-radius: 3px; /* Safari, Chrome */
}

.register-popup{
	display:none;
	background: #333;
	padding: 10px; 	
	border: 2px solid #ddd;
	float: left;
	font-size: 1.2em;
	position: fixed;
	top: 50%; left: 50%;
	z-index: 99999;
	box-shadow: 0px 0px 20px #999;
	-moz-box-shadow: 0px 0px 20px #999; /* Firefox */
    -webkit-box-shadow: 0px 0px 20px #999; /* Safari, Chrome */
	border-radius:3px 3px 3px 3px;
    -moz-border-radius: 3px; /* Firefox */
    -webkit-border-radius: 3px; /* Safari, Chrome */
}

img.btn_close {
	float: right; 
	margin: -28px -28px 0 0;
}

fieldset { 
	border:none; 
}

form.signin .textbox label { 
	display:block; 
	padding-bottom:7px; 
}

form.signin .textbox span { 
	display:block;
}

form.signin p, form.signin span { 
	color:#999; 
	font-size:11px; 
	line-height:18px;
} 

form.signin .textbox input { 
	background:#666666; 
	border-bottom:1px solid #333;
	border-left:1px solid #000;
	border-right:1px solid #333;
	border-top:1px solid #000;
	color:#fff; 
	border-radius: 3px 3px 3px 3px;
	-moz-border-radius: 3px;
    -webkit-border-radius: 3px;
	font:13px Arial, Helvetica, sans-serif;
	padding:6px 6px 4px;
	width:200px;
}

form.signin input:-moz-placeholder { color:#bbb; text-shadow:0 0 2px #000; }
form.signin input::-webkit-input-placeholder { color:#bbb; text-shadow:0 0 2px #000;  }

.button { 
	background: -moz-linear-gradient(center top, #f3f3f3, #dddddd);
	background: -webkit-gradient(linear, left top, left bottom, from(#f3f3f3), to(#dddddd));
	background:  -o-linear-gradient(top, #f3f3f3, #dddddd);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#f3f3f3', EndColorStr='#dddddd');
	border-color:#000; 
	border-width:1px;
	border-radius:4px 4px 4px 4px;
	-moz-border-radius: 4px;
    -webkit-border-radius: 4px;
	color:#333;
	cursor:pointer;
	display:inline-block;
	padding:6px 6px 4px;
	margin-top:10px;
	font:12px; 
	width:214px;
}

.button:hover { background:#ddd; }

.error {
	font-size:10px;
	color: #fa04ac;
}

.main .header p {
	font-size: 24px;
}
</style>
 <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="scripts/js/jquery.validate.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('a.register-window').click(function() {
		$('#username').focus();
		// Getting the variable's value from a link 
		var registerBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(registerBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(registerBox).height() + 24) / 2; 
		var popMargLeft = ($(registerBox).width() + 24) / 2; 
		
		$(registerBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').click(function() { 
	  $('#mask , .register-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});

	$('a.login-window').click(function() {
		$('#username').focus();
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').click(function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
	
	$("#login").submit(function(){
		var form_data = {
			username: $("#username").val(),
	  		password: $("#password").val(),
			is_ajax: 1,
			btn_submit: $("#submit_login").val()
		};
		$.ajax({
			type: "POST",
			url: "login.php",
			cache: false,
			data: form_data,
			success: function()
			{
				$("#user_data").html(username + " online");
				//window.alert("Success!");
				location.replace("main.php");
			},
	   		beforeSend:function()
	   		{
				$("#add_err").html("Checking...")
	   		},
			error: function()
			{
				$("#error").html("Invalid username and/or password");
				//window.alert("Error!");	
			}
	  	});
		return false;
	 });
	
	$("#register").validate({
		debug: false,
		rules: {
			username: {
				required: true,
				email: true,
				remote: {
					url: "check_user.php",
					type: "post"
				}
			},
			password1: {
                required: true,
                minlength: 5
            },
            password2: {
                required: true,
                equalTo: password1
            }   
		},
		messages: {
			username: {
				required: "A valid email is your username",
				remote: jQuery.format("{0} is already in use")
			},
			password: {
				required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            conf_password: {
                required: "Please provide a password",
                equalTo: "Passwords do not match"
            },
		}
	});
	
	$("#register").submit(function(){

	var reg_form_data = {
			username: $("#reg_username").val(),
	  		password: $("#password1").val(),
			is_ajax: 1,
			btn_submit: $("#submit_reg").val()
		};
		$.ajax({
			type: "POST",
			url: "register.php",
			data: reg_form_data,
			success: function()
			{
				$("#register-box").fadeOut("normal");
				$("#login-box").fadeIn(300);
				
				//Set the center alignment padding + border
				var popMargTop = ($("#login-box").height() + 24) / 2; 
				var popMargLeft = ($("#login-box").width() + 24) / 2; 
					
				$("#login-box").css({ 
					'margin-top' : -popMargTop,
					'margin-left' : -popMargLeft
				});
				
				// Add the mask to body
				$('body').append('<div id="mask"></div>');
				$('#mask').fadeIn(300);
			}
		});
		return false;
	});

});
</script>
</head>
<body>
    <div class="main">
        <div class="header">
            <table width="645" border="0">
              <tr>
                <td><img src="images/name_logo.jpg" width="645" height="141" /></td>
              </tr>
              <tr>
                <td align="center">Domina &#8226; Fetishist &#8226; Model &#8226; Entertainer</td>
              </tr>
            </table>
   
      </div>
            <div class="middle">
            	<div class="btn-sign">
					<a href="#login-box" class="login-window"><img src="images/login.png" height="84" width="189"></a>
                    <a href="#register-box" class="register-window"><img src="images/register.png" height="88" width="279"></a>
        		</div>
                
                <div id="login-box" class="login-popup">
                    <a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
                    <div class="error" id="error"></div>
                    <form method="post" class="signin" id="login" action="">
                        <fieldset class="textbox">
                        <label class="username">
                        <span>Email</span>
                        <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Email Address">
                        </label>
                        
                        <label class="password">
                        <span>Password</span>
                        <input id="password" name="password" value="" type="password" placeholder="Password">
                        </label>
                        
                        <input class="button" id="submit_login" type="submit" value="Login"/>
                        
                        <p>
                        <a class="forgot" href="#">Forgot your password?</a>
                        </p>
                            
                        </fieldset>
                  </form>
                </div>
                  
                <div id="register-box" class="register-popup">
                    <a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
                    <form method="post" class="signin" id="register" action="">
                        <fieldset class="textbox">
                        <label class="username">
                        	<span>Email</span>
                            <input id="reg_username" name="username" value="" type="text" autocomplete="on" placeholder="Email Address">
                        </label>
                        
                        <label class="password">
                        	<span>Password</span>
                        	<input id="password1" name="password1" value="" type="password" placeholder="Password" required>
                        </label>
                        
                        <label class="password">
                        	<span>Confirm Password</span>
                        	<input id="password2" name="password2" value="" type="password" placeholder="Confirm Password" required>
                        </label>
                        
                        <input class="button" id="submit_reg" type="submit" value="Register" />
                                       
                        </fieldset>
                  </form>
                </div>
            </div>
            <div class="right">
                <img src="images/sidekoko.png">
            </div>
</div>
    </div>
</body>
</html>
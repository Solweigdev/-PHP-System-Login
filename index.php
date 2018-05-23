<?php

/**
 * @author Solweigdev
 * @link https://github.com/Solweigdev/-PHP-System-Login
 */

 // Include configuration to connection in your database
 require_once("config/config.php");

 // Include class login
 require_once("classes/login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System login php</title>
	<link rel="stylesheet" type="text/css" href="app/css/style.css">
</head>
<body>
    
    <div class="container-login">
		<div class="wrap-login">
			<form class="login-form validate-form">
				<span class="login-form-title">
					Send Us A Message
				</span>


				<div class="wrap-login validate-input" data-validate="Name is required">
					<label class="label-login" for="name">Full name</label>
					<input id="name" class="login" type="text" name="name" placeholder="Enter your name...">
					<span class="focus-login"></span>
				</div>


				<div class="wrap-login validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label class="label-login" for="email">Email Address</label>
					<input id="email" class="login" type="text" name="email" placeholder="Enter your email...">
					<span class="focus-login"></span>
				</div>

				

				<div class="wrap-login validate-input" data-validate = "Message is required">
					<label class="label-login" for="message">Message</label>
					<textarea id="message" class="login" name="message" placeholder="Type your message here..."></textarea>
					<span class="focus-login"></span>
				</div>

				<div class="container-login-form-btn">
					<button class="login-form-btn">
						Send
					</button>
				</div>

			</form>

			<div class="login-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
			</div>
		</div>
	</div>

</body>
</html>
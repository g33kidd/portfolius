<?php

require_once("system/init.php");

session_destroy();

if(is_user_loggedin()) 
	header("Location: dashboard.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<title>Portfolius &mdash; create a simple website fast.</title>
		<link rel="stylesheet" href="assets/css/main.css" type="text/css">
	</head>
	
	<body>
		
		<h1 class="landingtitle">Portfolius</h1>
		<div class="container">
			<div class="section left">
				<h1 class="title">Sign Up<span>Stay in touch</span></h1>
				<hr>
				<form action="" id="register">
					<input type="text" name="firstname" placeholder="First Name" id="firstName" />
	                <input type="text" name="lastname" placeholder="Last Name" id="lastName" />
	                <input type="email" name="email" placeholder="Email Adress" id="emailAdress" />
	                <input type="password" name="password" placeholder="Password" id="password" />
	                <input type="hidden" value="register" name="request" />
	                <br><input type="submit" value="Register">
				</form>
				<br>
				<h1 class="title">Login<span></span></h1>
				<hr>
				<form action="" id="login">
					<input type="email" name="email" placeholder="Email Adress" id="emailAdress" />
	                <input type="password" name="password" placeholder="Password" id="password" />
	                <input type="hidden" value="login" name="request" />
	                <br><input type="submit" value="Register">
				</form>
		<div class="header">
			<div class="container">
				
				<div class="sitetitle">Portfolius</div>
				<div class="sitepurpose">easy portfolio creation</div>
				<div class="signup" id="signup">
					<form action="" method="post" id="register">
						
						<input type="text" name="firstname" placeholder="First Name" class="firstname"/>
						<input type="text" name="lastname" placeholder="Last Name" class="lastname"/>
						<input type="email" name="email" placeholder="Email Address" class="email"/>
						<input type="password" name="password" placeholder="Password" class="password"/>
						<div class="clear"></div>
						<input type="submit" name="submit-register" value="Register" id="submit-register"/>
						<input type="hidden" name="request" value="register" id="request"/>
						
					</form>
					<form action="" method="post" id="login">
						<input type="text" name="email" placeholder="Email Address" class="email"/>
						<input type="password" name="password" placeholder="Password" class="password"/>
						<input type="checkbox" name="remember" placeholder="Remember me" class="remember"/>
						<input type="submit" name="submit-login" value="Login" id="submit-login"/>
						<input type="hidden" name="request" value="login" id="request"/>
					</form>
				</div>
				<div class="links">
					
					<div class="outter">
						<a id="feature-scroll">Features</a>
					</div>
					
				</div>
			</div>
			
			<div class="section right">
				Some about text will here.
			</div>
			
		</div>
		<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="assets/js/site.js"></script>
		
	</body>
	
</html>
<? require_once('system/init.php'); ?>
<!doctype html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8" />
		<title>Portfolius &mdash; create cool personal portfolio sites easy.</title>
		<link rel="stylesheet" href="assets/css/main.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	</head>
	<body>
		
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
		</div>
		<div class="features">
			<a name="features"/>
			<div class="container">
				
				content
				
			</div>
		</div>
		
		<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
	
</html>
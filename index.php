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
						<hr>
						<input type="submit" name="submit-login" value="Register" id="submit-login" class="left"/>
						<input type="hidden" name="request" value="register" id="request"/>
						<p class="right">Already registered? <a href="page.php" id="login">Login Now</a></p>
					</form>
				</div>
				
			</div>
		</div>
		
		<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
	
</html>
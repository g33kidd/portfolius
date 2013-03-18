<?php include_once("system/init.php"); ?>
<!doctype html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8" />
		<title>Portfolius Dashboard &mdash; create cool personal portfolio sites easy.</title>
		<link rel="stylesheet" href="assets/css/main.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
		<link rel="stylesheet" href="assets/css/dashboard.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	</head>
	
	<body>
		
		<div class="topbar">
			<div class="container">
				<div class="sitename left">Dashboard</div>
				<div class="nav right">
					<div class="user">
						<div class="image left"><img src="http://placehold.it/60x60&text=profile" /></div>
						<div class="info left"><span>Welcome, Joshua!</span> <a href="#" id="logout" class="logout">Logout</a></div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		
		<div class="container">
			<div class="sidebar">
				<div class="item bluebird">Sites</div>
				<div class="item teal">Options</div>
				<div class="item aster">Templates</div>
				<div class="item cayenne">Account</div>
				<div class="item help">Help</div>
			</div>
		</div>
		
		<div class="container">
			<div class="page">
				<div id="content">
					<input type="button" class="button" onclick="alert('THIS WORKS!');" value="HEY THERE! CREATE A WEBSITE" />
				</div>
			</div>
		</div>
		
		<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="assets/js/dashboard.js"></script>
		
	</body>
	
</html>
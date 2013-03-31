<?php
require_once("system/init.php");
session_destroy();
if(is_user_loggedin()) 
	header("Location: dashboard.php");
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<title>Portfolius | Home</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="assets/css/base.css" media="screen" title="no title" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assets/css/pages/home.css" media="screen" title="no title" charset="utf-8" />
	</head>
	<body>
		<div id="globalContainer">
			<div class="c-STATIC-overlay"></div>
				<div id="globalNavigation">
				<div class="container">
				<ul>
					<li class="nav-image logo"><img src="assets/images/icons/partial.svg"></li>
					<li class="nav-item title">Portfolius</li>
				</ul>
				</div>
			</div>
			<div id="contentContainer" class="has_overlay">
				<div class="container c-STATIC-overlay-feature">
					<span>This is Portfolius</span>
				</div>
			</div>
			<div id="contentContainer" class="no_overlay">
				<section class="container c-EXAMPLE-profile-header">
				<div id="l-PROFILE-ex">
				<div class="container-user-cover"><img src="assets/images/landing/cover.jpg"></div>
				<div class="container-user-data"><span class="-data-title">User Dashboard</span><span class="-data-subtitle">The most friendly of all site-builder UIs</span></div>
				</div>
				<div class="feature-landing-tagpro">Alpha Status is now!</div>
				</section>
				<section class="container">
					<form class="profile-signup" method="POST" action="">
						<input type="text" name="email" placeholder="Email Address">
						<input type="password" name="password" placeholder="Password">
						<input type="submit" name="submit-login" value="Login" id="submit-login"/>
						<input type="hidden" name="request" value="login" id="request"/>
					</form>
				</section>
			</div>
		</div>
	</body>
</html>
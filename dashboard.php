<?php 

include_once("system/init.php"); 
if(!is_user_loggedin())
	//header("Location:index.php");
$sites = $user->site_count($_SESSION['id']);


$dash->init(get_site_id());
?>
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
			<div class="padding">
				<div class="container">
					<div class="nav left">
						<a href="#" class="item">Dashboard</a>
						<a href="#" class="item">Sites</a>
						<a href="#" class="item">Settings</a>
					</div>
					<div class="nav right">
						<a href="#" class="item">Welcome, <? echo get_name(); ?>!</a>
						<a href="#" class="item" id="logout"><span aria-hidden="true" class="icon-exit"></span></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="topbar-space"></div>
		
		<div class="container">

			<div class="dashMain" id="main">
			</div>

		</div>
		
		<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="assets/js/dashboard.php"></script>
		<script src="assets/js/site.js"></script>
		
	</body>
	
</html>
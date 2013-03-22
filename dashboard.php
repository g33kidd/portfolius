<?php 

include_once("system/init.php"); 
$sites = $user->site_count($_SESSION['id']);

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
					<img src="assets/images/icons/partial.svg" class="logo left" width="25px" height="25px">
					<div class="title left">Portfolius</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="topbar-space"></div>
		
		<div class="container">
			<div class="dashMain">
				<?php
				
				$dash->init(get_site_id());
				include("design/dashboard/customFieldsForm.php");
				
				?>
			</div>
		</div>
		
		<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="assets/js/dashboard.php"></script>
		<script src="assets/js/site.js"></script>
		
	</body>
	
</html>
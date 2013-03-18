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
				<div class="sitename left">Portfolius Dashboard</div>
				<div class="nav right">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Theme</a></li>
						<li><a href="#">Settings</a></li>
						<li><a href="#">Social</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		
		<div class="content">
			<div class="container">
				<div id="content">
					<?php
					
					$site_options = array(
						'theme' => 'metro',
						'data' => array(
							'title' => 'Joshua Kidd',
							'subtitle' => 'Do a Barrel Roll!',
							'email' => 'kidd.josh.343@gmail.com',
							'phone' => '(620) 271-2795',
							'website' => array('www.joshuak.me','www.universalbloggers.com'),
						)
					);
					$options = json_encode($site_options);
					
					$site->update(5, $options);
					
					?>
				</div>
			</div>
		</div>
		
		<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="assets/js/dashboard.js"></script>
		
	</body>
	
</html>
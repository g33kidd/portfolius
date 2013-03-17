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
<<<<<<< HEAD
				<? echo $user->site_count('1'); ?>
=======
				<?php echo $user->site_count('2'); ?>
>>>>>>> refs/heads/unbreaks
				
				<?php
				if($user->site_count('1')==1){
					$delete_site = $site->delete(3);
				}else{
					$config = array('owner'=>1,'title'=>'GoGenko','subtitle'=>'do a barrel roll!','theme'=>'default');
					$create_site = $site->create($config);
					if($create_site){
						echo "Site has been created just now!";
					}else{
						echo "ERROR";
					}
				}
				?>
			</div>
		</div>
		
	</body>
	
</html>
<?php 
include_once('system/init.php');
$site->initialize(1);
?>
<!doctype html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8" />
		<title>Portfolius Dashboard &mdash; create cool personal portfolio sites easy.</title>
		<link rel="stylesheet" href="design/theme/<? echo $site->theme . "TEST"; ?>/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	</head>
	
	<body>
		<? echo $site->page_load(); ?>
	</body>
	
</html>
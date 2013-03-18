<?php
include_once('system/init.php');
if(!isset($_GET['id'])||$site->exists($_GET['id'])==false){
	header('This is not the page you are looking for', true, 404);
   	include('error.php');
   	exit();
}
$id = $_GET['id'];
$site->initialize($id);


?>
<!doctype html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8" />
		<title><? $site->sitedata('title'); ?> &mdash; <? $site->sitedata('subtitle'); ?></title>
		<link rel="stylesheet" href="design/theme/<? echo $site->theme . "TEST"; ?>/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	</head>
	
	<body>
		<?php echo $site->page_load(); ?>
	</body>
	
</html>
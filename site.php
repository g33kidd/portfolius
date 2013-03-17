<?php
include_once('system/init.php');
if(!$_GET['id']){
	die;
}

$site->initialize(2);

?>
<!doctype html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8" />
		<title>Portfolius Dashboard &mdash; create cool personal portfolio sites easy.</title>
		<link rel="stylesheet" href="design/theme/<?php echo $site->theme . "TEST"; ?>/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	</head>
	
	<body>
		<?php echo $site->page_load(); ?>
	</body>
	
</html>
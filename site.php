<?php
include_once('system/init.php');
if(!isset($_GET['id'])||$site->exists($_GET['id'])==false){
	header('This is not the page you are looking for', true, 404);
   	include('error.php');
   	exit();
}
$id = $_GET['id'];
$site->initialize($id);

/// This will be used to find all options set by the theme
/// Such as Dependency Locations, CSS Options, or Other Pages possibly
//$site->config();

$site->dependencies();
$site->page_load();

?>
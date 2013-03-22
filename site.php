<?php
include_once('system/init.php');
if(!isset($_GET['id'])||$site->exists($_GET['id'])==false){
	header('This is not the page you are looking for', true, 404);
   	include('error.php');
   	exit();
}
$id = $_GET['id'];
$site->initialize($id);

$site->page_load();

?>
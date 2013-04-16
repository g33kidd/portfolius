<?php

include_once("../../system/init.php");

if(!isset($_POST['request']))
	die;

switch($_POST['request']){
	case 'setup':
		
	break;
}


print_r(json_encode($data));

?>
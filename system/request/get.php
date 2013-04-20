<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once('../init.php');
$response = array();

switch($_POST['request']) {

	case 'site_data':
		$id = $_POST['site_id'];
		$site = $site->get_data($id);
		$response['data'] = $site;
	break;
	case 'num_sites':
		return user_site_count();
	break;

}

$response = json_encode($response);
print_r($response);

?>
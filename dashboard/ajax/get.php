<?php

include_once("../../system/init.php");

if(!isset($_GET['request']))
	die;

switch($_GET['request']){
	case 'live_info':
		$data = live_update();
	break;
}

function live_update() {
	$sites = array('sites'=>get_sites());
	$stats = array('stats'=>array(
		'sites' => user_site_count(),
		'visits' => '200',
		'pageviews' => '1233',
		'unique' => '200',
		'revenue' => '500.23',
		'affiliate' => '12',
		'themes' => user_themes(),
		'monthly_price' => month_price(),
		'reward_coin' => '5',
		'cool' => '42',
		'entry' => user_entries()
	));

	$final = array_merge($sites, $stats);
	return $final;
}

print_r(json_encode($data));

?>
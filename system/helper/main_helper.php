<?php

/* Just some simple helper functions. No OOP HERE! :) */

// Check if the user is logged in.
function is_user_loggedin() {
	if(isset($_SESSION['loggedin'])){
		if($_SESSION['loggedin']==true) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

// Get current logged in user fullname.
function get_name() {
	if(isset($_SESSION['name'])){
		return $_SESSION['name'];
	}else{
		return 'undefined';
	}
}

function get_user_thumbnail() {
	// get blob from DB later....
	return "<img src='http://placehold.it/50x50&text=JK'>";
}

// Get current logged in users Single Site ID.
function get_site_id() {
	global $db;
	$id_session = $_SESSION['id'];
	$site_id = $db->query("SELECT id,owner FROM sites WHERE owner='{$id_session}'");
	if($site_id->rowCount() < 1){
		return false;
	}else{
		$site_id = $site_id->fetch(PDO::FETCH_ASSOC);
		return $site_id['id'];
	}
}

function isSiteTypePost($id) {
	global $db;
	$sites = $db->query("SELECT id,owner,type FROM codejo_sites.site WHERE id='{$id}'");
	$sites = $sites->fetch(PDO::FETCH_COLUMN);
	if($sites == 0){
		return false;
	}else{
		return true;
	}
}

>>>>>>> kiddj2015:system/helper/main_helper.php
function get_sites() {
	global $db;
	$sites = $db->query("SELECT id,owner,title FROM codejo_sites.site WHERE owner='{$_SESSION['id']}'");
	$sites = $sites->fetchAll(PDO::FETCH_ASSOC);
	return $sites;
}

function user_site_count() {
	global $db;
	$id_session = $_SESSION['id'];
	$sites = $db->query("SELECT id,owner FROM codejo_sites.site WHERE owner='{$id_session}'");
	return $sites->rowCount();
}

function max_sites() {
	switch(userinfo('acct_type')) {
		case 0:
			return "1";
		break;
		case 1:
			return "10";
		break;
		case 2:
			return "25";
		break;
		case 3:
			return "35";
		break;
	}
}

function month_price() {
	switch(userinfo('acct_type')) {
		case 0:
			return "0.00";
		break;
		case 1:
			return "2.99";
		break;
		case 2:
			return "4.99";
		break;
		case 3:
			return "15.99";
		break;
	}
}

//prints an array with automatic <pre> tag rendering.
function print_rr($arr) {
	if(!empty($arr)){
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
}

//simple sendmail function
function sendMail($to, $title, $from, $subject = "Welcome", $message) {
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.$title.' <'.$from.'>' . "\r\n";
	$subject = $subject.' - '.$title;
	$message = $message;
	return @mail($to, $subject, $message, $headers);
}

//time ago 
function ago($i){
    $m = time()-$i; 
	$o = 'now';
    $t = array('year'=>31556926,'month'=>2629744,'week'=>604800,'day'=>86400,'hour'=>3600,'minute'=>60,'second'=>1);
	
    foreach($t as $u=>$s)
	{
        if($s<=$m)
		{
			$v=floor($m/$s); 
			$o="$v $u".($v==1?'':'s').' ago'; 
			break;
		}
    }
    return $o;
}

// simple redirect
function redirect_to($location){
    if (!headers_sent()) {
		header('Location: ' . $location);
		exit;
	}
	else
	{
		echo '<script type="text/javascript">';
		echo 'window.location.href="' . $location . '";';
		echo '</script>';
		echo '<noscript>';
		echo '<meta http-equiv="refresh" content="0;url=' . $location . '" />';
		echo '</noscript>';
	}
}

// valid ip checker
function validip($ip)
{
    return filter_var($ip, FILTER_VALIDATE_IP, array('flags' => FILTER_FLAG_NO_PRIV_RANGE,FILTER_FLAG_NO_RES_RANGE)) ? true : false;
}

// get real ip
function getip()
{
    $ip = $_SERVER['REMOTE_ADDR'];
    if (isset($_SERVER['HTTP_VIA'])) {
        $forwarded_for = (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) ? (string)$_SERVER['HTTP_X_FORWARDED_FOR'] : '';
        if ($forwarded_for != $ip) {
            $ip = $forwarded_for;
            $nums = sscanf($ip, '%d.%d.%d.%d');
            if ($nums[0] === null || $nums[1] === null || $nums[2] === null || $nums[3] === null || $nums[0] == 10 || ($nums[0] == 172 && $nums[1] >= 16 && $nums[1] <= 31) || ($nums[0] == 192 && $nums[1] == 168) || $nums[0] == 239 || $nums[0] == 0 || $nums[0] == 127) $ip = $_SERVER['REMOTE_ADDR'];
        }
    }
    return $ip;
}

// simple get size
function size($size, $levels = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $size = (double)$size;
    for ($Steps = 0; abs($size) >= 1024; $size /= 1024, $steps++) {}
	
    if (func_num_args() == 1 && $steps >= 4) {
        $levels++;
    }
    return number_format($size, $levels).$units[$steps];
}

// simple text shortener
function CutName($text, $lenght = 45)
{
    return (strlen($txt) > $lenght ? substr($text, 0, $lenght - 1).'...' : $text);
}

// User functions
function account_type() {
	global $db;
	$plan = $db->query("SELECT id,acct_type FROM codejo_main.users WHERE id='{$_SESSION['id']}'");
	$plan = $plan->fetch(PDO::FETCH_ASSOC);
	switch($plan['acct_type']) {
		case '0': return "Free"; break;
		case '1': return "Basic"; break;
		case '2': return "Basic Pro"; break;
		case '3': return "Pro"; break;
		default: return "unknown"; break;
	}
}
// get number of themes the user has in their account.
function user_themes() {
	global $db;
	$theme_count = $db->query("SELECT id,user_id,theme_id FROM codejo_main.themes WHERE user_id='{$_SESSION['id']}'");
	$count = $theme_count->rowCount();
	return $count;
}

function user_entries() {
	global $db;
	$entries = $db->query("SELECT id,user_id FROM codejo_sites.entry WHERE user_id='{$_SESSION['id']}'");
	$count = $entries->rowCount();
	return $count;
}

// Gets any column from the users table for user information.
function userinfo($info='name') {
	global $db;
	$info = $db->query("SELECT {$info} FROM codejo_main.users WHERE id='{$_SESSION['id']}'");
	$info = $info->fetch(PDO::FETCH_COLUMN);
	return $info;
}

?>
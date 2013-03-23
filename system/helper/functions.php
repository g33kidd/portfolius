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

function user_site_count() {
	global $db;
	$id_session = $_SESSION['id'];
	$sites = $db->query("SELECT id,owner FROM sites WHERE owner='{$id_session}'");
	return $sites->rowCount();
}

//prints an array with automatic <pre> tag rendering.
function print_rr($arr) {
	if(!empty($arr)){
		echo "<pre>";
		print_r($arr);
		echo "<pre>";
	}
}

?>
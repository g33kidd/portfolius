<?php

function hasSiteTypePost() {
	global $db;
	$sites = $db->query("SELECT id,owner,type FROM codejo_sites.site WHERE owner='{$_SESSION['id']}' AND type BETWEEN 5 AND 10");
	$sites = $sites->rowCount();
	if($sites == 0){
		return false;
	}else{
		return true;
	}
}

function moduleQuickPost() {
	if(hasSiteTypePost()) {
		
	}else{

	}
}

function moduleAddSite() {
}

function moduleUpgrade() {
}

function module() {
}

?>
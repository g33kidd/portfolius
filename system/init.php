<?php
define("_VALID_PHP", true);

session_start();
//define("_BLOCK_EXTERNAL");
include_once('class/db.class.php');
include_once('class/user.class.php');
include_once('class/site.class.php');
include_once('class/filter.class.php');

$db = new db();
$user = new user();
$site = new site();
$request = new filter();
?>
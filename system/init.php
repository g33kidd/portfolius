<?php
session_start();

include_once('class/db.class.php');
include_once('class/user.class.php');
include_once('class/site.class.php');

$db = new db;
$user = new user;
$site = new site;

?>
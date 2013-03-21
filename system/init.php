<?php
session_start();

include_once('class/db.class.php');
include_once('helper/functions.php');
include_once('class/user.class.php');
include_once('class/site.class.php');
include_once('class/dashboard.class.php');

$db = new db;
$user = new user;
$site = new site;
$dash = new dashboard;

?>
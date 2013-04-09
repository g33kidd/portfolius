<?php

define("_VALID_PHP", true);
session_start();

include_once('class/db.class.php');
include_once('helper/main_helper.php');
include_once('helper/dashboard_helper.php');
include_once('class/user.class.php');
include_once('class/site.class.php');
include_once('class/dashboard.class.php');
include_once('class/filter.class.php');
//include_once('class/mail.class.php');

include_once('thirdparty/Stripe/Stripe.php');
include_once('thirdparty/Mandrill/Mandrill.php');

$db = new db;
//$mail = new mail;
$user = new user;
$site = new site;
$request = new filter;
$dash = new dashboard;

?>
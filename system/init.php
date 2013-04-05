<?php

define("_VALID_PHP", true);
session_start();

include_once('class/db.class.php');
include_once('helper/functions.php');
include_once('class/user.class.php');
include_once('class/site.class.php');
include_once('class/dashboard.class.php');
include_once('class/filter.class.php');

include_once('thirdparty/stripe/Stripe.php');

$db = new db;
$user = new user;
$site = new site;
$request = new filter;
$dash = new dashboard;

?>
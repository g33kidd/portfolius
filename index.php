<?php
	require_once("system/init.php");
	session_destroy();
	if(is_user_loggedin()) header("Location: dashboard.php");
?>
<!DOCTYPE HTML>
<html lang="en">
 <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <title>Portfolius | Home</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="assets/css/base.css" media="screen" title="no title" charset="utf-8" />
 </head>
 <body>
  <div id="globalContainer">
   <!-- -- :navigation: -- -->
   <div id="globalNavigation">
	<div class="container">
	 <ul>
	  <li class="nav-image logo"><img src="assets/images/icons/partial.svg"></li>
	  <li class="nav-item title">Portfolius</li>
	 </ul>
	</div>
   </div>
   <!-- -- :content-container: -- -->
   <div id="contentContainer">
   </div>
  </div>
 </body>
</html>

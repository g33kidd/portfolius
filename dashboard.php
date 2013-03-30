<?php
	include_once ("system/init.php");
	$sites = $user -> site_count($_SESSION['id']);
?>
<!DOCTYPE HTML>
<html lang="en" class="dashboard">
 <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <title>Portfolius | Dashboard</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="assets/css/base.css" media="screen" title="no title" charset="utf-8" />
 </head>
 <body>
  <div id="globalContainer">
   <div id="globalNavigation">
	<div class="container">
	 <ul>
	  <li class="nav-image logo"><img src="assets/images/icons/partial.svg"></li>
	  <li class="nav-item title">Portfolius</li>
	 </ul>
	</div>
   </div>
   <div id="contentContainer">
   	<div class="container"><!-- Enter dashboard content --></div>
   	<!-- :example-content -->
   	<div class="row1column mtl">
   	 <div class="column content b r"></div>
   	</div>
   	<div class="row2column">
   	 <div class="first column content b r"></div>
   	 <div class="last column content b r"></div>
   	</div>
   	<div class="row3column">
   	 <div class="first column content a r"></div>
   	 <div class="column content a r"></div>
   	 <div class="last column content a r"></div>
   	</div>
   </div>
  </div>
  <script src="//code.jquery.com/jquery-latest.js"></script>
  <script src="assets/js/dashboard.php"></script>
  <script src="assets/js/site.js"></script>
 </body>
</html>
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
  <link rel="stylesheet" type="text/css" href="assets/css/home.css" media="screen" title="no title" charset="utf-8" />
 </head>
 <body>
  <!-- :start navigation bar -- top of page, faded for effect -->
  <div id="c-PUBLIC-navbar" class="hasRel">
   <nav class="nav-inner">
   	<div class="container">
   	
   		<ul>
   		 <li class="logo"><img src="assets/images/icons/partial.svg" width="25px" height="25px"></li>
   		 <li class="portfolius">Portfolius</li>
   		</ul>
   		
   	</div>
   </nav>
   
  </div>
  <!-- :end navigation bar -->
  <!-- :start overlay --><div id="overlay" class="s-private"></div><!-- :end overlay -->
  <!-- :start top section of landing page -->
  
  <section id="landing" class="top content-lander">
  	<h1 class="mtl">This is Portfolius</h1>
  </section>
  
  <!-- :end top section of landing page -->
  
  <!-- :start content container for landing page -->
  
  <section id="landing" class="content">
  	<div class="container example">
	<div class="d-data-private-cover">
	<div class="image-container"><img src="assets/images/landing/cover.jpg" alt="cover image for portfolius landing page" class="cover"></div>
	 <div class="user-data-example">
	  <div class="data-container">
	   <span class="user-data-title">Zachary Kidd</span>
	   <span class="user-data-subtitle">Artist, Musician, Rocker</span>
	  </div>
	  <!-- <div class="c-PUBLIC-profile-img"></div> -->
	 </div>
	</div>
	<div class="z-temp-home">
	 <span>Set your stage</span>
	</div>
	<div class="clear"></div>
	</div>
	<!-- :todo: page jumping nav bar -->
	<nav id="uinavblock">
	 <ul>
	  <li>Hello</li>
	  <li>Bellow</li>
	  <li>Slowly</li>
	  <li>Hello</li>
	  <li>Bellow</li>
	  <li>Slowly</li>
	 </ul>
	</nav>
  </section>
  
  <!-- :end content container for landing page -->
 </body>
</html>

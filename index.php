<<<<<<< HEAD
<?php 
include_once("system/init.php"); 
if(is_user_loggedin())
	header("Location: dashboard.php");
	
=======
<?php
require_once("system/init.php");
if(is_user_loggedin()) 
	header("Location: dashboard/");
>>>>>>> kiddj2015
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
<<<<<<< HEAD
		<meta charset="UTF-8" />
		<title>Portfolius Dashboard &mdash; create cool personal portfolio sites easy.</title>
		 <!-- Loading Bootstrap -->
	    <link href="assets/css/bootstrap.css" rel="stylesheet">

	    <!-- Loading Flat UI -->
	    <link href="assets/css/flat-ui.css" rel="stylesheet">
	    <link rel="shortcut icon" href="assets/images/flat/">

	    <!-- Loading Custom -->
	    <link rel="stylesheet" href="assets/css/dashboard.css">
		<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="rs-plugin/css/captions.css" media="screen" />

		<style>
			.fullwidthbanner-container{
				width:100% !important;
				position:relative;
				padding:0;
				max-height:500px !important;
				overflow:hidden;
			}

			.fullwidthbanner-container .fullwidthabnner	{
				width:100% !important;
				max-height:500px !important;
				position:relative;
			}
			logo { float: left; } .logo img { width: 25px; height: 25px; float: left; margin-right: 3px; display: block; }
			#bigText {display:none;}
		</style>
=======
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<title>CodeJo | Home</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="assets/css/base.css" media="screen" title="no title" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assets/css/pages/home.css" media="screen" title="no title" charset="utf-8" />
>>>>>>> kiddj2015
	</head>

	<body>
		
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
<<<<<<< HEAD
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class='logo'><a href="#"><img class="img-rounded" src="assets/images/icons/partial.svg"></a></li>
							<li><a href="#"><em>Portfolius</em></a></li>

						</ul>
						<ul class="nav pull-right">
							<li><a href="#">Welcome, Guest</a></li>
							<li><a href="#" data-dash-page="signup-section">Register</a></li>
							<li><a href="#" data-dash-page="login-section">Login</a></li>
							<li><a href="#" data-dash-page="recover-section">Recover</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="topbar-space"></div>

		<div class="container page-container" id="main">

			<div class="btn btn-large btn-block btn-success" id="bigText">Success Button</div>
			<!-- Start of Main Page -->
			<div class="section active" id="signup-section">

				<h2>Register for free Portfolius account</h2>
				<br/>
				<form class="form-inline" method="POST" action="" id="register">
					<div class="row-fluid">
						<div class="span6">
							<input type="text" name="email" class="input-large" placeholder="Email address">
							<input type="password" name="password" class="input-large" placeholder="Password">
						</div>
						<div class="span3" style="margin-top:10px;">
							<label class="checkbox" for="checkbox2">
								<input type="checkbox" name="agree" checked="checked" value="yes" id="checkbox2">
								&nbsp; I agree with User Agreement.
							</label>
						</div>
						<div class="span3">
							<input type="hidden" name="request" value="signup" id="request"/>
							<button type="submit" class="btn btn-large btn-block">Signup</button>
						</div>
					</div>
				</form>
			</div>
			<!-- End of Main Page -->
			
			<!-- Start of Site Page -->
			<div class="section" id="login-section">
				<h2>User Login</h2>
				<br/>
				<form class="form-inline" method="POST" action="" id="login">
					<div class="row-fluid">
						<div class="span6">
							<input type="email" name="email" class="input-large" placeholder="Email address">
							<input type="password" name="password" class="input-large" placeholder="Password">
						</div>
						<div class="span3" style="margin-top:10px;">
							<label class="checkbox" for="checkbox3">
								<input type="checkbox" name="remember" checked="checked" id="checkbox3">
								&nbsp; Remember Me
							</label>
						</div>
						<div class="span3">
							<input type="hidden" name="request" value="login" id="request"/>
							<button type="submit" class="btn btn-large btn-block">Login</button>
						</div>
=======
				<ul>
					<li class="nav-image logo"><img src="assets/images/icons/partial.svg"></li>
					<li class="nav-item title">CodeJo</li>
				</ul>
				</div>
			</div>
			<div id="contentContainer" class="has_overlay">
				<div class="container c-STATIC-overlay-feature">
					<span>This is CodeJo</span>
				</div>
			</div>
			<div id="contentContainer" class="no_overlay">
				<section class="container c-EXAMPLE-profile-header">
					<div id="l-PROFILE-ex">
						<div class="container-user-cover"><img src="assets/images/landing/cover.jpg"></div>
						<div class="container-user-data"><span class="-data-title">User Dashboard</span><span class="-data-subtitle"></span></div>
>>>>>>> kiddj2015
					</div>
				</form>
			</div>
			<!-- End of Site Page -->
			
			<!-- Start of Store Page -->
			<div class="section" id="recover-section">
				<h2>Password Recover</h2>
				<br/>
					<form class="form-inline" method="POST" action="" id="recover">
						<div class="row-fluid">
							<div class="span9">
								<input type="text" name="email" class="input-large" placeholder="Email address"> 
								<strong>or</strong> 
								<input type="text" name="username" class="input-large" placeholder="Username">
							</div>
							<div class="span3">
								<input type="hidden" name="request" value="recover" id="request"/>
								<button type="submit" class="btn btn-large btn-block">Recover</button>
							</div>
						</div>					
					</form>
			</div>
			<!-- End of Site Page -->			
		</div>
	
		<div class="container">
			<h1>Why use Portfolius?</h1>
		</div>
		<div class="fullwidthbanner-container">
					<div class="fullwidthabnner">
						<ul>
							<li data-transition="3dcurtain-vertical" data-slotamount="10" data-masterspeed="300" data-thumb="images/thumbs/thumb1.jpg">
										<!-- THE MAIN IMAGE IN THE SLIDE -->
										<img src="images/slides/slide1_wide1.jpg" >

												<!-- THE CAPTIONS OF THE FIRST SLIDE -->
										<div class="caption large_text sfb"
											 data-x="44"
											 data-y="47"
											 data-speed="300"
											 data-start="800"
											 data-easing="easeOutExpo"  >OVER <span style="color: #ffcc00;">1,000,000</span> user portoflio</div>

										<div class="caption randomrotate"
											 data-x="48"
											 data-y="131"
											 data-speed="600"
											 data-start="1100"
											 data-easing="easeOutExpo"  ><img src="images/slides/p1.jpg" alt="Image 2"></div>

										<div class="caption randomrotate"
											 data-x="90"
											 data-y="206"
											 data-speed="600"
											 data-start="1200"
											 data-easing="easeOutExpo"  ><img src="images/slides/p2.jpg" alt="Image 3"></div>

										<div class="caption randomrotate"
											 data-x="205"
											 data-y="140"
											 data-speed="600"
											 data-start="1300"
											 data-easing="easeOutExpo"  ><img src="images/slides/p3.jpg" alt="Image 4"></div>

										<div class="caption randomrotate"
											 data-x="188"
											 data-y="246"
											 data-speed="300"
											 data-start="1400"
											 data-easing="easeOutExpo"  ><img src="images/slides/p4.jpg" alt="Image 5"></div>

										<div class="caption randomrotate"
											 data-x="55"
											 data-y="316"
											 data-speed="600"
											 data-start="1500"
											 data-easing="easeOutExpo"  ><img src="images/slides/p5.jpg" alt="Image 6"></div>

										<div class="caption randomrotate"
											 data-x="173"
											 data-y="329"
											 data-speed="300"
											 data-start="1600"
											 data-easing="easeOutExpo"  ><img src="images/slides/p6.jpg" alt="Image 7"></div>

										<div class="caption randomrotate"
											 data-x="255"
											 data-y="294"
											 data-speed="300"
											 data-start="1700"
											 data-easing="easeOutExpo"  ><img src="images/slides/p7.jpg" alt="Image 8"></div>

										<div class="caption randomrotate"
											 data-x="275"
											 data-y="166"
											 data-speed="300"
											 data-start="1800"
											 data-easing="easeOutExpo"  ><img src="images/slides/p8.jpg" alt="Image 9"></div>

										<div class="caption randomrotate"
											 data-x="84"
											 data-y="113"
											 data-speed="300"
											 data-start="1900"
											 data-easing="easeOutExpo"  ><img src="images/slides/p9.jpg" alt="Image 10"></div>

										<div class="caption randomrotate"
											 data-x="26"
											 data-y="225"
											 data-speed="300"
											 data-start="2000"
											 data-easing="easeOutExpo"  ><img src="images/slides/p10.jpg" alt="Image 11"></div>

										<div class="caption randomrotate"
											 data-x="110"
											 data-y="187"
											 data-speed="300"
											 data-start="2100"
											 data-easing="easeOutExpo"  ><img src="images/slides/p11.jpg" alt="Image 12"></div>

										<div class="caption randomrotate"
											 data-x="183"
											 data-y="221"
											 data-speed="300"
											 data-start="2200"
											 data-easing="easeOutExpo"  ><img src="images/slides/p12.jpg" alt="Image 13"></div>
							</li>
							<!-- THE FIRST SLIDE -->
							<li data-transition="3dcurtain-vertical" data-slotamount="10" data-masterspeed="300" data-thumb="images/thumbs/thumb1.jpg">
										<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
										<img src="images/slides/wide1.jpg" >

										<!-- THE CAPTIONS IN THIS SLDIE -->
										<div class="caption large_text sfb"
											 data-x="176"
											 data-y="15"
											 data-speed="300"
											 data-start="800"
											 data-easing="easeOutExpo"  >OVER <span style="color: #ffcc00;">100,000</span> REGISTERED USERS</div>

										<div class="caption randomrotate"
											 data-x="189"
											 data-y="76"
											 data-speed="600"
											 data-start="1100"
											 data-easing="easeOutExpo"  ><img src="images/slides/p1.jpg" alt="Image 2"></div>

										<div class="caption randomrotate"
											 data-x="0"
											 data-y="92"
											 data-speed="600"
											 data-start="1200"
											 data-easing="easeOutExpo"  ><img src="images/slides/p2.jpg" alt="Image 3"></div>

										<div class="caption randomrotate"
											 data-x="200"
											 data-y="209"
											 data-speed="600"
											 data-start="1300"
											 data-easing="easeOutExpo"  ><img src="images/slides/p3.jpg" alt="Image 4"></div>

										<div class="caption randomrotate"
											 data-x="97"
											 data-y="117"
											 data-speed="300"
											 data-start="1400"
											 data-easing="easeOutExpo"  ><img src="images/slides/p4.jpg" alt="Image 5"></div>

										<div class="caption randomrotate"
											 data-x="14"
											 data-y="222"
											 data-speed="600"
											 data-start="1500"
											 data-easing="easeOutExpo"  ><img src="images/slides/p5.jpg" alt="Image 6"></div>

										<div class="caption randomrotate"
											 data-x="638"
											 data-y="201"
											 data-speed="300"
											 data-start="1600"
											 data-easing="easeOutExpo"  ><img src="images/slides/p6.jpg" alt="Image 7"></div>

										<div class="caption randomrotate"
											 data-x="717"
											 data-y="294"
											 data-speed="300"
											 data-start="1700"
											 data-easing="easeOutExpo"  ><img src="images/slides/p7.jpg" alt="Image 8"></div>

										<div class="caption randomrotate"
											 data-x="682"
											 data-y="79"
											 data-speed="300"
											 data-start="1800"
											 data-easing="easeOutExpo"  ><img src="images/slides/p8.jpg" alt="Image 9"></div>

										<div class="caption randomrotate"
											 data-x="807"
											 data-y="71"
											 data-speed="300"
											 data-start="1900"
											 data-easing="easeOutExpo"  ><img src="images/slides/p9.jpg" alt="Image 10"></div>

										<div class="caption randomrotate"
											 data-x="818"
											 data-y="271"
											 data-speed="300"
											 data-start="2000"
											 data-easing="easeOutExpo"  ><img src="images/slides/p10.jpg" alt="Image 11"></div>

										<div class="caption randomrotate"
											 data-x="95"
											 data-y="248"
											 data-speed="300"
											 data-start="2100"
											 data-easing="easeOutExpo"  ><img src="images/slides/p11.jpg" alt="Image 12"></div>

										<div class="caption randomrotate"
											 data-x="762"
											 data-y="165"
											 data-speed="300"
											 data-start="2200"
											 data-easing="easeOutExpo"  ><img src="images/slides/p12.jpg" alt="Image 13"></div>
									</li>
						</ul>



						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<div id="footer">
					<div class="container">
						<div class="fluid">
							<div class="span6">
								<a href="#">link</a>
								<a href="#">link</a>
								<a href="#">link</a>
								<a href="#">link</a>
								<a href="#">link</a>
							</div>
							<div class="span6">
								<a href="#">link</a>
								<a href="#">link</a>
								<a href="#">link</a>
								<a href="#">link</a>
								<a href="#">link</a>
							</div>
						</div>
					</div>
				</div>
		
		<script src="//code.jquery.com/jquery-1.8.0.js"></script>
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.js?ver=3.4.2'></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
		<script src="assets/js/flat/jquery.dropkick-1.0.0.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.0.7/jquery.placeholder.min.js"></script>
		<script src="assets/js/flat/jquery.tagsinput.js"></script>
		<script src="assets/js/flat/custom_checkbox_and_radio.js"></script>
		<script src="assets/js/dashboard.js.php"></script>
		<script>
			var api;
			jQuery(document).ready(function() {
				 api =  jQuery('.fullwidthabnner').revolution(
								{
									delay:9000,
									startheight:500,
									startwidth:960,

									hideThumbs:10,

									thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
									thumbHeight:50,
									thumbAmount:5,

									navigationType:"both",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
									navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
									navigationStyle:"round",				//round,square,navbar

									touchenabled:"on",						// Enable Swipe Function : on/off
									onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

									navOffsetHorizontal:0,
									navOffsetVertical:20,

									stopAtSlide:-1,
									stopAfterLoops:-1,

									shadow:1,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
									fullWidth:"on"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
								});
			});
			
			function loadVideo(){
				jQuery("#video_link").html('<iframe id="video_frame" width="960" height="540" src="http://www.youtube.com/embed/t9N36YbFS4c?autoplay=1&fmt=22" frameborder="0" allowfullscreen style="max-width:100%;"></iframe>');
			}
		</script>
		<script src="assets/js/site.js"></script>
	</body>
	
</html>
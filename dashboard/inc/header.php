<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>CodeJo &mdash; user dashboard</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes" />    
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- ===================== Touch Icons ===================== -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png">

	<!-- ===================== CSS ===================== -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>  
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap/bootstrap-responsive.min.css">    

	<!-- Site specific - CSS --> 
	<link rel="stylesheet" href="css/theme_light/prettify.css">    
	<link rel="stylesheet" href="css/theme_light/tables/dataTables.css">         
	<link rel='stylesheet' href='css/theme_light/calendar/fullcalendar.css' />
	<link rel='stylesheet' href='css/theme_light/calendar/fullcalendar.print.css' media='print' /> 
	<link rel="stylesheet" href="css/theme_light/formselements/chosen.css">
	<link rel="stylesheet" href="css/theme_light/formselements/dropkick.css">
	<link rel="stylesheet" href="css/theme_light/jquery-ui-1.8.20.custom.css">        

	<!-- Common - CSS -->     
	<link rel="stylesheet" href="css/theme_light/common.css">  
	<link rel="stylesheet" href="css/theme_light.css" class="style_set">

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		</head>
		<body class="main_nav_hover">
			<div id="loader_cont"><img src="img/loaders/page_loader.gif"></div>  
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="sweet-gray sweet-go-back-from-screen">&nbsp;</span>
						</a>
						<div class="nav-collapse">
							<ul class="main_nav nav pull-right">
								<li id="search" class="search">
									<a href="#">Search</a>
									<div class="search_cont">
										<form class="navbar-search form-search">                          
											<input type="text" class="input-medium search-query" placeholder="Search">
											<button type="submit">Search</button>
										</form>
									</div>
								</li>
								<li id="settings" class="styled dropdown settings">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings</a>
									<ul class="dropdown-menu top_menu">
										<li class="show_all">Settings</li>
										<li><a class="mn_site" href="#"><span>Account</span></a></li>
										<li><a class="mn_admin" href="#"><span>Dashboard</span></a></li>
									</ul>
								</li>
								<li id="profile" class="styled dropdown profile">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile</a>
									<ul class="dropdown-menu top_menu">                        
										<li class="profile group">
											<img src='http://placehold.it/50x50&text=JK'>
											<ul>
												<li><strong><?= get_name(); ?></strong></li>
												<li><?= userinfo('username'); ?></li>
												<li><span><?= account_type(); ?></span></li>
											</ul>
										</li>
										<li><a class="mn_settings" href="#"><span>My Settings</span></a></li>
										<li><a class="mn_profile" href="#"><span>My Profile</span></a></li>
										<li><a class="mn_logout" href="#"><span>Logout</span></a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
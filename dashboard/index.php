<?php
require_once("../system/init.php");
if(!is_user_loggedin()) 
	header("Location: ../");
?>

	<? include("inc/header.php"); ?>  
				<div class="sub_nav">
					<ul class="nav nav-pills">
						<li class="first"><div class="sub_top"><h2>Total Visits</h2><a href="#" id="live-stats-visits">--</a></div></li>
						<li><div class="sub_top"><h2>Sites Owned</h2><a href="#" id="live-stats-site_num">--</a></div></li>
						<li><div class="sub_top"><h2>Avg. Page View</h2><a href="#" id="live-stats-pageviews">--</a></div></li>
						<li><div class="sub_top"><h2>Unique Visits</h2><a href="#" id="live-stats-unique">--</a></div></li>
						<li><div class="sub_top"><h2>Revenue</h2><a href="#" id="live-stats-revenue">--</a></div></li>
						<li><div class="sub_top"><h2>Rank</h2><a href="#" id="live-stats-affiliate">--</a></div></li>
						<li><div class="sub_top"><h2>Themes</h2><a href="#" id="live-stats-themes">--</a></div></li>
						<li><div class="sub_top"><h2>Monthly</h2><a href="#" id="live-stats-monthly_price">--</a></div></li>
						<li><div class="sub_top"><h2>Rewards</h2><a href="#" id="live-stats-reward_coin">--</a></div></li>
						<li class="last"><div class="sub_top"><h2>Cool</h2><a href="#" id="live-stats-cool">--</a></div></li>
					</ul>
				</div>
				<div class="main_content row-fluid no_space">

					<div class="span3">

						<div class="side_nav sidebar-nav" data-spy="affix" data-offset-top="150">
							<div class="sidebar_widget first_widget group">
								<form class="sidebar_search form-search">
									<input type="text" class="input-medium search-query" placeholder="Quick search">
									<button type="submit" class="btn btn-inverse"><i class="icon-search icon-gray"></i></button>
								</form>
							</div>
							<h3 class="main_menu group">
								<span class="title">Main Menu</span>
								<a id="nav_list_btn" class="btn-collapse btn btn-inverse">
									<span class="sweet-gray sweet-go-back-from-screen">&nbsp;</span>              
								</a>
							</h3>
							<ul class="nav nav-list">
								<li class="active"><a class="home" href="#">Home</a></li>
								<li class="sub">
									<a class="pages" href="#">Sites<span id="list-site_num">--</span></a>
									<ul id="site_list">
									</ul>
								</li>
							</ul>
							<div class="sidebar_widget group">
								<h3>
									Content Overview
									<a id="toggle_widget_info" class="btn-side-collapse btn btn-inverse" >
										<span class="sweet-gray sweet-go-back-from-screen">&nbsp;</span>              
									</a>
								</h3>
								<ul class="widget_info">
									<li><a href="#"><i class="sweet-mail sweet-gray"></i><span id="realtime-user_sites"></span>Sites</a></li>
									<li><a href="#"><i class="sweet-list-images sweet-gray"></i><span id="realtime-user_entry"></span>Entries</a></li>
								</ul>
							</div>

						</div><!--/.well -->
					</div><!--/span-->
					<div class="span9">
						<div class="row-fluid">
							<div class="span12">
								<div class="span6">
									<div class="widget">
										<header>
											<h3>Quick Post</h3>
											<ul class="toggle_content">                           
												<li class="arrow"><a href="#">Toggle Content</a></li>
											</ul>
										</header>
										<section class="">
										</section>
									</div>
								</div>
								<div class="span3">
									<div class="widget">
										<header>
											<h3>Quick Post</h3>
											<ul class="toggle_content">                           
												<li class="arrow"><a href="#">Toggle Content</a></li>
											</ul>
										</header>
										<section class="">
										</section>
									</div>
								</div>
								<div class="span3">
									<div class="widget">
										<header>
											<h3>Quick Post</h3>
											<ul class="toggle_content">                           
												<li class="arrow"><a href="#">Toggle Content</a></li>
											</ul>
										</header>
										<section class="">
										</section>
									</div>
								</div>
							</div>
						</div><!--/row-->
					</div><!--/span-->
				</div><!--/row-->
		<? include('inc/footer.php'); ?>


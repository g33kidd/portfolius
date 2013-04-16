<?php
require_once("../system/init.php");
if(!is_user_loggedin()) 
	header("Location: ../");
?>

	<? include("inc/header.php"); ?>

			<div class="container">      
				<div class="sub_nav">
					<ul class="nav nav-pills">
						<li class="first"><div class="sub_top"><h2>Total Visits</h2><a href="#" id="live-stats-visits">--</a></div></li>
						<li><div class="sub_top"><h2>Sites Owned</h2><a href="#" id="live-stats-site_num">--</a></div></li>
						<li><div class="sub_top"><h2>Pageviews</h2><a href="#" id="live-stats-pageviews">--</a></div></li>
						<li><div class="sub_top"><h2>Unique Visitors</h2><a href="#" id="live-stats-unique">--</a></div></li>
						<li><div class="sub_top"><h2>Revenue</h2><a href="#" id="live-stats-revenue">--</a></div></li>
						<li><div class="sub_top"><h2>Affiliate Points</h2><a href="#" id="live-stats-affiliate">--</a></div></li>
						<li><div class="sub_top"><h2>Themes Bought</h2><a href="#" id="live-stats-themes">--</a></div></li>
						<li><div class="sub_top"><h2>Monthly Price</h2><a href="#" id="live-stats-monthly_price">--</a></div></li>
						<li><div class="sub_top"><h2>Reward Coins</h2><a href="#" id="live-stats-reward_coin">--</a></div></li>
						<li class="last"><div class="sub_top"><h2>Cool</h2><a href="#" id="live-stats-cool">--</a></div></li>
					</ul>
				</div>
				<div class="main_content row-fluid">

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

								<div class="widget">
									<h3>
										Test Content
										<a id="toggle_widget_info" class="btn-side-collapse btn btn-inverse" >
											<span class="sweet-gray sweet-go-back-from-screen">&nbsp;</span>              
										</a>
									</h3>
									<section class="welly">
										<h4>Text TEST</h4>
					                          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>
					                          
					                          <h4>Overflowing text to show optional scrollbar</h4>
					                          <p>We set a fixed <code>max-height</code> on the <code>.modal-body</code>. Watch it overflow with all this extra lorem ipsum text we have included.</p>
					                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
					                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
					                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
					                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									</section>
								</div>

							</div>
						</div><!--/row-->


					</div><!--/span-->
				</div><!--/row-->
				<hr>

				<footer>
					<p>&copy; CodeJo.org - 2013</p>
				</footer>

			</div><!--/.fluid-container-->

			<!-- ===================== JS ===================== -->
			<script src="js/libs/jquery-1.7.2.min.js"></script>    
			<script src="js/libs/bootstrap.min.js"></script>   
			<script src="js/libs/ios-orientationchange-fix.js"></script>          
			<script src="js/libs/jquery-ui-1.8.20.custom.min.js"></script>
			<script src="js/plugins/widgets/jquery.sparkline.min.js"></script>
			<script src="js/common.js"></script>  

			<!-- Site specific --> 
			<script src="js/libs/prettify.js"></script>
		<!--[if lt IE 9]>
					<script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
					<![endif]-->
			<script src="js/plugins/tables/jquery.dataTables.min.js"></script>
			<script src="js/plugins/calendar/fullcalendar.min.js"></script>
			<script src="js/plugins/formselements/chosen.jquery.min.js"></script>
			<script src="js/plugins/formselements/scrollability.min.js"></script>
			<script src="js/plugins/formselements/jquery.dropkick-1.0.0.js"></script>

			<script src="js/script.js"></script>
			<script src="js/specific/sparks.js"></script>
			<script src="js/application.js"></script>


	</body>
</html>
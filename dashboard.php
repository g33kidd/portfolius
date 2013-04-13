<?php 

include_once("system/init.php"); 
if(!is_user_loggedin())
	header("Location:index.php");
	
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8" />
		<title>CodeJo &mdash; create a site the easy way.</title>
		 <!-- Loading Bootstrap -->
	    <link href="assets/css/bootstrap.css" rel="stylesheet">

	    <!-- Loading Flat UI -->
	    <link href="assets/css/flat-ui.css" rel="stylesheet">
	    <link rel="shortcut icon" href="assets/images/flat/">

	    <!-- Loading Custom -->
	    <link rel="stylesheet" href="assets/css/dashboard.css">

	</head>
	
	<body>
		
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="#" data-dash-page="dashboard">Dashboard</a></li>
							<li><a href="#" data-dash-page="sites">Sites</a></li>
							<li><a href="#" data-dash-page="store">Store</a></li>
						</ul>
						<ul class="nav pull-right">
							<li><a href="#">Hello <? echo get_name(); ?>!</a>
								<ul>
									<li><a href="#" data-dash-page="settings">Settings</a></li>
									<li><a href="#" id="logout">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="topbar-space"></div>

		<div class="container page-container" id="main">
			<!-- Start of Main Page -->
			<div class="section active" id="dashboard">
				
				<div class="row">

					<div class="span3">
						<h3>Basic Info</h3>
						<table class="table table-hover table-striped account-info">
							<tr><td>Account Type</td><td><? echo account_type(); ?></td></tr>
							<tr><td>Storage</td><td>15 GB</td></tr>
							<tr><td>Sites</td><td><? echo user_site_count(); ?> / <? echo max_sites(); ?></td></tr>
							<tr><td>Monthly Price</td><td><? echo month_price(); ?></td></tr>
						</table>
						<hr>

					</div>

					<div class="span8">
					</div>

				</div>

			</div>
			<!-- End of Main Page -->
			<!-- Start of Site Page -->
			<div class="section" id="sites">

				<div class="row">
					<div class="span3">

						<h3>My Sites <small><? echo user_site_count(); echo "/"; echo max_sites(); ?></small></h3>
						<table class="table table-hover table-striped sites-list" id="sites-list">
							<tbody id="sites-list-body">
							<?php
								$sites = get_sites();
								if(is_array($sites)){
									foreach($sites as $site=>$val):?>
										<tr><td><a href="#" data-site-id="<? echo $val['id']; ?>"><? echo $val['title']; ?></a></td></tr>
									<?endforeach;
								}else{
									$site_title = $sites['title'];
									$site_id = $sites['id'];
									?> <tr><td><a href="#" data-site-id="<? echo $site_id; ?>"><? echo $site_title; ?></a></td></tr><?
								}
							?>
							</tbody>
							<tr><td><a href="#" data-action="add_site">Create New</a></td></tr>
						</table>
						<hr>
						
					</div>

					<div class="span8 pull-right">
						<div id="site_pane"></div>
					</div>
				</div>
			</div>
			<!-- End of Site Page -->
			<!-- Start of Store Page -->
			<div class="section" id="store">
				<div class="hero-unit">
					<h1>Store Coming Soon!</h1>
					<p>The store is a place where you can find themes, addons, and more for your sites... You can edit the ones you own too!</p>
				</div>
			</div>
			<!-- End of Store Page -->
			<!-- Start of Settings Page -->
			<div class="section" id="settings">

				<div class="row" id="account">
					
					<h3>Account Settings</h3>
					<div class="span4">
						<input type="text" id="username" name="username" data-action="update" placeholder="<? if(strlen(userinfo('username')) == 0){echo "Username";}else{echo userinfo('username');} ?>">
					</div>

				</div>

				<div class="row" id="premium">

					<h3>Premium Account Types</h3>
					<div class="span3">
						<h4>Free Plan</h4>
						<p>Free</p>
						<button name="plan-upgrade" data-plan-id="">Downgrade</button>
						<h4>Basic Plan</h4>
						<p>$2.99 /month</p>
						<button name="plan-upgrade" data-plan-id="" disabled="true">Choose</button>
						<h4>Basic Pro Plan</h4>
						<p>$4.99 /month</p>
						<button name="plan-upgrade" data-plan-id="">Upgrade</button>
						<h4>Pro Plan</h4>
						<p>$14.99 /month</p>
						<button name="plan-upgrade" data-plan-id="">Upgrade</button>
					</div>

				</div>

			</div>
			<!-- End of Settings Page -->
		</div>
		
		<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="assets/js/flat/jquery.dropkick-1.0.0.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.0.7/jquery.placeholder.min.js"></script>
		<script src="assets/js/flat/jquery.tagsinput.js"></script>
		<script src="assets/js/dashboard.js.php"></script>
		<script src="assets/js/site.js"></script>
		
	</body>
	
</html>
<? include_once('../system/init.php'); ?>

<ul class="nav nav-tabs" id="top-tabs">
	<li><a href="#home">Home</a></li>
	<li><a href="#insights">Insights</a></li>
	<li><a href="#account">Account</a></li>
	<li class="pull-right"><a href="#upgrade">Upgrade</a></li>
</ul>

<div class="tab-content">

	<div class="row" id="home">
		<div class="span4">

			<h3>Basic Account Info</h3>
			<table class="table table-striped account-info">
				<tr><td>Account Type</td><td><? echo account_type(); ?></td></tr>
				<tr><td>Storage</td><td>500 GB</td></tr>
				<tr><td>Sites</td><td><? echo user_site_count(); ?></td></tr>
				<tr><td>Monthly Price</td><td>$2.99</td></tr>
			</table>
			<hr>

		</div>

		<div class="span8">
		</div>
	</div>

	<div class="row" id="insight">
		<div class="span4">

			<h3>Quick Insights</h3>
			<table class="table table-striped account-info">
				<tr><td>Total Traffic</td><td><strong>300</strong> /day</td></tr>
				<tr><td>Storage</td><td>2 TB</td></tr>
				<tr><td>Sites</td><td><? echo user_site_count(); ?></td></tr>
				<tr><td>Monthly Price</td><td>$2.99</td></tr>
			</table>
			<hr>

		</div>

		<div class="span8">
		</div>
	</div>

</div>

<script src="assets/js/flat/jquery-ui-1.10.0.custom.min.js"></script>
<script src="assets/js/flat/jquery.dropkick-1.0.0.js"></script>
<script src="assets/js/flat/custom_checkbox_and_radio.js"></script>
<script src="assets/js/flat/custom_radio.js"></script>
<script src="assets/js/flat/jquery.tagsinput.js"></script>
<script src="assets/js/flat/bootstrap-tooltip.js"></script>
<script src="assets/js/flat/jquery.placeholder.js"></script>
<script src="http://vjs.zencdn.net/c/video.js"></script>
<script src="assets/js/flat/application.js"></script>
<script src="assets/js/app.js"></script>
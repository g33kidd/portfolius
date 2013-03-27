<<<<<<< HEAD
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>{$title} &mdash; {$subtitle}</title>
		<link rel="stylesheet" href="{$theme_dir}/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	</head>
	<body>
		<div id="globalContainer">
			<header id="contentHeader">
				<div class="row2column c header _no-padding _no-margin">
					<div class="first column content">
						<h1>{$title}</h1>
						<span class="sub">{$subtitle}</span>
					</div>
					<div class="last column content"></div>
				</div>
			</header>
			<div id="contentContainer">
				<div class="row1column _no-padding">
					<div class="first column facebook-feed">
						<div class="header fb-banner">
							Facebook
						</div>
						<div class="statistic fb-block">
							<div class="facebook-number">
								<span class="type">TWEETS</span><span class="data">106</span>
							</div>
							<div class="facebook-number">
								<span class="type">TWEETS</span><span class="data">106</span>
							</div>
							<div class="facebook-number">
								<span class="type">TWEETS</span><span class="data">106</span>
							</div>
						</div>
						<div class="facebook-update fb-block">
							"My name is Ben!"
						</div>
					</div>
				</div>
				<div class="row1column _no-padding _dynamic">
					<div class="first column twitter-feed">
						<div class="header tw-banner">
							Twitter <span class="username">@Geekahz</span>
						</div>
						<div class="statistic tw-block">
							<div class="twitter-number">
								<span class="type">TWEETS</span>
								<span class="data">106</span>
							</div>
							<div class="twitter-number">
								<span class="type">TWEETS</span>
								<span class="data">106</span>
							</div>
							<div class="twitter-number">
								<span class="type">TWEETS</span><span class="data">106</span>
							</div>
						</div>
						<div class="twitter-update tw-block">
							"My name is Ben!"
						</div>
					</div>
				</div>
				<div class="row1column _no-padding">
					<div class="first column information-block">
						<div class="header information-banner">
							About Me
						</div>
						<div class="content info-block">
							<h1>Test Content</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="{$theme_dir}/javascript/framework.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("div.facebook-feed").click(function() {
					$("div.fb-block").toggle(1000);
				});
				$("div.twitter-feed").click(function() {
					$("div.tw-block").toggle(1000);
				});
				$("div.information-block").click(function() {
					$("div.info-block").toggle(1000);
				});
			});
		</script>
	</body>
</html>
=======
<div class="container">
	
	<h1>{$title}</h1>
	<h2>{$subtitle}</h2>
	<hr>
	<h2>Contact Information:</h2>
	<h3><strong>Email Address</strong>: {$email}</h3>
	<h3><strong>Phone Number</strong>: {$phone}</h3>
	<span>test</span>
	
</div>
>>>>>>> master

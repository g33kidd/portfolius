<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>{$title} &mdash; {$subtitle}</title>
	<link rel="stylesheet" href="{$theme_dir}/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
</head>
<body>
	
	<div class="container">
		<div class="sitetitle left">{$title}</div>
		<div class="subtitle left">{$subtitle}</div>
		<div class="clear"></div>
	</div>

	{init_twitter:g33k_kidd}
		<strong>{twitter_followers}</strong>
		<strong>{twitter_tweets}</strong>
		{loop_tweets:5}
			<strong>{twitter_username}</strong>
			<strong>{tweet}</strong>
		{end_loop}
	{end_twitter}

	{init_fb:kiddj2015}
		<strong>{fb_friends}</strong>
	{end_facebook}
	
</body>
</html>
<?php

$custom_settings = array(
	'twitter_block' => array(
		'position' => 1,
		'type' => 'tab',
		'contents' => array(
			'enabled' => 'checkbox',
			'username' => 'text',
			'num_tweets' => 'text'
		)
	),
	'facebook_block' => array(
		'position' => 2,
		'type' => 'tab',
		'contents' => array(
			'enabled' => 'checkbox',
			'username' => 'text',
			'num_status' => 'text'
		)
	),
	'basic_contact_info' => 'checkbox'
);

$custom_info = array(
	'twitter_user' => 'data-twitter_user',
	'facebook_user' => 'data-facebook_user'
);

?>
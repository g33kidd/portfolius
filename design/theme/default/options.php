<?php

$options = array(
	'twitter_username' => array(
		'type' => 'text',
		'label' => 'Twitter Username'
	),
	'facebook_username' => array(
		'type' => 'text',
		'label' => 'Facebook Username'
	),
	'dribbble_username' => array(
		'type' => 'text',
		'label' => 'Dribbble Username'
	),
	'bio_text_stuff_field' => array(
		'type' => 'textarea',
		'label' => 'Biography'
	),
	'gender' => array(
		'type' => 'select',
		'label' => 'gender',
		'options' => array(
			1 => "Male",
			2 => "Female",
			3 => "Other"
		)
	)
);

?>
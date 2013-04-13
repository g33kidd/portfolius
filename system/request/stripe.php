<?php

include_once("../thirdparty/Stripe/Stripe.php");

$stripe = array(
	'secret_key' => 'OnWCSw9F8SJ7j8au3O6B7bpeRwW9A7Bq',
	'publishable_key' => 'pk_tAfWWU8PrCeCgPW7iGfuCVKGMixUR'
);

Stripe::setApiKey($stripe['secret_key']);

// retrieve the request's body and parse it as JSON
$body = @file_get_contents('php://input');
$event = json_decode($body);

?>
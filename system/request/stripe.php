<?php

include_once("../thirdparty/Stripe/Stripe.php");

Stripe::setApiKey("OnWCSw9F8SJ7j8au3O6B7bpeRwW9A7Bq");

// retrieve the request's body and parse it as JSON
$body = @file_get_contents('php://input');
$event = json_decode($body);

?>
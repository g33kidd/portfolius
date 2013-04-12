<?php
include_once('system/init.php');

require_once("system/thirdparty/Twig/Autoloader.php");
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem("design/theme/");
$twig = new Twig_Environment($loader, array( 'cache' => 'design/cache/', 'debug' => 'true' ));

$template = $twig->loadTemplate('kiddLayout/index.html');

$main = array(
	'title' => 'Joshua Kidd',
	'subtitle' => 'testing some more twig stuff.'
);

$custom = array(
	'contact' => array(
		'phone' => array('(620) 271-2795'),
		'email' => array('kiddj2015@gmail.com', 'kidd.josh.343@gmail.com', 'josh@joshuak.me', 'joshua@codejo.org'),
		'website' => array('http://joshuak.me','http://universalbloggers.com','http://codejo.org')
	)
);

$arrays = array_merge($main, $custom);

echo $template->render($arrays);

?>
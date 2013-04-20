<?php
include_once('system/init.php');
require_once("system/thirdparty/Twig/Autoloader.php");

if(!isset($_GET['id']))
	header('Location:error.php');

$site_id = $_GET['id'];
$site_data = $site->get_data($site_id);
$site_options = json_decode($site_data['options'], true);

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem("design/theme/");
$twig = new Twig_Environment($loader, array( 'cache' => 'design/cache/', 'debug' => 'true' ));

$template = $twig->loadTemplate("{$site_data['theme_id']}/{$site_data['theme_version']}/index.html");

$main = $site_options['main'];
$custom = $site_options['custom'];

$site = array_merge($main, $custom);

echo "<base href='design/theme/{$site_data['theme_id']}/{$site_data['theme_version']}/'>";
echo $template->render($site);

?>
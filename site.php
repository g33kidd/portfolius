<?php
include_once('system/init.php');
require_once("system/thirdparty/Twig/Autoloader.php");

if(!isset($_GET['id']))
	header('Location:error.php');

$site_id = $_GET['id'];
$site_data = $site->get_data($site_id);
$site_options = json_decode($site_data['options'], true);

$theme = $site_data['theme'];

$themes = explode(":", $theme, 2);
$theme = $themes[0];
$theme_v = $themes[1];

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem("design/theme/");
$twig = new Twig_Environment($loader, array( 'cache' => 'design/cache/', 'debug' => 'true' ));

$template = $twig->loadTemplate("{$theme}/{$theme_v}/index.html");

$main = $site_options['main'];
$custom = $site_options['custom'];

$site = array_merge($main, $custom);

echo "<base href='design/theme/{$theme}/{$theme_v}/'>";
echo $template->render($site);

?>
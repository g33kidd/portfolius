<?php
include_once ("system/init.php");
$sites = $user -> site_count($_SESSION['id']);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <title>Portfolius Dashboard &mdash; create cool personal portfolio sites easy.</title>
  <link rel="stylesheet" href="assets/css/base.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/dashboard.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
 </head>
 <body>
  <div id="globalContainer">
   <div id="c-PUBLIC-navbar" class="hasRel">
    <nav class="nav-inner">
     <div class="container">
      <ul>
       <li class="logo"><img src="assets/images/icons/partial.svg" width="25px" height="25px"></li>
       <li class="portfolius">Portfolius</li>
      </ul>
     </div>
    </nav>
   </div>
   <div id="contentContainer"><b>I am some text</b></div>
  </div>
  <script src="//code.jquery.com/jquery-latest.js"></script>
  <script src="assets/js/dashboard.php"></script>
  <script src="assets/js/site.js"></script>
 </body>
</html>
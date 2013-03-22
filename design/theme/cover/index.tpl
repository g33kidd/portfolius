<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8" />
 <title>{$title} &mdash; {$subtitle}</title>
 <link rel="stylesheet" href="{$theme_dir}/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
</head>
<body>
 <div class="container cover">
  <img src="{$theme_dir}/images/t.jpg" style="width: 100%; height: 100%; display: block;"> <!-- :note: testing only -->
  <div class="container">
   <div class="profile_image"><img src="{$theme_dir}/images/t.jpg"></div>
   <div class="title">{$title}<span class="subtitle">{$subtitle}</span></div>
  </div>
 </div>
 <div class="container content">
  <section class="row3column">
   <div class="first column hasStyle">
   	<!-- Content for Twitter -->
   	<div class="twitter">
   	 <div class="header"></div>
   	</div>
   </div>
   <div class="column hasStyle">
   	<!-- Content for Facebook -->
   	<div class="facebook">
   	 <div class="header"></div>
   	</div>
   </div>
   <div class="last column hasStyle">
    <!-- Content for User Data -->
    <div class="information">
     <div class="header"></div>
    </div>
   </div>
  </section>
  <!-- :todo: add user panel -->
 </div>
</body>
</html>
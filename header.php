<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php smart_title(); ?></title>
<!--  meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<!--  favicon -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

<!--  stylesheets -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/960.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/text.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!--  google fonts api stylesheets -->
<link href='http://fonts.googleapis.com/css?family=Artifika&v1' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Nunito&v2' rel='stylesheet' type='text/css'>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<!--  javascripts -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.4.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.superfish.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.hoverIntent.minified.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.supersubs.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<?php wp_head(); ?>
</head>
<body>

<div class="container_16 wrap">
  <div class="main">
    <div class="grid_16 topbar">
      <!--  <ul class="horizontal-list">
        <li><a class="br" href="#" title="alterar indioma do site para português"><span></span>Portugês</a></li>
        <li><a class="en" href="#" title="change language to english"><span></span>Inglês</a></li>
      </ul>
      -->
    </div>
    <div class="grid_16 title-bar">
      <h1 class="branding">
       <a href="<?php bloginfo('url'); ?>" title="webpoint"><span>Webpoint</span></a>
      </h1>
      <quote>Weblosofia com desenvolvimento web</quote>
    </div>
    <div class="grid_16 menu-bar">
       <ul class="menu horizontal-list">
         <?php wp_list_categories( 'title_li=&hide_empty=1' ); ?>
       </ul>
    </div>
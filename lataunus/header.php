<?php
/**
* The header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package lataunus
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php  
  if( get_option('favicon') != "" ): ?>             
  <link rel="shortcut icon" href="<?php echo get_option('favicon'); ?>" />
  <?php else: ?>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/wp-favicon.ico" />
  <?php   endif; ?>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
  <!--styles for the navbar customization-->
  <style type="text/css">
    <?php if (get_option('navbar-color')){ ?>
    ul.sub-menu{background-color: <?php echo get_option('navbar-color');?> ; }
    <?php } else {?>
    ul.sub-menu{background-color: #754012; }
    <?php } ?>
  </style>
</head>
<body <?php body_class(); ?>>
  <!--- start content-background-section -->
  <?php 
  if (get_option('contentbackground-radio')=="color"){ ?>
  <div class="container" style="background-color: <?php echo get_option('contentbackground');?> ">
  <?php }
  if (get_option('contentbackground-radio')=="gradient"){?>
  <div  class="container" style="<?php echo get_option('contentbackgroundgradient');?> ">
  <?php }
  if (get_option('contentbackground-radio')!="color"&&get_option('contentbackground-radio')!="gradient"){?>
  <div  class="container" style="background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIxNSUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxOSUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSI2MCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC40OSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjAiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
  background: -moz-linear-gradient(top,  rgba(255,255,255,1) 15%, rgba(255,255,255,1) 19%, rgba(255,255,255,0.49) 60%, rgba(255,255,255,0) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(15%,rgba(255,255,255,1)), color-stop(19%,rgba(255,255,255,1)), color-stop(60%,rgba(255,255,255,0.49)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 15%,rgba(255,255,255,1) 19%,rgba(255,255,255,0.49) 60%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgba(255,255,255,1) 15%,rgba(255,255,255,1) 19%,rgba(255,255,255,0.49) 60%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgba(255,255,255,1) 15%,rgba(255,255,255,1) 19%,rgba(255,255,255,0.49) 60%,rgba(255,255,255,0) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgba(255,255,255,1) 15%,rgba(255,255,255,1) 19%,rgba(255,255,255,0.49) 60%,rgba(255,255,255,0) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=0 ); /* IE6-8 */
  ">
  <?php } ?>
<div id="page" class="hfeed site container" >
    <!--- end content-background-section -->
    <header id="masthead" class="site-header" role="banner">
      
      <?php   
      if( get_option( 'logoupload') != "" ){
      ?>
      <?php if (get_option('logoupload_alt')!="") {
      ?>
      <a href="<?php bloginfo('url');?>">
      <img id="logo" alt="<?php echo get_option('logoupload_alt') ?>" src="<?php echo get_option('logoupload'); ?>" class="img-responsive col-center"></a>
      <?php }else{ ?>
      <a href="<?php bloginfo('url');?>">
      <img id="logo" alt="<?php echo get_bloginfo( 'name' ); ?>" src="<?php echo get_option('logoupload'); ?>" class="img-responsive col-center"></a>
      <?php  }
      }  ?>
      <!-- begin navbar -->
      <?php 
      if (get_option('navbar-color')){?>
      <nav class="navbar navbar-default" style="background-color:<?php echo get_option('navbar-color');?> ;">
      <?}else {?>
      <nav class="navbar navbar-default" style=" background-color: #754012">
        <? } ?>
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <?php 
          if (get_option('navbar-color')){?>
          <div class="navbar-header" style="background-color:<?php echo get_option('navbar-color');?> ;">
          <?}else {?>
          <div class="navbar-header">
            <?}?>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php if ( has_nav_menu( 'primary' ) ) {
          wp_nav_menu( 

          array(
          'theme_location' => 'primary',
          'menu_id' => 'primary-menu',
          'menu_class' => 'nav navbar-nav', 
          'container' => 'false', 
          'depth' => '0',
          'walker' => new wp_bootstrap_navwalker ) ); 
          } ?>
          <?php 
          if (get_option('searchfield')== "1") {
          ?>  
          <ul class="nav navbar-nav navbar-right">
            <li><?php get_search_form(); ?></li>
          </ul>
          <?php
          }
          ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!-- end navbar -->
      <!--- start google analytics integration-->
      <?php   
      if( get_option( 'analyticslink') != "" ):{ ?>
      <?php echo get_option('analyticslink');?>
      <?php  } endif; ?>
      <!--- start google analytics integration-->
    </header>
    <div id="content" class="site-content">

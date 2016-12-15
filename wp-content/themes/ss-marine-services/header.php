<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package  S&S_Marine_Services
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Bootstrap core css -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
<!--  FontAwesome icons  -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Trirong:500|Rajdhani:500,700|PT+Sans+Narrow|Passion+One|Play" rel="stylesheet">

<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ss-marine-services' ); ?></a>

<nav class="navbar navbar-default">
	<div id="phone-numbers">
		<div id="phone1"><i class="fa fa-phone"></i><a href="tel:+1-555-555-1212">555-555-1212</a></div>
		<div id="phone2"><i class="fa fa-phone"></i><a href="tel:+1-555-555-1212">555-555-1212</a></div>
	</div>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost:8888"><img src="http://localhost:8888/wp-content/uploads/2016/12/logo.png" alt="Company Logo" id="logo" width="110" height=""/></a>
    </div>
     <?php
    	wp_nav_menu( array(
          'menu'              => 'primary',
          'theme_location'    => 'primary',
          'container_class'   => 'collapse navbar-collapse navbar-right',
					'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker()
          )
      );
    ?>
  </div><!-- /.container-fluid -->
</nav>

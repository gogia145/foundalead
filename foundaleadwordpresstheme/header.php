<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage foundalead
 * @since 1.0
 * @version 1.0
 */
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Foundalead</title>

<!-- Css Declaration -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom-style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Header Start Here -->
<?php wp_head(); ?>

</head>

<body>


<header class="navbar navbar-static-top">
    <div class="container">
		<div class="lead-naviagtion-container">
			<div class="navbar-header">		
				<div id="nav-toggle" class="toogle-menu">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<a href="<?php bloginfo("siteurl"); ?>" class="navbar-brand">
					<img src="<?php bloginfo("template_directory"); ?>/images/logo.png" alt="logo"/>
				</a> 
			</div>
			<div class="navigation-outer">
				<div class="main-navbar" id="mobile-menu">
				
				<?php  wp_nav_menu(array('theme_location'=>'primery','menu'=>'top_menu',  'container' => 'ul','menu_class' => 'nav navbar-nav navbar-right lead-navigation' )); ?>
					
				</div>
			</div>
		</div>
    </div>
</header>

<div class="sub-header">
	<div class="container">
	
	<?php  wp_nav_menu(array('theme_location'=>'primery','menu'=>'main_menu',  'container' => 'ul','menu_class' => 'sub-header-nav' )); ?>
	
	</div>
</div>

<!-- Header End Here -->

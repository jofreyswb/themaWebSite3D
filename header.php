 <?php
/**
 * File header.php
 *
 * header of the site
 *
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>
<?php global $mytheme; ?>
<!DOCTYPE HTML>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">



	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <!--[if lt IE 9]>

<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>

<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">


    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel='stylesheet' id='main-style'  href='<?php echo get_stylesheet_uri(); ?>' type='text/css' media='all' />


    <!--Scripts CSS -->
    <link rel="shortcut icon" href="<?php echo get_option('ws_favicon');  ?>">

<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
<!--<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/reset.css" type="text/css" />  -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" type="text/css" />
<!-- them colorschema -->
<!-- Изменяем CSS-файл, в зависимости от выбранного цвета  -->
<link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_directory'); ?>/<?php echo get_option('ws_color_scheme'); ?>.css" />

<!--/*Выводим текст в подвале, можно использовать HTML-тэги */-->
<p><?php echo stripslashes(get_option('ws_footer_text')); ?></p>
<!-- them colorschema -->




<!--<link rel="stylesheet" media="screen" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/responsive-leyouts.css" type="text/css" />  -->
<!--<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/js/mainmenu/sticky.css" rel="stylesheet">  -->
<!-- Menu -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/menu.css">
<!-- Menu -->
<!--<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/plitka.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/js/mainmenu/menu.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/js/form/sky-forms.css" type="text/css" media="all">
-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<?/*<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" rel="stylesheet" type="text/css">*/?>
<script  src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/menu.js"></script>
<script  src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/parallax.js"></script>


    <!--Scripts CSS -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="wrapper">
    <!-- LOGO-->
        <?php if ( get_header_image() ) : ?>
    	<div id="site-header">
    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    			<img src="<?php echo get_option('ws_logo'); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
    		</a>
    	</div>
    	<?php endif; ?>
    <!-- LOGO-->
<!-- main menu -->
<nav class="main-nav">
    <div class="current " id="current">&equiv;</div>
   <? wp_nav_menu(array('menu' => 'top', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu')); ?>
   <!--  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
-->
</nav>
<!-- end main menu -->
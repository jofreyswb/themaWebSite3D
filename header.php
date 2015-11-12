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


    <title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel='stylesheet' id='main-style'  href='<?php echo get_stylesheet_uri(); ?>' type='text/css' media='all' />


    <!--Scripts CSS -->
    <link rel="shortcut icon" href="<?php echo get_option('ws_favicon');  ?>">

<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" type="text/css" />
<!-- them colorschema -->
<!-- Изменяем CSS-файл, в зависимости от выбранного цвета  -->
<link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_directory'); ?>/<?php echo get_option('ws_color_scheme'); ?>.css" />

<!--/*Выводим текст в подвале, можно использовать HTML-тэги */-->
<p><?php echo stripslashes(get_option('ws_footer_text')); ?></p>
<!-- them colorschema -->




  <!-- Menu -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/menu.css">
    <!-- Menu -->

   <!--Site style -->
      <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/header.css">
      <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/footer.css">
      <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/mainOleksandr.css">
      <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/content.css">
   <!--Site style -->


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<?/*<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" rel="stylesheet" type="text/css">*/?>
<script  src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/menu.js"></script>



    <!--Scripts CSS -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >



<div class="wrapper">
<div class="preheader" >
    <div class="inPreheader">
    <div class="phoneNumber">
          <ul>
            <li><p>(067) 270-34-92</p></li>
            <li><p>(096) 439-80-00</p></li>
            <li><p>(0382) 62-58-10</p></li>
          </ul>
    </div>
      <div class="menuDontUp">
            <? wp_nav_menu(array('menu' => 'Big', 'menu_class' => 'big-menu', 'menu_id' => 'big-menu')); ?>
      </div>
      </div>
</div>
    <header>
    <div class="inheader">

    <!-- LOGO-->
        <?php if ( get_header_image() ) : ?> <?php endif; ?>
    	<div id="site-header">
    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    			<img src="<?php /*echo get_option('ws_header_img');*/bloginfo( 'stylesheet_directory' ); ?>/img/logo_vet_top.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

    		</a>
    	</div>

    <!-- LOGO-->
<!-- main menu -->

<nav class="main-nav">
    <div class="current " id="current">&equiv;</div>
   <? wp_nav_menu(array('menu' => 'General', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu')); ?>
   <!--  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
-->
</nav>
<!-- end main menu -->
</div>
</header>

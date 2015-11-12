<?php
function enqueue_styles() {
    wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
    wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
    wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/*remove_filter( 'the_content', 'wpautop' );     */
remove_filter( 'the_excerpt', 'wpautop' );
/* Подключенние добавления миниатюры для записи  */
add_theme_support('post-thumbnails');
add_theme_support( 'post-thumbnails' );
/* Подключенние добавления миниатюры для записи  */

/*include('functions/settings.php');  */
include('functions/setings-two.php');    /* Подключение сайдбара */
include('functions/widgets.php');
include('functions/shortcodes.php');


?>
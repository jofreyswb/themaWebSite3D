<?php
/**
 * File functoins.php
 *
 *
 *
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>
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

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/* Подключение сайдбара */
function theme_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Область верхнего сайдбара','WebSite3D'),
        'id' => 'top-sidebar',
        'description'   => __( 'Добавьте ваш виджет в сайдбар', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Область нижнего сайдбара','WebSite3D'),
        'id' => 'bottom-sidebar',
        'description'   => __( 'Добавьте ваш виджет в сайдбар', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

        register_sidebar( array(
        'name' => __( 'Область левого сайдбара','WebSite3D'),
        'id' => 'left-sidebar',
        'description'   => __( 'Добавьте ваш виджет в сайдбар', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

        register_sidebar( array(
        'name' => __( 'Область правого сайдбара','WebSite3D'),
        'id' => 'right-sidebar',
        'description'   => __( 'Добавьте ваш виджет в сайдбар', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );
/* Подключение сайдбара */
/*include('functions/settings.php');  */
include('functions/setings-two.php');
include('functions/shortcodes.php');
?>
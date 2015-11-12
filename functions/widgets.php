<?php
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
       /* Footer sidebar */
        register_sidebar( array(
        'name' => __( 'Сайдбар первый в футере','WebSite3D'),
        'id' => 'first-footer-sidebar',
        'description'   => __( 'Добавьте ваш виджет в сайдбар', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

            register_sidebar( array(
        'name' => __( 'Сайдбар второй в футере','WebSite3D'),
        'id' => 'second-footer-sidebar',
        'description'   => __( 'Добавьте ваш виджет в сайдбар', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

            register_sidebar( array(
        'name' => __( 'Сайдбар третий в футере','WebSite3D'),
        'id' => 'thirdth-footer-sidebar',
        'description'   => __( 'Добавьте ваш виджет в сайдбар', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

            register_sidebar( array(
        'name' => __( 'Сайдбар четвертый в футере','WebSite3D'),
        'id' => 'forth-footer-sidebar',
        'description'   => __( 'Добавьте ваш виджет в сайдбар', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
   /* Footer sidebar */

}
add_action( 'widgets_init', 'theme_widgets_init' );
/* Подключение сайдбара */


?>
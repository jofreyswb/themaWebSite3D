 <?php
/**
 * File sidebar.php
 *
 *
 *
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>
<aside>
    <nav class="aside-navigation">
        <? wp_nav_menu(array('menu' => 'top', 'menu_class' => 'aside-menu')); ?>
    </nav>
    <?php if ( is_active_sidebar( 'my-sidebar' ) ) :

   dynamic_sidebar( 'my-sidebar' );

 endif; ?>
</aside>

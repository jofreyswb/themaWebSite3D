 <?php
/**
 * File archive.php
 *
 *
 *
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>
<!-- page  -->
<?php get_header(); ?>
<nav class="main-navigation">
    <? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
</nav>

<div class="main-heading">
    <h1 class="site-title"><?php the_title(); ?></h1>
</div>
<?php get_sidebar(); ?>
<section>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>    <!-- end main-heading -->
<?php get_footer(); ?>
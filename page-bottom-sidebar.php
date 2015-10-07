 <?php
/**
 * File page.php
 *
 *
 * Template Name: Нижний сайдбар
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>

<?php get_header(); ?>

<div class="main-heading">
    <h1 class="site-title"><?php the_title(); ?></h1>
</div>

<section>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>    <!-- end main-heading -->
<div class="botomSidebar">
    <?php if ( is_active_sidebar( 'bottom-sidebar' ) ) :

   dynamic_sidebar( 'bottom-sidebar' );

 endif; ?>
</div>
<?php get_footer(); ?>
 <?php
/**
 * File home.php
 *
 *
 *
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>

<?php get_header(); ?>



<section>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>
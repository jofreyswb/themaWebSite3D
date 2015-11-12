 <?php
/**
 * File single.php
 *
 *  posts page
 *
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>
<?php get_header();?>
<div class="main-heading">
    <h1><?php the_title(); ?></h1>
</div>
<!--<?php get_sidebar();?>  -->
<section>
    <div class="inSection">
    <?php while (have_posts()): the_post();?>
        <?php the_content();?>

    <?php endwhile; ?>
    </div>
</section>
<?php get_footer(); ?>
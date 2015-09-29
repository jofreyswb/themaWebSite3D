 <?php
/**
 * File single.php
 *
 *  posts page
 *
 * @package Site for HUG
 * @since Site for HUG  1.0
 */
?>
<?php get_header();?>
<div class="main-heading">
    <h1><?php the_title(); ?></h1>
</div>
<?php get_sidebar();?>
<section>
    <?php while (have_posts()): the_post();?>
        <?php the_content();?>

    <?php endwhile; ?>
</section>
<?php get_footer(); ?>
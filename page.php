 <?php
/**
 * File page.php
 *
 *
 *
 * @package Site for HUG
 * @since Site for HUG  1.0
 */
?>

<?php get_header(); ?>

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
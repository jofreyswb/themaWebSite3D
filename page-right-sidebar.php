<?php
/**
 * File page.php
 *
 *
 * Template Name: Правый сайдбар
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>

<?php get_header(); ?>

<!--<div class="main-heading">
    <h1 class="site-title"><?php the_title(); ?></h1>
</div>-->

<section>
<div class="inRigthSideBar">
 <div class="rightSidebar">
    <?php if ( is_active_sidebar( 'right-sidebar' ) ) :
       dynamic_sidebar( 'right-sidebar' );
    endif; ?>
</div>
<!--<?php get_sidebar(); ?> -->
<div class="inSectionRightSidebar">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>
</div>
</section>    <!-- end main-heading -->
<?php get_footer(); ?>
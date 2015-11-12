 <?php
/**
 * File page.php
 *
 *
 *Template Name:Верхний сайдбар
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>

<?php get_header(); ?>
      <div class="topSidebar">
                    <?php if ( is_active_sidebar( 'top-sidebar' ) ) :
                     dynamic_sidebar( 'top-sidebar' );
                   endif; ?>
      </div>
<!--<div class="main-heading">
    <h1 class="site-title"><?php the_title(); ?></h1>
</div>
-->
<section>

<div class="inSection">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div>
</section>    <!-- end main-heading -->
<?php get_footer(); ?>
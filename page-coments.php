 <?php
/**
 * File page.php
 *
 *
 * Template Name: coments
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>

<?php get_header(); ?>


 <!-- Content -->

<!--<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>-->
<!--<?php get_sidebar();?>  -->
<section>
    <div class="inSection">

        <div class="postContent">
        	<?php while (have_posts()): the_post();?>

<!--            <?php if( has_post_thumbnail() ) :?>
                <div class="image-section-post">
                <?php the_post_thumbnail('medium', array('class' => 'miniature')); ?>
                </div>
             <?php endif; ?>
-->
            <div class="inContent">
        		<?php the_content();
                   
                ?>
            </div>  <!-- end inContent -->
            <div class="inPost">
                <?php
        			if ( comments_open() || get_comments_number() ) {
        				comments_template('',true);
        			}
        		?>
            </div><!-- end inPost -->
        	<?php endwhile; ?>
        </div> <!-- end postContent-->
        </div>
</section>
<!-- content -->





<?php get_footer(); ?>
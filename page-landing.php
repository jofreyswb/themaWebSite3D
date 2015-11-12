  <?php
/**
 * File page-landing.php
 *
 * header of the site
 * Template Name: LandingPage
 * @package landingPlus700
 * @since landingPlus700  1.0
 */
?>
<?php get_header(); ?>


 <!-- Content -->

 <div class="inCont">
<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
   <!--
	тут формируется вывод постов с их функциями, например, the_title()	-->
  <!--   <h1> <? the_title(); ?></h1>         -->
    <div class="ContetPOst" ><?php
    global $more;
$more = 1;
the_content(); ?></div>
<?php endwhile; ?>
<?php endif; ?>





<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'sort_order' => 'asc' ) );

	foreach( $mypages as $page ) {
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
	?>  <div class=" ContetPOst ">
		<h2 id="<? echo $page->ID ?>" class=" titleOfPosts" ><?php echo $page->post_title; ?></h2>
		<div class="inContetPOst"> <?php echo $content; ?> </div><!-- end  inContetPOst-->
        </div> <!-- end  ContetPOst-->
	<?php
	}
?>
<!-- content -->

</div> <!-- end inCont -->



<?php get_footer(); ?>
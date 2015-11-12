 <?php
/**
 * File footer.php
 *
 * footer of the site
 *
 * @package thema WebSite3D
 * @since thema WebSite3D    1.0
 */
?>
</div>
   <!-- end wraper -->
   <div class="clearfix"></div>
    <footer>
       <div class="inFooter">
         <div class="firstFoterWidget">
                <?php if ( is_active_sidebar( 'first-footer-sidebar' ) ) :
                   dynamic_sidebar( 'first-footer-sidebar' );
                 endif; ?>
         </div><!--end firstFoterWidget-->

         <div class="secondFoterWidget">
                <?php if ( is_active_sidebar( 'second-footer-sidebar' ) ) :
                   dynamic_sidebar( 'second-footer-sidebar' );
                 endif; ?>
         </div><!--end secondFoterWidget-->

         <div class="thirdthFoterWidget">
                <?php if ( is_active_sidebar( 'thirdth-footer-sidebar' ) ) :
                   dynamic_sidebar( 'thirdth-footer-sidebar' );
                 endif; ?>
         </div><!--end thirdthFoterWidget-->

         <div class="forthFoterWidget">
                <?php if ( is_active_sidebar( 'forth-footer-sidebar' ) ) :
                   dynamic_sidebar( 'forth-footer-sidebar' );
                 endif; ?>
         </div><!--end forthFoterWidget-->
         <div class="imgToFooter">
         	<p><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/shema1.png" alt="" width="900" class="imgN"></p>
         </div>
       <div class="creatingBy">
      Copyright &copy; All Rights Reserved. Create by <a href="website3d.ru">WebSite3D</a>
       </div>
       </div>
    </footer>    <!-- end footer -->
    <?php wp_footer(); ?>
</body>
</html>
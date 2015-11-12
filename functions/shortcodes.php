<?php

 function min_paralax($attr,$content= null){
    extract(shortcode_atts(array(
     "img1" => '',
     "img2" => '',
     "img3" => ''
     ), $attr));
return
'
<style type="text/css">
.min_paralax{
 height: 100%;
 width: 100%;

 

 //background:  url('.$img1.') no-repeat fixed center center   ;

 }
 .contentbox{
	 padding: 50px 0 50px 0;
 }

.pbg1{background:  url('.$img1.')center 0 repeat-y; margin: 0 auto; position: relative; height: 100%; }
.pbg2{background:  url('.$img2.')center 0 repeat-y; margin: 0 auto; position: relative; height: 100%; }
.pbg3{background:  url('.$img3.')center 0 repeat-y; margin: 0 auto; position: relative; height: 100%; }
</style>

<div class="min_paralax" id="min_paralax">
<section class="pbg1" data-type="background" data-speed="1.5">
<section class="pbg2" data-type="background" data-speed="0.5">
<section class="pbg3" data-type="background" data-speed="0.1">
<div class="contentbox">
 '.$content.'  </div></section></section></section></div>';
}
add_shortcode('paralax', 'min_paralax');

/*кнопки текстового редактора*/
function enable_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 $buttons[] = 'anchor';
 return $buttons;
}
add_filter("mce_buttons_3", "enable_more_buttons");

/*my button for Paralax
=========================*/


/**/
function register_button($buttons) {
   array_push($buttons, "paralax");
   return $buttons;
}
function add_plugin($plugin_array) {
   $plugin_array['paralax'] = get_bloginfo('template_url').'/functions/js/mybuttons.js';
   return $plugin_array;
}

function add_button() {
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
   {
     add_filter('mce_external_plugins', 'add_plugin');
     add_filter('mce_buttons', 'register_button');
   }
}
add_action('init', 'add_button');

/*add to TEXT
=========================*/
 if( !function_exists('_add_my_quicktags') ){
function _add_my_quicktags()
{ ?>
<script type="text/javascript">

QTags.addButton( 'Paralax', 'Paralax', '[paralax img1="" img2="" img3=""]', '[/paralax]' );


</script>
 <script  src="<?php get_bloginfo('template_url'); ?>/functions/js/parallax.js"></script>
 <!--<script  src="<?php bloginfo( 'stylesheet_directory' ); ?>/functions/js/parallax.js"></script>-->
<?php }
add_action('admin_print_footer_scripts', '_add_my_quicktags');
}
/*add to TEXT
=========================*/

/*my button for Paralax
=========================*/
function wptuts_scripts_basic()
{
    // Register the script like this for a plugin:
   // wp_register_script( 'custom-script', plugins_url( '/js/custom-script.js', __FILE__ ) );
    // or
    // Register the script like this for a theme:
    wp_register_script( 'parallax', get_template_directory_uri() . '/functions/js/parallax.js' );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'parallax' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );


?>
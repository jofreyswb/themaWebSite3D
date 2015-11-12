<?php /*
Plugin Name: SuperParallax
Plugin URI: http://website3d.ru
Description: Adding an easy-configurable multi-layered parallax.
Version: 1.0
Author: website3d
Author URI: http://website3d.ru
License: GPL2
*/
?>
<?php
/*  Copyright 2015 WebSite3D  (email : website3d.ru@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php

 function minparalax($attr,$content= null){
    extract(shortcode_atts(array(
     "img1" => '',
     "img2" => '',
     "img3" => '',
     "speed1" =>'2',
     "speed2" =>'1',
     "speed3" =>'0.5',

     ), $attr));
return
'
<style type="text/css">
.min_paralax{
 height: 100%;
 width: 100%;
 }
 .contentbox{
	 padding: 50px 0 50px 0;
 }
.pbg1{background:  url('.$img1.')center 0 repeat-y; margin: 0 auto; position: relative; height: 100%; }
.pbg2{background:  url('.$img2.')center 0 repeat-y; margin: 0 auto; position: relative; height: 100%; }
.pbg3{background:  url('.$img3.')center 0 repeat-y; margin: 0 auto; position: relative; height: 100%; }
</style> 
<div class="min_paralax" id="min_paralax">
<section class="pbg1" data-type="background" data-speed=".'$speed1'.">
<section class="pbg2" data-type="background" data-speed=".'$speed2'.">
<section class="pbg3" data-type="background" data-speed=".'$speed3'.">
<div class="contentbox">
 '.$content.'  </div></section></section></section></div>';
}
add_shortcode('paralax', 'minparalax');



/*my button for Paralax
=========================*/

function registerbutton($buttons) {
   array_push($buttons, "paralax");
   return $buttons;
}
function addplugin($plugin_array) {
 /*  $plugin_array['paralax'] = get_bloginfo('template_url').'/js/mybuttons.js';    */
   $plugin_array['paralax'] =  plugins_url ('/js/mybuttons.js', __FILE__ );

   return $plugin_array;
}
function addbutton() {
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
   {
     add_filter('mce_external_plugins', 'addplugin');
     add_filter('mce_buttons', 'registerbutton');
   }
}
add_action('init', 'addbutton');

/*add to TEXT
=========================*/
 if( !function_exists('_add_my_quicktags') ){
function _add_my_quicktags()
{ ?>
<script type="text/javascript">
QTags.addButton( 'Paralax', 'Paralax', '[paralax img1="" img2="" img3="" speed1="" speed="2" speed="3"]', '[/paralax]' );
</script>
<?php }
add_action('admin_print_footer_scripts', '_add_my_quicktags');
}

function wptuts_scripts_with_jquery()
{
    // Register the script like this for a plugin:
    wp_register_script( 'parallax', plugins_url( '/js/parallax.js', __FILE__ ), array( 'jquery' ) );
    // or
    // Register the script like this for a theme:

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'parallax' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_with_jquery' );
?>
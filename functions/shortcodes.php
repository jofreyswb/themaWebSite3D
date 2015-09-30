<?php
 function min_paralax($attr,$content= null){
    extract(shortcode_atts(array(
     "img" => ''
     ), $attr));
return'
<style type="text/css">
.min_paralax{
  background: #E2D9DF  url('.$img.') fixed center center no-repeat ;
  height: 100%;
  width: 100%;

}
</style>
<div class="min_paralax">'.$content.'</div>';
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
/*my button for Paralax
=========================*/
?>
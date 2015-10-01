<?php
$thisTemplate = get_bloginfo('template_url');
 function min_paralax($attr,$content= null){
    extract(shortcode_atts(array(
     "img1" => '',
     "img2" => '',
     "img3" => ''
     ), $attr));
return'
<style type="text/css">
.min_paralax{
 height: 100%;
  width: 100%;

 background:  url('.$img1.') no-repeat fixed center center   ;

 }

.pbg1{background:  url('.$img1.');position: relative;   height: 100%;  width: 100%; }
.pbg2{background:  url('.$img2.') repeat-y  center center scroll; height: 100%;  width: 100%; }
.pbg3{background:  url('.$img3.');position: absolute;  height: 100%;  width: 100%; }
</style>

<div class="min_paralax" id="min_paralax">
<div class="pbg2 ">
 '.$content.'  </div></div>';
}
add_shortcode('paralax', 'min_paralax');
/*<div class="min_paralax ">''.content.''<div class="pbg1  " style="font-size: 40px; color: #CC0000" >pbg1 <div class="pbg2" style="font-size: 40px; color: #5ECC10">pbg2 <div class="pbg3"style="font-size: 40px; color: #6133CC">pbg3  </div></div></div></div>';*/
                                    /*<div class="pbg1  "  >pbg1 </div><div class="pbg2" >pbg2 </div><div class="pbg3">pbg3</div>*/

   /* // z-index: 4;
//position: relative;*/
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
<?php }
add_action('admin_print_footer_scripts', '_add_my_quicktags');
}
/*add to TEXT
=========================*/

/*my button for Paralax
=========================*/



?>
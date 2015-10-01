<?php
$thisTemplate = get_bloginfo('template_url');
 function min_paralax($attr,$content= null){
    extract(shortcode_atts(array(
     "img1" => '',
     "img2" => '' ,
     "img3" => ''
     ), $attr));
return'
<style type="text/css">
.min_paralax{
 height: 100%;
  width: 100%;
  z-index: 4;
position: fixed;
top:0;
 }
.pbg1{background:  url('.$img1.');position: absolute;   }
.pbg2{background:  url('.$img2.'); position: absolute;  }
.pbg3{background:  url('.$img3.');position: absolute;  }
</style>
<script type="text/javascript" src= ".'$thisTemplate'./functions/js/mybuttons.js">
</script>
<div class="min_paralax pbg1  pbg2 pbg3">'.$content.'</div>';
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
<?php }
add_action('admin_print_footer_scripts', '_add_my_quicktags');
}
/*add to TEXT
=========================*/

/*my button for Paralax
=========================*/



?>
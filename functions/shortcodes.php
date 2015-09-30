<?php
 function min_paralax($attr,$content= null){
    extract(shortcode_atts(array(
     "img" => ''
     ), $attr));
return'
<style type="text/css">
.min_paralax{
  background: #E2D9DF  url($img ) fixed center center no-repeat ;
  height: 100%;
  width: 100%;

}
</style>
<div class="min_paralax">'.$content.'</div>';
}
add_shortcode('paralax', 'min_paralax');


?>
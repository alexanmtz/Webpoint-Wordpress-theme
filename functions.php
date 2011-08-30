<?php

add_theme_support('post-thumbnails');

function smart_title() {
if(is_single())
  {
   the_title();
   return " | ";
   bloginfo("name");
  }
  else
  {
   bloginfo("name");
   wp_title();
  }
}

if(function_exists('register_sidebar')) {

   register_sidebar(array(
    'id'          => 'sidebar',
    'name'        => __( 'barra lateral'),
    'description' => __( 'widgets para a barra lateral'),
    'before_widget' => '<li class="box widget">',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );

}
?>
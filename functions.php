<?php

add_action('wp_list_categories','wp_list_categories_hook_relative_path');
add_filter('the_category','wp_list_categories_hook_relative_path');
function wp_list_categories_hook_relative_path( $output ) {
  return str_replace( get_bloginfo('wpurl').'/en/','/', $output );
}

if(!function_exists('icl_get_languages')) {
  function icl_get_languages($str) {
    $languages = array(array(
      'active' => 1,
      'language_code' => 'pt-br',
      'url' => 'http://brazilian_trans',
      'native_name' => 'Português'
    ));
    return $languages;
  }  
}

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

function categories_is_child($cat) {
   if(!$cat->category_parent) {
   	return true;
   }
}

function category_has_parent($cat) {
  if($cat->category_parent) {
    return true;
   }
}

function get_categories_with_posts() {
	$categories = get_categories();
	$categories_filtered = array_filter($categories, "categories_is_child");
	return $categories_filtered;
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

if(function_exists('register_sidebar')) {

   register_sidebar(array(
    'id'          => 'topbar',
    'name'        => __( 'barra do topo'),
    'description' => __( 'widgets from the top area'),
    'before_widget' => '<li class="box widget toparea">',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );

}

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}
?>
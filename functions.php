<?php
function mytheme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'title-tag' );
    add_theme_support('custom-logo');
    register_nav_menus(["Header"=>"Header Menu"]);
}
add_action( 'after_setup_theme', 'mytheme_setup' );
function enable_svg_upload($mimes){
    $mimes['svg']='img/svg+xml';
    return $mimes;
}
add_filter('upload_mimes','enable_svg_upload');
?>
 

 

 

 
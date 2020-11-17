<?php
function shopno_files(){
    wp_enqueue_style("main", get_stylesheet_uri(),null,microtime());
    wp_enqueue_style("custom-google-font", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_script("main-js", get_theme_file_uri('/js/scripts-bundled.js'), null, microtime(), true) ;
}
add_action('wp_enqueue_scripts', 'shopno_files');

function university_features(){
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation1', 'Footer Menu Location 1');
    register_nav_menu('footerMenuLocation2', 'Footer Menu Location 2');
}
add_action('after_setup_theme','university_features');
?>
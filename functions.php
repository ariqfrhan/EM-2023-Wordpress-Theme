<?php 
add_theme_support('menus');
add_theme_support('post-thumbnails');

function em_style(){
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', array(),false);
    wp_enqueue_style('style',get_theme_file_uri('/assets/style-hp.css'), array(), false);
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('logo',get_theme_file_uri("/assets/Logo EM.png"));
}

add_action('wp_enqueue_scripts', 'em_style');
?>
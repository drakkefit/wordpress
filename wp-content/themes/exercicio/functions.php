<?php

function ab_theme_styles(){

    wp_enqueue_style('ab-news-skin', get_template_directory_uri().'/assets/dist/css/main.css');

    wp_enqueue_script('ab-main-js', get_template_directory_uri().'/assets/dist/js/bundle.min.js', array('jquery'), '', true );

}


add_action('wp_enqueue_scripts', 'ab_theme_styles');
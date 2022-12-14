<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

function twenty_seventeen_child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'twenty_seventeen_child_theme_enqueue_styles' );

function twenty_seventeen_child_theme_pre_get_posts( $query ) {
    if ( is_archive( ) && is_main_query() )
        $query->set( 'posts_per_page', 4 );
}
add_action( 'pre_get_posts', 'twenty_seventeen_child_theme_pre_get_posts' );


?>

<?php
// Use HTML5
add_theme_support(
  'html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'script',
    'style',
  )
);

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

// Enable support for Post Thumbnails on posts and pages.
add_theme_support( 'post-thumbnails' );

// Title
add_theme_support( 'title-tag' );

// CSS/JavaScript
add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script( 'smart-script', get_template_directory_uri() . '/main.js', array( 'jquery' ) );
});

<?php

// Theme configuration
function scratch_setup(){
  // Document title
  add_theme_support( 'title-tag' );

  // Post thumbnails
  add_theme_support( 'post-thumbnails' );

  // Navigations
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu', 'scratch' ),
    )
  );

  // Custom Image sizes
  add_image_size('thumb-510', 510, 205, true);

}
add_action( 'after_setup_theme', 'scratch_setup' );

// Styles & scripts
function scratch_scripts() {
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.min.css' );

  //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'scratch_scripts' );
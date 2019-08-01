<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

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

  wp_enqueue_script( 'main-style', get_template_directory_uri() . 'jquery' );

  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'scratch_scripts' );

  // Sidebars
  function scratch_widgets_init() {
    register_sidebar(
        array (
            'name' => __( 'Footer', 'scratch' ),
            'id' => 'sidebar-footer',
            'description' => __( 'Custom Sidebar', 'scratch' ),
            'before_widget' => '<section class="widget col-md-6 col-lg-4 d-flex flex-column align-items-center">',
            'after_widget' => "</section>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
  }
  add_action( 'widgets_init', 'scratch_widgets_init' );
<?php
/**
** activation theme
** 
**/
add_action( 'wp_enqueue_scripts', 'montheme_enqueue_styles' );

// Styles et Scripts

function montheme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Sidebars
function montheme_widgets_init() {
    register_sidebar(array(
        'name' => 'Ma sidebar',
        'id' => 'ma-sidebar'
    ));  
}
add_action('widgets_init', 'montheme_widgets_init');

// Excerpt more
function montheme_excerpt_more( $more ) {
   // if ( ! is_single() ) {
        $more = sprintf( '...<br><a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'montheme' )
        );
  //  }
    return $more;
}
add_filter( 'excerpt_more', 'montheme_excerpt_more' );

// Excerpt length
function montheme_excerpt_length($length){
    return 20;
}
add_filter( 'excerpt_length', 'montheme_excerpt_length', 999 );


// Filter Sejour by Prochain depart 
add_action( 'pre_get_posts', function ($query){

    if( is_admin() ) return;
    if( !$query->is_main_query() )return;
    
    if ( is_post_type_archive('sejour') || is_tax('pays') ) {
        $query->set( 'meta_key', 'prochain_depart' );
        $query->set( 'meta_query', array(
            array(
                'key'     => 'prochain_depart',
                'compare' => '>',
                'value'   => date('Ymd'),
            )
        ) );
    }

    return;

} );
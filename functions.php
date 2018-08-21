<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

function theme_enqueue_styles() {

    // Get the theme data
    $the_theme = wp_get_theme();
//    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );

    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );

    wp_enqueue_script( 'isotope-script',  'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'masonry-loaded', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


//Remove widgets of the parent theme
add_action( 'widgets_init', 'remove_widgets', 11 );
function remove_widgets(){

    unregister_sidebar( 'right-sidebar' );
    unregister_sidebar( 'left-sidebar' );
    unregister_sidebar( 'hero' );
    unregister_sidebar( 'statichero' );
    unregister_sidebar( 'footerfull' );
}

require_once('inc/setup.php');
require_once('inc/custom-comments.php');
require_once ('inc/customizer.php');
require_once ('inc/comments-function.php');
require_once ('inc/custom-pagination.php');
require_once ('inc/support-svg.php');
require_once ('inc/custom-post-type.php');
require_once ('inc/pagination.php');

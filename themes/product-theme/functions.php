<?php
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [],
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}, 999); 

add_filter( 'wc_get_template', function( $located, $template_name ) {
    if ( strpos( $template_name, 'cart.php' ) !== false ) {
        error_log( 'WooCommerce cart template loaded: ' . $located );
    }
    return $located;
}, 10, 2 );
<?php

function watchpspn_enqueue_styles() {
    $style_path = get_stylesheet_directory() . '/style.css';

    wp_enqueue_style(
        'watchpspn-style',
        get_stylesheet_uri(),
        array(),
        filemtime( $style_path )
    );
}

add_action( 'wp_enqueue_scripts', 'watchpspn_enqueue_styles' );
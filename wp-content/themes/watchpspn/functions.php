<?php

function watchpspn_enqueue_styles() {
    wp_enqueue_style(
        'watchpspn-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'watchpspn_enqueue_styles');
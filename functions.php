<?php
    add_action('wp_enqueue_scripts', 'timmotors_scripts');

    function timmotors_scripts() {
        wp_enqueue_style('timmotors-style', get_stylesheet_uri());
    };

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
?>
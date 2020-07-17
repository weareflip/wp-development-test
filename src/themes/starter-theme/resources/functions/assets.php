<?php

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'flip-wptoolkit-style', get_stylesheet_uri(), [], FLIP_WP_TOOLKIT_VER );
	wp_enqueue_style( 'flip-wptoolkit-site-styles', get_template_directory_uri() . '/dist/app.css', [], FLIP_WP_TOOLKIT_VER );
	wp_enqueue_script('flip-wptoolkit-scripts', get_template_directory_uri() . '/dist/functions.js', [], FLIP_WP_TOOLKIT_VER);
} );
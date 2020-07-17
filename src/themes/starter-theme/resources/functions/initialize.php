<?php
/**
 * Use this file for initialization of the theme.
 */
add_action( 'after_setup_theme', function () {
	load_theme_textdomain( 'wptoolkit', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );

	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );

	add_theme_support( 'custom-logo', [
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	] );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'build/editor.css' );
} );

add_action( 'after_setup_theme', function () {
	$GLOBALS['content_width'] = apply_filters( 'wptoolkit_content_width', 640 );
}, 0 );

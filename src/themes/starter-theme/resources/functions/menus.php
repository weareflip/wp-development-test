<?php
require get_template_directory() . '/resources/functions/navigation/primary-menu.php';

add_action( 'after_setup_theme', function () {
	register_nav_menus(
		[ 'main-menu' => esc_html__( 'Primary', 'wptoolkit' ) ]
	);
} );
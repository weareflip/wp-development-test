<?php
/**
 * Use this file to register custom image sizes used by the theme.
 */
add_action('after_setup_theme', function () {
    add_image_size('hero-feature-image', 1920, 1080);
});
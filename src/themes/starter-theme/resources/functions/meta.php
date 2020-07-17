<?php
/**
 * Use this file to register any custom meta for posts that you wish.
 */

add_action('init', function () {
    register_post_meta('page', '_hero_title', [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
        'auth_callback' => function () {
            return current_user_can('edit_posts');
        }
    ]);
    register_post_meta('page', '_hero_subtitle', [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
        'auth_callback' => function () {
            return current_user_can('edit_posts');
        }
    ]);
});

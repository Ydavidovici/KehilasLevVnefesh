<?php
// Enqueue theme styles and scripts
function synagogue_theme_enqueue_scripts() {
    wp_enqueue_style('synagogue-main-style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('synagogue-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'synagogue_theme_enqueue_scripts');

// Register navigation menus if needed
function synagogue_register_menus() {
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'synagogue_theme'),
    ) );
}
add_action('after_setup_theme', 'synagogue_register_menus');

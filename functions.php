<?php
add_theme_support( 'custom-logo', array(
    'height'      => 80,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
) );

add_theme_support('menus');

function kinola_enqueue_scripts() {
    wp_enqueue_script(
        'kinola-js',
        get_template_directory_uri() . '/assets/scripts/kinola-template.js',
        array(),
        filemtime(get_template_directory() . '/assets/scripts/kinola-template.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'kinola_enqueue_scripts');

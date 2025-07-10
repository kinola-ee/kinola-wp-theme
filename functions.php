<?php
function register_my_menus() {
    register_nav_menu('main-menu', 'Main Menu');
}
add_action('after_setup_theme', 'register_my_menus');

add_theme_support( 'custom-logo', array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
) );

// Add class to <li> and flag active items
add_filter('nav_menu_css_class', function ($classes, $item, $args, $depth) {
    if ($args->theme_location === 'main-menu') {
        $classes[] = 'kinola-mainmenu-item';

        // Add active class to <li> if it's current, parent, or ancestor
        if (in_array('current-menu-item', $classes) ||
            in_array('current-menu-parent', $classes) ||
            in_array('current-menu-ancestor', $classes)) {
            $classes[] = 'kinola-mainmenu-item-active';
        }
    }
    return $classes;
}, 10, 4);

// Add class to <a> (but no more active logic here)
add_filter('nav_menu_link_attributes', function ($atts, $item, $args, $depth) {
    if ($args->theme_location === 'main-menu') {
        $classes = 'kinola-mainmenu-link';

        // Just apply base class, not active here
        $atts['class'] = isset($atts['class']) ? $atts['class'] . ' ' . $classes : $classes;
    }

    return $atts;
}, 10, 4);


<?php

// Ajout du menu
function my_theme_setup() {
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Menu principal', 'text_domain'),
        'footer' => __('footer', 'text_domain'),

    ));
}
add_action('after_setup_theme', 'my_theme_setup');

// Ajout du logo
function mytheme_setup() {
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 100,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'mytheme_setup');



function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __('Menu Principal'),
        )
    );
}
add_action('init', 'register_my_menus');
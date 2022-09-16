<?php
// fonctions pour le theme LeCafeDuHandicap

// Ajout de différents options dans admin et menu
function montheme_setup() 
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    register_nav_menu('main', 'menu_principal');
    register_nav_menu('footer', 'menu_footer');
}
// Ajout de librairies, css et js
function montheme_scripts()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', [], false, true);
}

function montheme_custom_types()
{

}
// Création de taxonomie
function montheme_custom_taxonomies()
{

}

function montheme_menu_cls($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}
function montheme_menu_link_atts($attributes)
{
    $attributes['class'] = 'nav-link';
    return $attributes;
}

// Hook et filter pour activer les fonctions
add_action('after_setup_theme', 'montheme_setup');
add_action('init', 'montheme_custom_types');
add_action('init', 'montheme_custom_taxonomies');
add_action('wp_enqueue_scripts', 'montheme_scripts');
add_filter('wp_title', 'montheme_wp_title', 10, 2);
add_filter('nav_menu_css_class', 'montheme_menu_cls');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_atts');




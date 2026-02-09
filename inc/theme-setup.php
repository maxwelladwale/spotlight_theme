<?php
/**
 * Theme setup: register support, menus, sidebars, image sizes.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;

add_action('after_setup_theme', function () {
    // Make the theme translation-ready.
    load_theme_textdomain('spotlight', SPOTLIGHT_DIR . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable featured images on posts and pages.
    add_theme_support('post-thumbnails');

    // Switch default core markup to HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Custom logo support.
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    // Add support for block styles.
    add_theme_support('wp-block-styles');

    // Add support for wide and full-width alignment.
    add_theme_support('align-wide');

    // Register navigation menus.
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'spotlight'),
        'footer'  => esc_html__('Footer Menu', 'spotlight'),
    ));
});

// Register widget areas.
add_action('widgets_init', function () {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'spotlight'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here to appear in the sidebar.', 'spotlight'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer', 'spotlight'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in the footer.', 'spotlight'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
});

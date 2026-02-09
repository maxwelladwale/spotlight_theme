<?php
/**
 * Enqueue scripts and styles.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;

add_action('wp_enqueue_scripts', function () {
    // Tailwind CSS via CDN (swap for a build step in production).
    wp_enqueue_script(
        'tailwindcss',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false
    );

    // Tailwind config (custom colours, fonts).
    wp_add_inline_script('tailwindcss', "
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            950: '#091C2A',
                            900: '#0D2B3E',
                            800: '#163B50',
                            700: '#1E4D66',
                            600: '#28647F',
                        },
                        accent: {
                            DEFAULT: '#2CA58D',
                            light:   '#3BBFA5',
                            dark:    '#1F8A74',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                        display: ['Playfair Display', 'Georgia', 'serif'],
                    },
                },
            },
        }
    ");

    // Google Fonts (Inter + Playfair Display).
    wp_enqueue_style(
        'spotlight-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,400;1,600&display=swap',
        array(),
        null
    );

    // Theme base stylesheet (minimal resets / WP-specific).
    wp_enqueue_style(
        'spotlight-style',
        SPOTLIGHT_URI . '/assets/css/main.css',
        array(),
        SPOTLIGHT_VERSION
    );

    // Theme info stylesheet (style.css) – needed for WP to recognise the theme.
    wp_enqueue_style(
        'spotlight-theme',
        get_stylesheet_uri(),
        array('spotlight-style'),
        SPOTLIGHT_VERSION
    );

    // Navigation script.
    wp_enqueue_script(
        'spotlight-navigation',
        SPOTLIGHT_URI . '/assets/js/navigation.js',
        array(),
        SPOTLIGHT_VERSION,
        true
    );

    // Threaded comments reply script.
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
});

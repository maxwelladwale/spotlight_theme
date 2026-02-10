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

    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/assets/js/app.js', array('gsap-js', 'gsap-st'), false, true );


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
                        sans: ['Poppins', 'system-ui', '-apple-system', 'sans-serif'],
                        display: ['Poppins', 'system-ui', 'sans-serif'],
                    },
                },
            },
        }
    ");

    // Google Fonts (Poppins).
    wp_enqueue_style(
        'spotlight-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap',
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

<?php
/**
 * Spotlight theme functions and definitions.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;

define('SPOTLIGHT_VERSION', '1.0.0');
define('SPOTLIGHT_DIR', get_template_directory());
define('SPOTLIGHT_URI', get_template_directory_uri());

// Theme setup and support.
require SPOTLIGHT_DIR . '/inc/theme-setup.php';

// Security hardening.
require SPOTLIGHT_DIR . '/inc/security.php';

// Enqueue scripts and styles.
require SPOTLIGHT_DIR . '/inc/enqueue.php';

// Custom template tags and helpers.
require SPOTLIGHT_DIR . '/inc/template-tags.php';

/**
 * Fallback menu when no menu is assigned to a location.
 */
function spotlight_fallback_menu(): void {
    echo '<ul class="flex items-center gap-8 list-none m-0 p-0">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="text-white/80 hover:text-white text-sm font-medium transition-colors">' . esc_html__('Home', 'spotlight') . '</a></li>';
    echo '</ul>';
}

/**
 * Add Tailwind classes to wp_nav_menu link elements.
 */
add_filter('nav_menu_link_attributes', function (array $atts): array {
    $atts['class'] = 'text-white/80 hover:text-white text-sm font-medium transition-colors';
    return $atts;
}, 10, 1);

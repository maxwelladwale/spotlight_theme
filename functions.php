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

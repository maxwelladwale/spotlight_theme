<?php
/**
 * Security hardening for the Spotlight theme.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;

/**
 * -------------------------------------------------------------------------
 * 1. Remove WordPress version from HTML head and RSS feeds.
 *    Prevents version fingerprinting by attackers.
 * -------------------------------------------------------------------------
 */
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

/**
 * -------------------------------------------------------------------------
 * 2. Disable XML-RPC.
 *    XML-RPC is a common vector for brute-force and DDoS amplification
 *    attacks. Disable it unless you specifically need it (e.g., Jetpack).
 * -------------------------------------------------------------------------
 */
add_filter('xmlrpc_enabled', '__return_false');
add_filter('wp_headers', function (array $headers): array {
    unset($headers['X-Pingback']);
    return $headers;
});

/**
 * -------------------------------------------------------------------------
 * 3. Remove unnecessary head links.
 *    Reduces information leakage and attack surface.
 * -------------------------------------------------------------------------
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_resource_hints', 2);

/**
 * -------------------------------------------------------------------------
 * 4. Add security headers via wp_headers filter.
 *    These instruct browsers to enable built-in protections.
 * -------------------------------------------------------------------------
 */
add_filter('wp_headers', function (array $headers): array {
    // Prevent MIME-type sniffing.
    $headers['X-Content-Type-Options'] = 'nosniff';

    // Prevent click-jacking by disallowing framing of the site.
    $headers['X-Frame-Options'] = 'SAMEORIGIN';

    // Enable the browser's XSS filter (legacy but still useful).
    $headers['X-XSS-Protection'] = '1; mode=block';

    // Control referrer information sent with requests.
    $headers['Referrer-Policy'] = 'strict-origin-when-cross-origin';

    // Restrict browser features/APIs the site can use.
    $headers['Permissions-Policy'] = 'geolocation=(), microphone=(), camera=()';

    return $headers;
});

/**
 * -------------------------------------------------------------------------
 * 5. Disable file editing from the WP admin dashboard.
 *    Prevents attackers who gain admin access from injecting PHP via the
 *    built-in theme/plugin editor.
 * -------------------------------------------------------------------------
 */
if (! defined('DISALLOW_FILE_EDIT')) {
    define('DISALLOW_FILE_EDIT', true);
}

/**
 * -------------------------------------------------------------------------
 * 6. Remove the WordPress version from enqueued script/style URLs.
 *    Falls back to the theme version so browser caching still works.
 * -------------------------------------------------------------------------
 */
add_filter('style_loader_src', 'spotlight_remove_wp_version_from_src', 10, 2);
add_filter('script_loader_src', 'spotlight_remove_wp_version_from_src', 10, 2);

function spotlight_remove_wp_version_from_src(string $src, string $handle): string {
    if (strpos($src, 'ver=' . get_bloginfo('version')) !== false) {
        $src = add_query_arg('ver', SPOTLIGHT_VERSION, remove_query_arg('ver', $src));
    }
    return $src;
}

/**
 * -------------------------------------------------------------------------
 * 7. Limit login attempts feedback.
 *    Returns a generic error message so attackers cannot enumerate usernames.
 * -------------------------------------------------------------------------
 */
add_filter('login_errors', function (): string {
    return esc_html__('Invalid login credentials.', 'spotlight');
});

/**
 * -------------------------------------------------------------------------
 * 8. Disable author archives enumeration (?author=1 → redirect).
 *    Prevents username discovery via author archive URL scanning.
 * -------------------------------------------------------------------------
 */
add_action('template_redirect', function () {
    if (is_author() && ! is_admin()) {
        wp_safe_redirect(home_url('/'), 301);
        exit;
    }
});

/**
 * -------------------------------------------------------------------------
 * 9. Disable REST API user endpoint for unauthenticated requests.
 *    The /wp-json/wp/v2/users endpoint exposes usernames publicly.
 * -------------------------------------------------------------------------
 */
add_filter('rest_endpoints', function (array $endpoints): array {
    if (! is_user_logged_in()) {
        unset($endpoints['/wp/v2/users']);
        unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
    }
    return $endpoints;
});

/**
 * -------------------------------------------------------------------------
 * 10. Prefix all theme output helpers with esc_* to prevent XSS.
 *     This is enforced by convention throughout the theme templates.
 *     All dynamic content is escaped at the point of output using:
 *       - esc_html()  for plain text
 *       - esc_attr()  for HTML attributes
 *       - esc_url()   for URLs
 *       - wp_kses()   for limited HTML
 * -------------------------------------------------------------------------
 */

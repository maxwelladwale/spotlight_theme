<?php
/**
 * The header template.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-sans text-gray-800 antialiased'); ?>>
<?php wp_body_open(); ?>

<div id="page" class="min-h-screen flex flex-col">

    <a class="sr-only focus:not-sr-only focus:fixed focus:top-0 focus:left-0 focus:z-[100000] focus:bg-brand-900 focus:text-white focus:px-5 focus:py-3" href="#primary">
        <?php esc_html_e('Skip to content', 'spotlight'); ?>
    </a>

    <!-- ============ HEADER ============ -->
    <header id="masthead" class="bg-brand-900 sticky top-0 z-50" role="banner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">

            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex-shrink-0" rel="home">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="text-white text-xl leading-none">
                        <span class="font-bold tracking-wide">SPOT</span><br>
                        <span class="font-light text-sm tracking-widest">light</span>
                    </span>
                <?php endif; ?>
            </a>

            <!-- Desktop Navigation -->
            <nav id="site-navigation" class="hidden md:flex items-center gap-8" role="navigation"
                 aria-label="<?php esc_attr_e('Primary Menu', 'spotlight'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => 'spotlight_fallback_menu',
                    'items_wrap'     => '<ul class="flex items-center gap-8 list-none m-0 p-0">%3$s</ul>',
                    'link_before'    => '',
                    'link_after'     => '',
                ));
                ?>
            </nav>

            <!-- Auth Buttons -->
            <div class="hidden md:flex items-center gap-4">
                <a href="#" class="text-white/80 hover:text-white text-sm font-medium transition-colors">
                    <?php esc_html_e('Sign in', 'spotlight'); ?>
                </a>
                <a href="#" class="bg-accent hover:bg-accent-dark text-white text-sm font-semibold px-5 py-2 rounded-full transition-colors">
                    <?php esc_html_e('Sign up', 'spotlight'); ?>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-toggle" class="md:hidden text-white p-2" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only"><?php esc_html_e('Menu', 'spotlight'); ?></span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-brand-800 border-t border-white/10">
            <div class="px-4 py-4 space-y-3">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'fallback_cb'    => 'spotlight_fallback_menu',
                    'items_wrap'     => '<ul class="space-y-2 list-none m-0 p-0">%3$s</ul>',
                ));
                ?>
                <div class="pt-3 border-t border-white/10 flex flex-col gap-2">
                    <a href="#" class="text-white/80 text-sm"><?php esc_html_e('Sign in', 'spotlight'); ?></a>
                    <a href="#" class="bg-accent text-white text-sm font-semibold px-5 py-2 rounded-full text-center">
                        <?php esc_html_e('Sign up', 'spotlight'); ?>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="flex-1">

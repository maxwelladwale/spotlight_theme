<?php
/**
 * The single post template.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary" class="site-main" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>

        <?php
        the_post_navigation(array(
            'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'spotlight') . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'spotlight') . '</span> <span class="nav-title">%title</span>',
        ));
        ?>

        <?php
        if (comments_open() || get_comments_number()) {
            comments_template();
        }
        ?>

    <?php endwhile; ?>

</main>

<?php
get_sidebar();
get_footer();

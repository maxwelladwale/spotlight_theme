<?php
/**
 * The search results template.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary" class="site-main" role="main">

    <?php if (have_posts()) : ?>

        <header class="page-header">
            <h1 class="page-title">
                <?php
                printf(
                    /* translators: %s: search query */
                    esc_html__('Search Results for: %s', 'spotlight'),
                    '<span>' . esc_html(get_search_query()) . '</span>'
                );
                ?>
            </h1>
        </header>

        <div class="posts-list">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'search'); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(array(
            'prev_text' => esc_html__('&laquo; Previous', 'spotlight'),
            'next_text' => esc_html__('Next &raquo;', 'spotlight'),
        )); ?>

    <?php else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>

</main>

<?php
get_sidebar();
get_footer();

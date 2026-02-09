<?php
/**
 * The main template file.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary" class="site-main" role="main">

    <?php if (have_posts()) : ?>

        <div class="posts-list">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', get_post_type()); ?>
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

<?php
/**
 * Custom template tags for the Spotlight theme.
 *
 * All output is escaped at the point of rendering.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;

if (! function_exists('spotlight_posted_on')) :
    /**
     * Print the posted-on date.
     */
    function spotlight_posted_on(): void {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
            $time_string .= '<time class="updated screen-reader-text" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        printf(
            '<span class="posted-on">%s %s</span>',
            esc_html_x('Posted on', 'post date', 'spotlight'),
            sprintf(
                '<a href="%s" rel="bookmark">%s</a>',
                esc_url(get_permalink()),
                $time_string
            )
        );
    }
endif;

if (! function_exists('spotlight_posted_by')) :
    /**
     * Print the post author.
     */
    function spotlight_posted_by(): void {
        printf(
            '<span class="byline"> %s <span class="author vcard"><a class="url fn n" href="%s">%s</a></span></span>',
            esc_html_x('by', 'post author', 'spotlight'),
            esc_url(get_author_posts_url(get_the_author_meta('ID'))),
            esc_html(get_the_author())
        );
    }
endif;

if (! function_exists('spotlight_entry_footer')) :
    /**
     * Print categories, tags, and edit link in the entry footer.
     */
    function spotlight_entry_footer(): void {
        if ('post' === get_post_type()) {
            $categories_list = get_the_category_list(esc_html__(', ', 'spotlight'));
            if ($categories_list) {
                printf(
                    '<span class="cat-links">%s %s</span>',
                    esc_html__('Posted in', 'spotlight'),
                    $categories_list // Already escaped by WP core.
                );
            }

            $tags_list = get_the_tag_list('', esc_html__(', ', 'spotlight'));
            if ($tags_list) {
                printf(
                    '<span class="tags-links">%s %s</span>',
                    esc_html__('Tagged', 'spotlight'),
                    $tags_list // Already escaped by WP core.
                );
            }
        }

        edit_post_link(
            sprintf(
                /* translators: %s: post title (screen-reader only) */
                wp_kses(__('Edit <span class="screen-reader-text">%s</span>', 'spotlight'), array('span' => array('class' => array()))),
                wp_kses_post(get_the_title())
            ),
            '<span class="edit-link">',
            '</span>'
        );
    }
endif;

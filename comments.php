<?php
/**
 * The comments template.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;

// Prevent direct access to comments.php with no post.
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $spotlight_comment_count = get_comments_number();
            printf(
                /* translators: 1: comment count, 2: post title */
                esc_html(_nx(
                    '%1$s comment on &ldquo;%2$s&rdquo;',
                    '%1$s comments on &ldquo;%2$s&rdquo;',
                    $spotlight_comment_count,
                    'comments title',
                    'spotlight'
                )),
                number_format_i18n($spotlight_comment_count),
                '<span>' . wp_kses_post(get_the_title()) . '</span>'
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
            ));
            ?>
        </ol>

        <?php
        the_comments_navigation();
        ?>

    <?php endif; ?>

    <?php
    if (! comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'spotlight'); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div>

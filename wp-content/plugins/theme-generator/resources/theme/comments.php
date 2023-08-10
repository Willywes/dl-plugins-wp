<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medusa
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments">
    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) :
        ?>
        <h2 class="h3">
            <?php
            $medusa_comment_count = get_comments_number();
            if ( '1' === $medusa_comment_count ) {
                printf(
                    /* translators: 1: title. */
                    esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'medusa' ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            } else {
                printf( // WPCS: XSS OK.
                    /* translators: 1: comment count number, 2: title. */
                    esc_html(
                        _nx(
                            '%1$s thought on &ldquo;%2$s&rdquo;',
                            '%1$s thoughts on &ldquo;%2$s&rdquo;',
                            $medusa_comment_count,
                            'comments title',
                            'medusa'
                        )
                    ),
                    number_format_i18n( $medusa_comment_count ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            }
            ?>
        </h2>

        <?php the_comments_navigation(); ?>

        <ol>
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                )
            );
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

        <?php
    endif; // Check for have_comments().

    comment_form();
    ?>
</div>

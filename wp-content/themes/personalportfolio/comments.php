<?php
/**
 * The template for displaying comments
 *
 * This template displays the area of the page that contains both the current comments
 * and the comment form.
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( 1 === $comments_number ) {
                printf( _x( 'One Comment', 'comments title', 'textdomain' ) );
            } else {
                printf(
                    _nx(
                        '%1$s Comment',
                        '%1$s Comments',
                        $comments_number,
                        'comments title',
                        'textdomain'
                    ),
                    number_format_i18n( $comments_number )
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
            ) );
            ?>
        </ol>

        <?php
        the_comments_navigation();
        ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
    comment_form();
    ?>

</div>

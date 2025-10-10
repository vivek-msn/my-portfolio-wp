<?php
/**
 * Modern Comments Template
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area" aria-labelledby="comments-title">

    <?php if ( have_comments() ) : ?>
        <h3 id="comments-title" class="mb-4">
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
        </h3>

        <ol class="list-unstyled comment-list mb-5" itemscope itemtype="https://schema.org/Comment">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 64,
                'callback'    => 'bootstrap_comment_template',
            ) );
            ?>
        </ol>

        <?php the_comments_navigation( array(
            'prev_text' => '<i class="bi bi-chevron-left"></i> Previous',
            'next_text' => 'Next <i class="bi bi-chevron-right"></i>',
            'class'     => 'd-flex justify-content-between mb-4'
        ) ); ?>

    <?php endif; ?>

    <?php
    // Custom comment form styling
    comment_form( array(
        'class_form'   => 'needs-validation bg-white p-4 rounded-4 shadow-sm',
        'title_reply'  => '<h4 class="fw-bold mb-4">Leave a Comment</h4>',
        'class_submit' => 'btn btn-primary mt-3',
        'comment_field' => '<p class="comment-form-comment mb-3"><textarea id="comment" name="comment" class="form-control" rows="5" required placeholder="Your Comment"></textarea></p>',
        'fields' => array(
            'author' => '<p class="comment-form-author mb-3"><input id="author" name="author" type="text" class="form-control" placeholder="Your Name" required></p>',
            'email'  => '<p class="comment-form-email mb-3"><input id="email" name="email" type="email" class="form-control" placeholder="Your Email" required></p>',
        ),
    ) );
    ?>

</div>

<?php
// ============================
// BOOTSTRAP COMMENT CALLBACK
// ============================
function bootstrap_comment_template( $comment, $args, $depth ) {
    $tag       = ( 'div' === $args['style'] ) ? 'div' : 'li';
    $commenter = wp_get_current_commenter();
    $avatar    = get_avatar( $comment, 64, '', '', array( 'class' => 'rounded-circle me-3', 'loading' => 'lazy' ) );
    ?>

    <<?php echo $tag; ?> <?php comment_class( 'media mb-4', $comment ); ?> id="comment-<?php comment_ID(); ?>" itemscope itemtype="https://schema.org/Comment">
        <div class="d-flex">
            <?php echo $avatar; ?>
            <div class="media-body">
                <h6 class="mb-1 fw-bold" itemprop="author"><?php comment_author(); ?></h6>
                <small class="text-muted mb-2" itemprop="datePublished"><?php echo get_comment_date(); ?> at <?php echo get_comment_time(); ?></small>
                <div itemprop="text"><?php comment_text(); ?></div>
                <div class="mt-2">
                    <?php comment_reply_link( array_merge( $args, array(
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'],
                        'class'     => 'btn btn-sm btn-outline-secondary'
                    ) ) ); ?>
                </div>
            </div>
        </div>
    </<?php echo $tag; ?>>
<?php
}
?>

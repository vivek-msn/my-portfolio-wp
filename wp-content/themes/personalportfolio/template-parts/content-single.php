<?php
/**
 * Template part for displaying single post content
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>

    <!-- Post Title -->
    <h1 class="mb-3"><?php the_title(); ?></h1>

    <!-- Post Meta -->
    <div class="mb-3 text-muted">
        <span>Posted on: <?php echo get_the_date(); ?></span> |
        <span>By: <?php the_author_posts_link(); ?></span> |
        <span>Categories: <?php the_category(', '); ?></span>
    </div>

    <!-- Featured Image -->
    <?php if (has_post_thumbnail()): ?>
        <div class="mb-4">
            <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
        </div>
    <?php endif; ?>

    <!-- Post Content -->
    <div class="post-content mb-4">
        <?php the_content(); ?>
    </div>

    <!-- Tags -->
    <?php if (has_tag()): ?>
        <div class="mb-4">
            <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
        </div>
    <?php endif; ?>

    <!-- Pagination for multipage posts -->
    <?php
    wp_link_pages([
        'before' => '<div class="page-links">' . __('Pages:', 'textdomain'),
        'after'  => '</div>',
    ]);
    ?>

    <!-- Comments -->
    <?php
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
    ?>

</article>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?> itemscope itemtype="https://schema.org/BlogPosting">

    <h1 class="mb-3" itemprop="headline"><?php the_title(); ?></h1>

    <div class="mb-3 text-muted">
        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
            By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" itemprop="name"><?php the_author(); ?></a>
        </span> |
        <span>Posted on: <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></span> |
        <span>Categories: <?php the_category(', '); ?></span>
    </div>

    <?php if (has_post_thumbnail()): ?>
        <div class="mb-4" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
            <?php the_post_thumbnail('large', ['class' => 'img-fluid','alt' => get_the_title(),'loading'=>'lazy','decoding'=>'async']); ?>
            <meta itemprop="url" content="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
    <?php endif; ?>

    <div class="post-content mb-4" itemprop="articleBody">
        <?php the_content(); ?>
    </div>

    <?php if (has_tag()): ?>
        <div class="mb-4" itemprop="keywords">
            <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
        </div>
    <?php endif; ?>

    <?php wp_link_pages(['before'=>'<div class="page-links">'.__('Pages:','textdomain'),'after'=>'</div>']); ?>

    <?php if (comments_open() || get_comments_number()) { comments_template(); } ?>

</article>

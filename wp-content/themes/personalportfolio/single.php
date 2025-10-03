<?php get_header(); ?>

<main class="single-blog-page">
<div class="container my-5">
    <div class="row">

        <!-- Main Content -->
        <div class="col-lg-8 col-md-12 mt-5">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('mb-4'); ?>>

                        <!-- Post Title -->
                        <h3 class="mb-3"><?php the_title(); ?></h3>

                        <!-- Post Meta -->
                        <p class="text-muted">
                            Posted on <?php the_time('F j, Y'); ?> in 
                            <?php the_category(', '); ?>
                        </p>

                        <!-- Featured Image -->
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="mb-3">
                                <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Post Content -->
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>

                    </article>

                <?php
                endwhile;
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-12">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>
</main>

<?php get_footer(); ?>

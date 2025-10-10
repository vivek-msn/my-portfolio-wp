<?php get_header(); ?>

<main class="container py-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <!-- Illustration -->
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/404-illustration.svg" 
                 alt="Page not found" class="img-fluid mb-4" style="max-height:300px;">

            <!-- 404 Message -->
            <h1 class="display-1 fw-bold text-danger mb-3">404</h1>
            <h2 class="fw-bold mb-3">Oops! Page Not Found</h2>
            <p class="lead mb-4">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>

            <!-- Search Form -->
            <div class="mb-4">
                <?php get_search_form(); ?>
            </div>

            <!-- Back to Home Button -->
            <a href="<?php echo home_url(); ?>" class="btn btn-primary btn-lg mb-5">Go Back Home</a>
        </div>
    </div>

    <!-- Popular Posts Section -->
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-4">
            <h3 class="fw-bold mb-4">Popular Posts</h3>
        </div>
        <?php
        $popular = new WP_Query(array(
            'posts_per_page' => 4,
            'orderby' => 'comment_count',
            'order' => 'DESC',
        ));

        if($popular->have_posts()) :
            while($popular->have_posts()) : $popular->the_post(); ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <?php if(has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['class'=>'card-img-top', 'alt'=>get_the_title()]); ?>
                            </a>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata();
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>

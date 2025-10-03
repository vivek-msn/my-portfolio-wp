<?php get_header(); ?>

<section class="category-archive py-5">
    <div class="container">
        <div class="row">
            <!-- Category Title & Description -->
            <div class="col-12 text-center mb-5">
                <?php 
                $category = get_queried_object();
                $cat_image = get_term_meta($category->term_id, 'category_image', true);
                ?>

                <h2><?php single_cat_title(); ?></h2>
                <p><?php echo category_description(); ?></p>

                <!-- Show Category Image (only once) -->
                <?php if ($cat_image): ?>
                    <div class="mt-4">
                        <img src="<?php echo esc_url($cat_image); ?>" 
                             alt="<?php echo esc_attr($category->name); ?>" 
                             class="img-fluid">
                    </div>
                <?php endif; ?>
            </div>

            <!-- Posts Loop -->
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="col-12 mb-4">
                        <div class="card mb-4  flex-row rounded-0 border-0 p-0">
                             <div class="col-md-3 mb-3 mb-md-0"> <!-- 4/12 on desktop, full width on mobile -->
                            <!-- Post Thumbnail -->
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('full', ['class'=>'img-fluid']); ?>
                            <?php else: ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/blog.webp" 
                                     alt="blog" 
                                     class="img-fluid">
                            <?php endif; ?>
                            </div>
                            <div class="col-md-8 p-3">
                                <h5 class="text-dark mb-0"><?php the_title(); ?></h5>
                                <div class="border_line"></div>
                                <p class="text-dark"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark btn-sm mt-2">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <!-- Pagination -->
                <div class="col-12 mt-1">
                    <?php
                        the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => __('« Prev', 'textdomain'),
                            'next_text' => __('Next »', 'textdomain'),
                        ));
                    ?>
                </div>

            <?php else: ?>
                <p class="text-center text-white">No posts found in this category.</p>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>

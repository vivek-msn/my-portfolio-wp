<?php get_header(); ?>

<section class="category-archive py-5">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb bg-light p-3 rounded-3 shadow-sm">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php single_cat_title(); ?></li>
            </ol>
            </nav>

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
                <div class="row g-4">
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="col-12">
                            <article class="card flex-row flex-wrap border-0 rounded-4 shadow-sm overflow-hidden" itemscope itemtype="https://schema.org/BlogPosting">
                                <div class="col-md-3 p-0">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('medium', ['class'=>'img-fluid', 'alt'=>get_the_title(), 'itemprop'=>'image']); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/blog.webp" alt="blog" class="img-fluid">
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-9 p-4">
                                    <header>
                                        <h2 class="h5 mb-2" itemprop="headline"><a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a></h2>
                                    </header>
                                    <p class="text-muted mb-2" itemprop="datePublished"><?php echo get_the_date(); ?></p>
                                    <p itemprop="description"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark btn-sm mt-2">Read More</a>
                                </div>
                            </article>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p class="text-center text-white">No posts found in this category.</p>
            <?php endif; ?>

                <!-- Pagination -->
               <nav aria-label="Page navigation" class="mt-4">
                    <?php
                        the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => __('« Prev', 'textdomain'),
                            'next_text' => __('Next »', 'textdomain'),
                            'screen_reader_text' => ' ',
                        ));
                    ?>
                </nav>
            </div>
    </div>
</section>

<?php get_footer(); ?>

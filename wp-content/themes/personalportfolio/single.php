<?php get_header(); ?>

<main class="container my-5">
    <!-- WPBeginner-style Hero Section -->
<section class="wpb-hero text-white py-4 mt-5">
  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
    <!-- Left Text -->
    <div>
      <h6 class="mb-1">Trusted WordPress tutorials, when you need them most.</h6>
      <h2 class="fw-bold mb-0">Beginner’s Guide to WordPress</h2>
    </div>

    <!-- Right Stats + Trophy -->
    <div class="mt-4 mt-md-0 d-flex align-items-center flex-wrap justify-content-md-end text-center">
      <div class="mx-3 text-md-start">
        <h5 class="fw-bold mb-0">25 Million+</h5>
        <small>Websites using our plugins</small>
      </div>
      <div class="mx-3 text-md-start">
        <h5 class="fw-bold mb-0">16+</h5>
        <small>Years of WordPress experience</small>
      </div>
      <div class="mx-3 text-md-start">
        <h5 class="fw-bold mb-0">3000+</h5>
        <small>Tutorials by experts</small>
      </div>
      <div class="ms-3 trophy">
        <i class="fas fa-trophy"></i>
      </div>
    </div>
  </div>
</section>

    <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb bg-light p-3 rounded-3 shadow-sm">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Blog</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
    </ol>
  </nav>
  <div class="row">
    <!-- Main Content -->
    <div class="col-lg-8 col-md-12">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="bg-white shadow-sm rounded-4 p-4 mb-5">

          <!-- Post Title -->
          <h2 class="fw-medium mb-3"><?php the_title(); ?></h2>

          <!-- Meta Info -->
          <div class="text-muted small mb-4">
            By <strong><?php the_author(); ?></strong> |
            <?php echo get_the_date(); ?>
          </div>

          <!-- Featured Image -->
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail mb-4">
              <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded-3']); ?>
            </div>
          <?php endif; ?>

          <!-- Post Content -->
          <div class="post-content mb-4">
            <?php the_content(); ?>
          </div>

          <!-- Share Buttons -->
          <div class="border-top pt-3 mt-4">
            <p class="fw-semibold">Share this post:</p>
            <a href="https://facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="btn btn-sm btn-primary me-2" target="_blank">
              <i class="bi bi-facebook"></i> Facebook
            </a>
            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" class="btn btn-sm btn-info me-2" target="_blank">
              <i class="bi bi-twitter"></i> Twitter
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" class="btn btn-sm btn-secondary" target="_blank">
              <i class="bi bi-linkedin"></i> LinkedIn
            </a>
          </div>

          <!-- Author Box -->
          <div class="author-box bg-light p-4 mt-5 rounded-3">
            <div class="d-flex align-items-center">
              <?php echo get_avatar( get_the_author_meta('ID'), 80, '', '', ['class' => 'rounded-circle me-3'] ); ?>
              <div>
                <h5 class="mb-1"><?php the_author(); ?></h5>
                <p class="text-muted small mb-0"><?php the_author_meta('description'); ?></p>
              </div>
            </div>
          </div>

        </article>
            
         <!-- Related Posts -->
        <?php
          $related = new WP_Query([
            'category__in' => wp_get_post_categories(get_the_ID()),
            'post__not_in' => [get_the_ID()],
            'posts_per_page' => 3,
          ]);

          if ( $related->have_posts() ) :
        ?>
          <section class="related-posts mt-5">
            <h4 class="fw-bold mb-4">Related Posts</h4>
            <div class="row">
              <?php while ( $related->have_posts() ) : $related->the_post(); ?>
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow-sm border-0">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top rounded-top']); ?>
                      </a>
                    <?php endif; ?>
                    <div class="card-body">
                      <h6 class="card-title">
                        <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a>
                      </h6>
                    </div>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </section>
        <?php endif; ?>

                <!-- Comments Section -->
        <section class="comments mt-5">
          <div class="bg-white shadow-sm rounded-4 p-4">
            <h4 class="fw-bold mb-4"><i class="bi bi-chat-dots"></i> Comments</h4>
            <?php
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            ?>
          </div>
        </section>

      <?php endwhile; endif; ?>

    </div>

    <!-- Sidebar -->
    <div class="col-lg-4 col-md-12">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>

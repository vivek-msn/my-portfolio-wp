<?php get_header(); ?>

<main id="main-content" class="container my-5" role="main">
  
 <!-- Hero Section -->
  <section class="wpb-hero text-white py-5 mt-5" style="background-color: #4B0082;" aria-labelledby="hero-heading">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
      <div>
        <p class="lead mb-1">Trusted WordPress tutorials, when you need them most.</p>
        <h1 id="hero-heading" class="fw-bold mb-0 h2">Beginner’s Guide to WordPress</h1>
      </div>

      <div class="mt-4 mt-md-0 d-flex align-items-center flex-wrap justify-content-md-end text-center">
        <div class="mx-3 text-md-start">
          <h2 class="fw-bold mb-0 h5">25 Million+</h2>
          <small>Websites using our plugins</small>
        </div>
        <div class="mx-3 text-md-start">
          <h2 class="fw-bold mb-0 h5">16+</h2>
          <small>Years of WordPress experience</small>
        </div>
        <div class="mx-3 text-md-start">
          <h2 class="fw-bold mb-0 h5">3000+</h2>
          <small>Tutorials by experts</small>
        </div>
        <div class="ms-3 trophy" aria-hidden="true">
          <i class="fas fa-trophy fa-2x"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Breadcrumb -->
  <nav aria-label="Breadcrumb" class="my-4">
    <ol class="breadcrumb bg-light p-3 rounded-3 shadow-sm">
      <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">Blog</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-lg-8 col-md-12">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- Article Schema -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white shadow-sm rounded-4 p-4 mb-5'); ?>
          itemscope itemtype="https://schema.org/BlogPosting">

          <header class="mb-3">
            <h1 class="fw-medium mb-3" itemprop="headline"><?php the_title(); ?></h1>
            <p class="text-muted small mb-4">
              By <strong itemprop="author" itemscope itemtype="https://schema.org/Person">
                <span itemprop="name"><?php the_author(); ?></span>
              </strong> |
              <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
                <?php echo get_the_date(); ?>
              </time>
            </p>
          </header>

          <?php if ( has_post_thumbnail() ) : ?>
            <figure class="post-thumbnail mb-4" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
              <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded-3', 'itemprop' => 'url']); ?>
              <meta itemprop="width" content="1200">
              <meta itemprop="height" content="675">
            </figure>
          <?php endif; ?>

          <div class="post-content mb-4" itemprop="articleBody">
            <?php the_content(); ?>
          </div>

          <!-- Share Buttons -->
          <div class="border-top pt-3 mt-4">
            <p class="fw-semibold">Share this post:</p>
            <a href="https://facebook.com/sharer.php?u=<?php the_permalink(); ?>" 
               class="btn btn-sm btn-primary me-2" 
               target="_blank" rel="noopener">
              <i class="bi bi-facebook"></i> Facebook
            </a>
            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" 
               class="btn btn-sm btn-info me-2" 
               target="_blank" rel="noopener">
              <i class="bi bi-twitter"></i> Twitter
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" 
               class="btn btn-sm btn-secondary" 
               target="_blank" rel="noopener">
              <i class="bi bi-linkedin"></i> LinkedIn
            </a>
          </div>

          <!-- Author Box -->
          <footer class="author-box bg-light p-4 mt-5 rounded-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
            <div class="d-flex align-items-center">
              <?php echo get_avatar( get_the_author_meta('ID'), 80, '', '', ['class' => 'rounded-circle me-3'] ); ?>
              <div>
                <h5 class="mb-1" itemprop="name"><?php the_author(); ?></h5>
                <p class="text-muted small mb-0" itemprop="description"><?php the_author_meta('description'); ?></p>
              </div>
            </div>
          </footer>

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
          <section class="related-posts mt-5" aria-label="Related Articles">
            <h2 class="fw-bold mb-4 h4">Related Posts</h2>
            <div class="row">
              <?php while ( $related->have_posts() ) : $related->the_post(); ?>
                <div class="col-md-4 mb-4">
                  <article class="card h-100 shadow-sm border-0" itemscope itemtype="https://schema.org/BlogPosting">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <a href="<?php the_permalink(); ?>" itemprop="url">
                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top rounded-top', 'itemprop' => 'image']); ?>
                      </a>
                    <?php endif; ?>
                    <div class="card-body">
                      <h3 class="card-title h6">
                        <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none" itemprop="headline"><?php the_title(); ?></a>
                      </h3>
                    </div>
                  </article>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </section>
        <?php endif; ?>

        <!-- Comments Section -->
        <section class="comments mt-0" aria-label="Comments Section">
          <div class="bg-white shadow-sm rounded-4 p-4">
            <h2 class="fw-bold mb-4 h4"><i class="bi bi-chat-dots"></i> Comments</h2>
            <?php
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            ?>
          </div>
        </section>

      <?php endwhile; endif; ?>

    </div>

    <aside class="col-lg-4 col-md-12" role="complementary">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</main>

<?php get_footer(); ?>
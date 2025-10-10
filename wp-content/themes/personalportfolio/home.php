<?php
/*
 * Template Name: Blog Template
 * Description: Displays all blog posts in a modern, SEO-friendly layout.
 */

get_header(); 
?>

<main id="main-content" class="container py-5" role="main">

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
      <li class="breadcrumb-item">
        <a href="<?php echo esc_url( home_url() ); ?>">Home</a>
      </li>
      <?php
        $posts_page_id = get_option( 'page_for_posts' );
        if ( $posts_page_id ) :
          $slug  = get_post_field( 'post_name', $posts_page_id );
          $title = get_the_title( $posts_page_id );
      ?>
          <li class="breadcrumb-item active" aria-current="page">
            <?php echo esc_html( $title ); ?>
          </li>
      <?php endif; ?>
    </ol>
  </nav>

  <!-- Archive Title -->
  <header class="d-flex align-items-center justify-content-between mb-4">
    <h2 class="h3 mb-0 pt-2"><?php single_post_title( 'All Blog Posts - ' ); ?></h2>
  </header>

  <!-- Blog Grid -->
  <div class="row g-4">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('col-12 col-md-6 col-lg-4'); ?> itemscope itemtype="https://schema.org/BlogPosting">
          <meta itemprop="mainEntityOfPage" content="<?php the_permalink(); ?>">
          <?php get_template_part( 'template-parts/content', 'archive' ); ?>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <div class="col-12">
        <p>No posts found.</p>
      </div>
    <?php endif; ?>
  </div>

  <!-- Pagination -->
  <nav class="mt-5" aria-label="Posts navigation">
    <?php
    the_posts_pagination( array(
      'mid_size'  => 2,
      'prev_text' => '<span aria-hidden="true">&laquo;</span><span class="visually-hidden">Previous</span>',
      'next_text' => '<span aria-hidden="true">&raquo;</span><span class="visually-hidden">Next</span>',
      'screen_reader_text' => '',
    ) );
    ?>
  </nav>

</main>

<?php get_footer(); ?>
<?php

/*
Template Name:- Blog Template
*/


get_header(); ?>

<div class="container py-5">
  <!-- Archive title -->
  <div class="d-flex align-items-center justify-content-between mb-0">
    <h1 class="h3 mb-3 pt-5">All blog posts</h1>
    <!-- optional: category filter or search -->
  </div>

  <!-- Grid: 3 columns on lg, 2 on md, 1 on xs -->
  <div class="row g-4">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-12 col-md-6 col-lg-4">
          <?php get_template_part( 'template-parts/content', 'archive' ); ?>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <div class="col-12">
        <p>No posts found.</p>
      </div>
    <?php endif; ?>
  </div>

  <!-- Pagination (Bootstrap-compatible output) -->
  <nav class="mt-4" aria-label="Page navigation">
    <?php
    the_posts_pagination( array(
      'mid_size'  => 2,
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;',
      'screen_reader_text' => ' ',
    ) );
    ?>
  </nav>
</div>

<?php get_footer(); ?>


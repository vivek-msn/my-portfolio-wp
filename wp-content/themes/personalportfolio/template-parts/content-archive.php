<article id="post-<?php the_ID(); ?>" <?php post_class('h-100'); ?> itemscope itemtype="https://schema.org/BlogPosting">

  <div class="card border-0 h-100">
    <a href="<?php the_permalink(); ?>" class="d-block overflow-hidden" aria-label="<?php the_title_attribute(); ?>" itemprop="url">
      <?php if ( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail( 'archive-thumb', [
          'class'   => 'card-img-top w-100',
          'loading' => 'lazy',
          'decoding'=> 'async',
          'alt'     => esc_attr( get_the_title() ),
          'title'   => esc_attr( get_the_title() )
        ] ); ?>
      <?php else: ?>
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/placeholder.jpg' ); ?>"
             class="card-img-top w-100"
             alt="<?php the_title_attribute(); ?>"
             loading="lazy" decoding="async">
      <?php endif; ?>
    </a>

    <div class="card-body px-0 pt-3">
      <div class="small text-uppercase text-muted mb-2">
        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
          <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>"
             class="text-decoration-none small" itemprop="name">
             <?php the_author(); ?>
          </a>
        </span>
        • <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
            <?php echo get_the_date(); ?>
          </time>
      </div>

      <h2 class="h5 card-title mb-2" itemprop="headline">
        <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none" aria-label="Read more about <?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
        <span class="ms-2" aria-hidden="true">↗</span>
      </h2>

      <p class="card-text text-muted small mb-3" itemprop="description">
        <?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?>
      </p>

      <div class="post-tags mt-2" itemprop="keywords">
        <?php
        $terms = get_the_terms( get_the_ID(), 'post_tag' );
        if ( $terms && ! is_wp_error( $terms ) ) {
          foreach ( $terms as $term ) {
            echo '<a href="' . esc_url( get_term_link( $term ) ) . '" class="badge rounded-pill bg-light text-secondary me-1 text-decoration-none small" rel="tag">'
                 . esc_html( $term->name ) . '</a>';
          }
        }
        ?>
      </div>
    </div>
  </div>

</article>
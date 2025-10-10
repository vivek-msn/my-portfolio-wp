<?php
/**
 * Footer Template
 * 
 * @package Personal Portfolio
 */
?>

<footer id="contact" class="footer_wrapper mt-3 mt-md-0" role="contentinfo">
  
  <?php if ( is_front_page() ) : ?>
  <!-- Newsletter Section -->
  <section class="newsletter-wrapper py-5" style="background:blueviolet;">
    <div class="container text-center">
      <h2 class="text-white h4">Get Updates from Anywhere</h2>
      <p class="text-white">Join our newsletter to receive updates and inspiration directly in your inbox.</p>

      <form class="row g-3 justify-content-center mt-4" action="#" method="post" aria-label="Newsletter signup form">
        <div class="col-12 col-sm-6 col-lg-4">
          <label for="newsletter-email" class="visually-hidden">Email Address</label>
          <input type="email" id="newsletter-email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="col-auto">
          <button type="submit" class="main-btn secondary-btn border-white mb-3" aria-label="Subscribe to newsletter">
            Get Started
          </button>
        </div>
      </form>
    </div>
  </section>
  <?php endif; ?>

  <!-- Main Footer Section -->
  <div class="container mt-5">
    <div class="row align-items-center justify-content-center text-center">
      
      <!-- Footer Logo -->
      <div class="col-12 mb-3">
        <a href="<?php echo home_url(); ?>" class="footer-logo d-inline-block" aria-label="Go to homepage">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?> logo" class="img-fluid">
        </a>
      </div>

      <!-- Social Icons -->
      <nav class="social-icons my-4" aria-label="Social Media Links">
        <h5 class="mb-3">Follow Me</h5>
        <ul class="list-unstyled d-flex justify-content-center align-items-center gap-3">
          <li><a href="<?php echo esc_url( get_theme_mod('facebook_url', '#') ); ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
          <li><a href="<?php echo esc_url( get_theme_mod('twitter_url', '#') ); ?>" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
          <li><a href="<?php echo esc_url( get_theme_mod('instagram_url', '#') ); ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
          <li><a href="<?php echo esc_url( get_theme_mod('youtube_url', '#') ); ?>" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </nav>

      <!-- Copyright -->
      <div class="col-lg-8 col-sm-12">
        <p class="footer-text my-2">
          &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> — All rights reserved.  
          Made with <i class="fa-solid fa-heart" style="color:#ea1f1f;"></i> by <a href="#" rel="nofollow">iThink Team 2025</a>.
        </p>
      </div>

    </div>
  </div>
</footer>
<!-- SEO: JSON-LD Organization Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "<?php echo esc_js( get_bloginfo('name') ); ?>",
  "url": "<?php echo esc_url( home_url() ); ?>",
  "image": "<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/logo.png' ); ?>",
  "sameAs": [
    "<?php echo esc_url( get_theme_mod('facebook_url', '') ); ?>",
    "<?php echo esc_url( get_theme_mod('twitter_url', '') ); ?>",
    "<?php echo esc_url( get_theme_mod('instagram_url', '') ); ?>",
    "<?php echo esc_url( get_theme_mod('youtube_url', '') ); ?>"
  ],
  "jobTitle": "Web Developer & WordPress Specialist",
  "description": "<?php echo esc_js( get_bloginfo('description') ); ?>"
}
</script>

<?php wp_footer(); ?>

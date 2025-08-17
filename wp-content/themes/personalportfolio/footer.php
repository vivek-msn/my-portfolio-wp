<?php
/**
 * This is our main footer for our theme
 * 
 * This Template displays all of the footer section
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Personal Portfolio
 */
?>

<!-- Footer section  -->
<section id="contact" class="footer_wrapper mt-3 mt-md-0">
    <div class="container" style="background:blueviolet;">
        <div class="row">
            <div class="col-12 newsletter text-center px-4">
                <div>
                    <h3 class="text-white">get update from anywhere</h3>
                    <p class="text-white">Bearing Void gathering light light his evening unto dont afraid</p>
                    <form class="row g-3 justify-content-center mt-4">
                        <div class="col col-sm-6 col-lg-4">
                            <input type="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="col col-auto">
                            <button class="main-btn secondary-btn border-white mb-3">Get Started</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <div class="footer-logo mb-3 mb-md-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="footer-logo" class="img-fluid">
                </div>
                <div class="my-4 social-icons">
                    <h5>Follow Me</h5>
                    <ul class="list-unstyled d-flex justify-content-center align-items-center">
                        <li><a href="<?php echo get_theme_mod('facebook_url', '#'); ?>"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="<?php echo get_theme_mod('twitter_url', '#'); ?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?php echo get_theme_mod('instagram_url', '#'); ?>"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="<?php echo get_theme_mod('youtube_url', '#'); ?>"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <p class="footer-text text-center my-2">Copyright © <?php echo date('Y'); ?> All rights reserved | This template
                    is made with <i class="fa-solid fa-heart" style="color: #ea1f1f;"></i> by <a href="#">iThink Team 2025</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Footer section exit  -->

<!-- Ttessklksl -->

<?php wp_footer(); ?>

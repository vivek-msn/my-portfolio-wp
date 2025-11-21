<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Personal Portfolio
 */

get_header();?>
 <!-- Banner section  -->
    <section id="home" class="banner_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-lg-1 order-2 banner-content">
                    <h2 class="text-uppercase position-relative">Hello</h2>
                    <h1 class="text-uppercase">I am Vivek Saini test</h1>
                    <h5 class="text-uppercase">Full Stack WordPress Developer</h5>
                    <div class="mt-5">
                        <a class="main-btn primary-btn" href="#">Hire Me</a>
                        <a class="main-btn secondary-btn ms-4" href="https://drive.usercontent.google.com/download?id=13jjRN5k4FdHeARLe1suvXzjHnqfsLV3l&export=download&authuser=0&confirm=t&uuid=a64094a8-36ee-47cc-9277-02e431b766a0&at=APZUnTXUtySCUnxaHw8IqYQgmhww:1708966137870">Get CV</a>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="top-right-img overflow-hidden rounded-circle">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/WorldCamp.jpeg" class="img-fluid zoom-img w-100 h-100 rounded-circle border border-secondary p-1" alt="Circular Frame">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section exit  -->
    
    <!-- About section  -->
    <section id="about" class="about_wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-us.webp" alt="about-us" srcset="" class="img-fluid">
                </div>
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h3>let’s <br>Introduce about <br>myself</h3>
                    <p>Experienced SEO Specialist and WordPress Developer with a proven track record of success in optimizing websites for search engines 
                        and customizing WordPress themes and plugins. With 1 year of dedicated experience in SEO and 2 years specializing in WordPress theme 
                        and plugin customization, coupled with an additional 2 years focused on plugin and theme development, I bring a comprehensive understanding 
                        of web development and digital marketing strategies.</p>
                    <a href="https://drive.usercontent.google.com/download?id=13jjRN5k4FdHeARLe1suvXzjHnqfsLV3l&export=download&authuser=0&confirm=t&uuid=a64094a8-36ee-47cc-9277-02e431b766a0&at=APZUnTXUtySCUnxaHw8IqYQgmhww:1708966137870" class="main-btn primary-btn mt-4">Download CV</a>
                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/client-img/logo1.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/client-img/logo2.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/client-img/logo3.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/client-img/logo4.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/client-img/logo5.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/client-img/logo6.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/client-img/logo7.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/client-img/logo8.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/client-img/logo9.webp" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-4 col-md-10">
                    <div class="client-info">
                        <div class="d-flex">
                            <span class="large">5</span>
                            <span class="smll">Years<br>Experience<br>Working</span>
                        </div>
                        <div class="call-now d-flex py-4">
                            <div>
                                <span class="fa fa-phone-alt"></span>
                            </div>
                            <div class="ms-4">
                                <p>Call us now</p>
                                <h5>(+91)-9084499957</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section exit  -->

    <!-- Services section  -->
    <section id="services" class="services_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h2>SERVICE OFFERS</h2>
                    <p>Is give may shall likeness made yielding spirit a itself togeth created after sea <br
                            class="d-none d-lg-block">
                        is in beast beginning signs open god you're gathering ithe</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services-img/mouse.webp" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Web Development</h5>
                        <p>I offer a comprehensive range of services, including custom theme development, 
                         plugin integration, website optimization, and ongoing maintenance and support.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services-img/ui-ux.webp" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">SPEED/PERFOMANCE</h5>
                        <p>As a dedicated WordPress developer,
                        I specialize in enhancing website speed and performance to ensure optimal user experiences and maximize your online presence.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services-img/website.webp" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">WEB DESIGN</h5>
                        <p>Elevate Your Website with Stunning Designs Powered by WordPress Page Builders.
                        such as WPBakery, Divi Builder, and Elementor.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/services-img/seo.webp" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">SEO OPTIMIZE</h5>
                        <p>Enhance Your Online Visibility with Proven SEO Strategies.
                        To truly succeed online, your website needs to be easily discoverable by your target audience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section exit  -->

    <!-- Portfolio Section  -->
   <?php get_template_part('template-parts/portfolio'); ?>
    <!-- Portfolio Section exit  -->

    <!-- Blog Section  -->   

    <section id="blog" class="blog_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h2>BLOG</h2>
                    <p>Is give may shall likeness made yielding spirit a itself togeth created after sea <br
                            class="d-none d-lg-block">
                        is in beast beginning signs open god you're gathering ithe</p>
                </div>
                 <?php
                    $categories = get_categories(); // fetch all categories
                    foreach ($categories as $category) :
                    // Get category data
                    $cat_name = $category->name;               // Category name
                    $cat_desc = $category->description;       // Category description
                    $cat_link = get_category_link($category->term_id); // Link to category archive
                    $cat_image = get_term_meta($category->term_id, 'category-image-id', true); // Custom image (from step 1 & 2)
                 ?>
               <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <a href="<?php echo esc_url($cat_link); ?>" class="d-block category-btn">
                        <?php if ($cat_image) : ?>
                            <img src="<?php echo esc_url($cat_image); ?>" alt="<?php echo esc_attr($cat_name); ?>" class="img-fluid">
                        <?php else: ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/blog.webp" alt="blog" class="img-fluid">
                        <?php endif; ?>
                        
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                <h5 class="text-white mb-0"><?php echo esc_html($cat_name); ?></h5>
                                <div class="border_line"></div>
                                <p class="text-white"><?php echo esc_html($cat_desc); ?></p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Blog Section exit  -->
    
    <?php get_footer(); ?>
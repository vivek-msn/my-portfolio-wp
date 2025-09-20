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
                    <h1 class="text-uppercase">I am Vivek Saini</h1>
                    <h5 class="text-uppercase">Full Stack WordPress Developer</h5>
                    <div class="mt-5">
                        <a class="main-btn primary-btn" href="#">Hire Me</a>
                        <a class="main-btn secondary-btn ms-4" href="https://drive.usercontent.google.com/download?id=13jjRN5k4FdHeARLe1suvXzjHnqfsLV3l&export=download&authuser=0&confirm=t&uuid=a64094a8-36ee-47cc-9277-02e431b766a0&at=APZUnTXUtySCUnxaHw8IqYQgmhww:1708966137870">Get CV</a>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="top-right-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-right.webp" class="img-fluid">
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
    <section id="portfolio" class="portfolio_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-left mb-md-5 mb-2">
                    <h2>QUALITY WORK <br>RECENTLY DONE PROJECT</h2>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">Customizing Themes for different domains</button>
                      </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Develop Wordpress Theme And Plugin</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false">Projects Build using Site builders</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false">Build Template Bootstrap 5</button>
                      </li>
                </ul>

                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/ithinkecommerce.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://thinkecommerce.ithinkservices.com/">"Think Ecommerce: Your Responsive Online Store WordPress Theme"</a></h5>
                                <p>"Think Ecommerce is a user-friendly WordPress theme designed for online stores. It's built to look great and work smoothly on any device, 
                                    so your customers can shop from their computer, tablet, or phone with ease."
                                </p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/slider-plugin.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://slider.ithinkservices.com/">"Think Slider: Design Your Own Stunning Image Sliders for WordPress"</a></h5>
                                <p>"CustomSlider is a powerful WordPress plugin that lets you create beautiful image sliders with ease. Whether you're showcasing your latest products, 
                                    highlighting your portfolio,"</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/food-ordering.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://food.ithinkservices.com/">Food Ordering</a></h5>
                                <p>"Welcome to your customized food ordering site, meticulously crafted using WordPress themes to bring your culinary vision to life.</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/pharmacy-ordering.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://pharma.ithinkservices.com/">Pharmacy Ordering</a></h5>
                                <p>"Welcome to your convenient online pharmacy ordering platform, meticulously crafted using WordPress to provide seamless 
                                    access to essential healthcare products and services.</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/tour-site.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://tour.ithinkservices.com/">Tour and Travel Booking</a></h5>
                                <p>Embark on your next adventure with confidence, courtesy of our meticulously crafted tour and travel booking site, designed and customized using the power of WordPress.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/agency-site.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://ithinkservices.com/">Agency Site</a></h5>
                                <p>Discover our range of services, from web design to digital marketing, all crafted with care to elevate your brand. With intuitive navigation and engaging visuals, exploring our site is a breeze.</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/real-estate.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://realestate.ithinkservices.com/">Real Estate Listing</a></h5>
                                <p>"Explore your dream home with our user-friendly real estate listing site, powered by WordPress. Easily browse through a diverse range of properties, from cozy apartments to spacious villas, all in one convenient place.</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/blog-affiliate.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://socialjaankari.com/">Blog Affiliate Site</a></h5>
                                <p>"Welcome to our captivating blog affiliate marketing site, where stunning design meets seamless functionality, all powered by WordPress.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/pharmacy-ordering.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://pharma.ithinkservices.com/">Customize theme by using Elementor</a></h5>
                                <p>"Build Or Setup Online Pharmacy Ordering store by using Elementor Page Builder and Woo-Commerce Plugin"</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/wp-bakery-ecom.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://wpecommerce.ithinkservices.com/">Customize theme by using Wp Bakery</a></h5>
                                <p>"Build Or Setup E-commerce store by using Wp Bakery Page builder and Woo-Commerce Plugin"</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/divi-theme.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://diviecommerce.ithinkservices.com/">Customize theme by using Divi Theme Builder</a></h5>
                                <p>"Build Or Setup E-commerce store for Clothing by using Divi Theme Page builder and Woo-commerce Plugin"</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/E-commerce-template.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://vivek-msn.github.io/E-Commerce-Template/">E-Commerce Template</a></h5>
                                <p>"Our project is a modern, responsive template built from scratch using Bootstrap 5, HTML, CSS, and a touch of JavaScript. This template offers a clean and sleek design, with flexible layout options to suit various purposes</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/resturant-template.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://vivek-msn.github.io/Food-and-restaurant-template/">Food and Restaurant template</a></h5>
                                <p>"Our project is a modern, responsive template built from scratch using Bootstrap 5, HTML, CSS, and a touch of JavaScript. This template offers a clean and sleek design, with flexible layout options to suit various purposes"</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/jewellery-template.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://vivek-msn.github.io/E-commerce-Jewellery/">E-Commerce Jewellery</a></h5>
                                <p>"Our project is a modern, responsive template built from scratch using Bootstrap 5, HTML, CSS, and a touch of JavaScript. This template offers a clean and sleek design, with flexible layout options to suit various purposes"</p>
                            </div>
                        </div>
                        
                    </div>
                 </div>
            </div>
        </div>
    </section>
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
                    </div>
                </div>
<!-- 
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/blog1.webp" alt="blog" class="img-fluid">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                <h5 class="text-white mb-0">POLITICS</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/blog2.webp" alt="blog" class="img-fluid">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                <h5 class="text-white mb-0">FOOD</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                                <p> Testing deploy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/blog.webp" alt="blog" class="img-fluid">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                 <h5 class="text-white mb-0">Social Life</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Blog Section exit  -->
    
    <?php get_footer(); ?>
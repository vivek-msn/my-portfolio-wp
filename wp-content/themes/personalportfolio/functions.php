<?php
/**
 * Personal Portfolio functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Personal Portfolio
 */

// Enqueue scripts and styles
function personal_portfolio_scripts() {

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', false);

    // Bootstrap JS and Popper.js
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), '2.11.8', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array('popper-js'), '5.3.3', true);

    // Theme's main stylesheet
    wp_enqueue_style('portfolio-theme-style', get_stylesheet_uri(), array());

    // Custom stylesheet and JS
    wp_enqueue_style('portfolio-responsive-style', get_template_directory_uri() . '/assets/custom-css/responsive-style.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/custom-js/main.js', array('jquery'), '1.0.0', true);

    // Enqueue jQuery explicitly
    wp_enqueue_script('jquery');

    // Font Awesome
    wp_enqueue_style('font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1', 'all');
}

add_action('wp_enqueue_scripts', 'personal_portfolio_scripts');



// function add_custom_inline_styles() {
//     // Get the image URL
//     $image_url = get_stylesheet_directory_uri() . '/assets/img/subscribe-bg.webp';

//     // Define your custom CSS
//     $custom_css = "
//         .footer_wrapper .newsletter {
//             width: 100%;
//             height: 100%;
//             background-image: url('$image_url');
//             background-repeat: no-repeat;
//             background-size: cover;
//             background-position: center center;
//             padding: 9.375rem 0;
//         }
//     ";

//     // Add the inline CSS to the main theme stylesheet
//     wp_add_inline_style('portfolio-theme-style', $custom_css);
// }

// // Hook the function to wp_enqueue_scripts
// add_action('wp_enqueue_scripts', 'add_custom_inline_styles');

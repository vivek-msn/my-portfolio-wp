<?php
/**
 * Personal Portfolio functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Personal Portfolio
 */

require_once __DIR__ . '/vendor/autoload.php';


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

add_action('after_setup_theme',function() {
// Add theme support for Featured Images
add_theme_support('post-thumbnails');
add_image_size( 'archive-thumb', 800, 450, true);
add_theme_support( 'title-tag');
// Enable HTML5 markup for forms, galleries, captions
add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
});
// (optional) set default image sizes
set_post_thumbnail_size(600, 400, true);
add_filter('excerpt_length', function($length){
    return 20;
}, 999);

// // Hook the function to wp_enqueue_scripts
// add_action('wp_enqueue_scripts', 'add_custom_inline_styles');
// ----------------- CATEGORY IMAGE CUSTOM FIELD -----------------

// Step 1: Add image field in category add/edit page
add_action('category_add_form_fields', 'add_category_image_field', 10, 2);
add_action('category_edit_form_fields', 'edit_category_image_field', 10, 2);

function add_category_image_field($taxonomy) {
    ?>
    <div class="form-field term-group">
        <label for="category-image-id">Category Image</label>
        <input type="text" id="category-image-id" name="category-image-id" value="">
        <p class="description">Enter image URL for this category</p>
    </div>
    <?php
}

function edit_category_image_field($term) {
    $image_id = get_term_meta($term->term_id, 'category-image-id', true);
    ?>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="category-image-id">Category Image</label></th>
        <td>
            <input type="text" id="category-image-id" name="category-image-id" value="<?php echo esc_attr($image_id); ?>">
            <p class="description">Enter image URL for this category</p>
        </td>
    </tr>
    <?php
}

// Step 2: Save the field
add_action('created_category', 'save_category_image', 10, 2);
add_action('edited_category', 'save_category_image', 10, 2);

function save_category_image($term_id, $tt_id) {
    if (isset($_POST['category-image-id']) && '' !== $_POST['category-image-id']) {
        $image = sanitize_text_field($_POST['category-image-id']);
        update_term_meta($term_id, 'category-image-id', $image);
    }
}
add_action('init', function () {
    if (isset($_GET['generate_fake_posts'])) {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            wp_insert_post([
                'post_title'   => $faker->sentence,
                'post_content' => $faker->paragraphs(5, true),
                'post_status'  => 'publish',
                'post_type'    => 'post',
            ]);
        }

        echo "✅ 10 Fake posts created!";
        exit;
    }
});

add_action('wp_footer', function () {
    if (current_user_can('administrator')) { // Only admin sees it
        global $template;
        echo '<div style="position:fixed;bottom:0;left:0;background:#000;color:#fff;padding:5px;z-index:9999;">';
        echo 'Current Template: ' . basename($template);
        echo '</div>';
    }
});

function Portfolio_theme_setup(){
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'personal-portfolio'),
    ));
}
add_action('after_setup_theme', 'Portfolio_theme_setup');

function custom_bootstrap_comment_form( $fields ) {
  $fields['author'] = '<div class="mb-3"><input id="author" name="author" type="text" class="form-control" placeholder="Your Name*" required></div>';
  $fields['email'] = '<div class="mb-3"><input id="email" name="email" type="email" class="form-control" placeholder="Your Email*" required></div>';
  return $fields;
}
add_filter( 'comment_form_default_fields', 'custom_bootstrap_comment_form' );

function custom_bootstrap_comment_textarea( $args ) {
  $args['comment_field'] = '<div class="mb-3"><textarea id="comment" name="comment" class="form-control" rows="4" placeholder="Your Comment*" required></textarea></div>';
  $args['class_submit'] = 'btn btn-primary px-4';
  return $args;
}
add_filter( 'comment_form_defaults', 'custom_bootstrap_comment_textarea' );


// === 1. Register Custom Post Type and Taxonomy ===
function register_portfolio_post_type() {
    register_post_type('portfolio', [
        'label' => 'Portfolio',
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'portfolio']
    ]);

    register_taxonomy('project-category', 'portfolio', [
        'label' => 'Project Categories',
        'hierarchical' => true,
        'public' => true,
        'rewrite' => ['slug' => 'project-category']
    ]);
}
add_action('init', 'register_portfolio_post_type');

// === Add Custom Meta Box for Portfolio URL ===
function portfolio_add_custom_url_meta_box() {
    add_meta_box(
        'portfolio_custom_url_box',             // Unique ID
        'Custom Project URL',                   // Box title
        'portfolio_custom_url_meta_box_html',   // Callback function
        'portfolio',                            // Post type (CPT name)
        'normal',                               // Context
        'default'                               // Priority
    );
}
add_action('add_meta_boxes', 'portfolio_add_custom_url_meta_box');

// === Display input field inside meta box ===
function portfolio_custom_url_meta_box_html($post) {
    $value = get_post_meta($post->ID, '_custom_project_url', true);
    ?>
    <label for="custom_project_url_field"><strong>Project URL:</strong></label>
    <input 
        type="url" 
        name="custom_project_url_field" 
        id="custom_project_url_field" 
        value="<?php echo esc_attr($value); ?>" 
        class="widefat" 
        placeholder="https://example.com/project-link"
    />
    <p class="description">Enter an external or custom link for this project.</p>
    <?php
}

// === Save meta box data ===
function portfolio_save_custom_url_meta_box($post_id) {
    if (array_key_exists('custom_project_url_field', $_POST)) {
        update_post_meta(
            $post_id,
            '_custom_project_url',
            sanitize_text_field($_POST['custom_project_url_field'])
        );
    }
}
add_action('save_post_portfolio', 'portfolio_save_custom_url_meta_box');


// === 2. Enqueue JS for AJAX ===
function portfolio_ajax_scripts() {
    wp_enqueue_script(
        'portfolio-ajax',
        get_stylesheet_directory_uri() . '/assets/js/portfolio-ajax.js',
        ['jquery'],
        null,
        true
    );

    wp_localize_script('portfolio-ajax', 'ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php')
    ]);
}
add_action('wp_enqueue_scripts', 'portfolio_ajax_scripts');


// === 3. AJAX Handler (Backend) ===
function load_portfolio_projects_ajax() {
    $term_slug = sanitize_text_field($_POST['term']);

    $query = new WP_Query([
        'post_type' => 'portfolio',
        'tax_query' => [
            [
                'taxonomy' => 'project-category',
                'field' => 'slug',
                'terms' => $term_slug
            ]
        ]
    ]);

    if ($query->have_posts()) {
        echo '<div class="row">';
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
               <div class="card h-100 shadow-sm">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', ['class' => 'card-img-top']); ?>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        <a href="<?php 
                            // Get custom URL from meta field 'custom_project_url'
                            $custom_url = get_post_meta(get_the_ID(), 'custom_project_url', true);

                            // If custom URL exists, use it; otherwise fallback to default permalink
                            echo $custom_url ? esc_url($value) : get_permalink();
                        ?>" class="btn btn-outline-primary btn-sm mt-2" target="_blank">
                            View Project
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }
        echo '</div>';
    } else {
        echo '<p>No projects found.</p>';
    }

    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_load_portfolio_projects', 'load_portfolio_projects_ajax');
add_action('wp_ajax_nopriv_load_portfolio_projects', 'load_portfolio_projects_ajax');

// ============================
//  SEO META TAGS GENERATOR
// ============================

function portfolio_seo_meta_tags() {
    if ( is_singular() ) {
        global $post;
        $title       = get_the_title( $post->ID );
        $description = wp_strip_all_tags( get_the_excerpt( $post->ID ) );
        $url         = get_permalink( $post->ID );

        // Featured image or fallback
        if ( has_post_thumbnail( $post->ID ) ) {
            $image = get_the_post_thumbnail_url( $post->ID, 'full' );
        } else {
            $image = get_stylesheet_directory_uri() . '/assets/img/default-thumbnail.jpg';
        }

        // Open Graph & Twitter meta
        echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
        echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
        echo '<meta property="og:type" content="article">' . "\n";
        echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
        echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";

        // Twitter Card
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">' . "\n";
        echo '<meta name="twitter:image" content="' . esc_url( $image ) . '">' . "\n";
    } 
    else {
        // Fallback for homepage or archives
        echo '<meta name="description" content="' . get_bloginfo('description') . '">' . "\n";
        echo '<meta property="og:title" content="' . get_bloginfo('name') . '">' . "\n";
        echo '<meta property="og:description" content="' . get_bloginfo('description') . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:url" content="' . esc_url( home_url() ) . '">' . "\n";
        echo '<meta property="og:image" content="' . esc_url( get_stylesheet_directory_uri() . '/assets/img/default-thumbnail.jpg' ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'portfolio_seo_meta_tags', 5 );

// ============================
// REGISTER SIDEBAR WIDGET AREA
// ============================
function portfolio_register_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'portfolio' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets added here will appear in the blog sidebar.', 'portfolio' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s card mb-4 shadow-sm" itemscope itemtype="https://schema.org/WebPageElement"><div class="card-body">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<h2 class="card-title h5">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'portfolio_register_sidebar' );


// ===========================
// CUSTOM FEATURED PLUGINS WIDGET
// ===========================
class Featured_Plugins_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'featured_plugins_widget',
            __('Featured Plugins', 'portfolio'),
            array( 'description' => __( 'Display your featured WordPress plugins.', 'portfolio' ) )
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        $title = apply_filters( 'widget_title', $instance['title'] ?? 'Featured Plugins' );
        $plugins = explode( "\n", $instance['plugins'] ?? '' );

        if ( ! empty( $title ) ) {
            echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
        }

        if ( ! empty( $plugins ) ) {
            echo '<ul class="list-unstyled mb-0">';
            foreach ( $plugins as $plugin ) {
                $plugin = trim( $plugin );
                if ( ! empty( $plugin ) ) {
                    echo '<li><a href="#">' . esc_html( $plugin ) . '</a></li>';
                }
            }
            echo '</ul>';
        }

        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = $instance['title'] ?? 'Featured Plugins';
        $plugins = $instance['plugins'] ?? "Duplicator\nWPForms\nSeedProd";
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'plugins' ); ?>">Plugins (one per line):</label>
            <textarea class="widefat" rows="5" id="<?php echo $this->get_field_id( 'plugins' ); ?>" name="<?php echo $this->get_field_name( 'plugins' ); ?>"><?php echo esc_textarea( $plugins ); ?></textarea>
        </p>
        <?php
    }
}

// ===========================
// CUSTOM SUBSCRIBE WIDGET
// ===========================
class Subscribe_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'subscribe_widget',
            __('Subscribe Form', 'portfolio'),
            array( 'description' => __( 'Display a simple subscribe form.', 'portfolio' ) )
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        $title = apply_filters( 'widget_title', $instance['title'] ?? 'Subscribe' );
        $desc = $instance['desc'] ?? 'Get weekly WordPress tips straight to your inbox.';

        if ( ! empty( $title ) ) {
            echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
        }
        echo '<p>' . esc_html( $desc ) . '</p>';
        ?>
        <form>
            <label for="subscribe-email" class="visually-hidden">Email address</label>
            <input type="email" id="subscribe-email" class="form-control mb-2" placeholder="Your email" required>
            <button class="btn btn-primary w-100">Subscribe</button>
        </form>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = $instance['title'] ?? 'Subscribe';
        $desc = $instance['desc'] ?? 'Get weekly WordPress tips straight to your inbox.';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'desc' ); ?>">Description:</label>
            <textarea class="widefat" rows="3" id="<?php echo $this->get_field_id( 'desc' ); ?>" name="<?php echo $this->get_field_name( 'desc' ); ?>"><?php echo esc_textarea( $desc ); ?></textarea>
        </p>
        <?php
    }
}

// ===========================
// REGISTER BOTH CUSTOM WIDGETS
// ===========================
function portfolio_register_custom_widgets() {
    register_widget( 'Featured_Plugins_Widget' );
    register_widget( 'Subscribe_Widget' );
}
add_action( 'widgets_init', 'portfolio_register_custom_widgets' );

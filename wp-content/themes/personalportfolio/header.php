<?php
/**
 * Header template for Personal Portfolio theme
 *
 * Displays <head></head> section and navigation
 *
 * @package Personal Portfolio
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta Description -->
    <meta name="description" content="<?php echo is_singular() ? get_the_excerpt() : get_bloginfo('description'); ?>">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-touch-icon.png">

    <!-- Google Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- WordPress Head -->
    <?php wp_head(); ?>

    <!-- Schema.org Structured Data (Organization) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "<?php bloginfo('name'); ?>",
      "url": "<?php echo home_url(); ?>",
      "logo": "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png"
    }
    </script>
</head>

<body <?php body_class(); ?> data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="90">

    <!-- Navbar Section -->
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg fixed-top py-1" aria-label="Main Navigation">
            <div class="container">
                <a class="navbar-brand navbar-logo" href="<?php echo home_url(); ?>">
                    <div style="display: flex; align-items: center; font-family: 'Poppins', sans-serif; color: #333;">
                        <span style="font-size: 1.8rem; color: #007bff; margin-right: 8px;">&#x3C;/&#x3E;</span>
                        <span style="font-size: 1.2rem; font-weight: 600;">Vivek Saini</span>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav menu-navbar-nav',
                        'fallback_cb'    => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ));
                    ?>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar Section End -->
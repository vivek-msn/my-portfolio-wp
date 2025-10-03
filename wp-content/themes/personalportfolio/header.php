<?php
/**
 * The header of our theme
 * 
 * This template displays all <head></head> section
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Personal Portfolio
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>

    <!-- FAVICON -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" type="image/png">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="90">

    <!-- Navbar section  -->
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg fixed-top py-1">
            <div class="container">
              <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="logo" class="img-fluid">
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav menu-navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <!-- Navbar section exit  -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
</head>

<body>
<!-- Custom Navigation -->
<header class="site-header">
    <div class="">
        <div class="container">
            <div class="row header-container">
                <div class="col-md-2 col-7 order-md-first header-branding">
                    <a class="site-logo" href="/">
                        <img class="site-logo-Soff" src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoLight.png" alt="Mwyar">
                        <img class="site-logo-Son" src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoBlue.png" alt="Mwyar">
                    </a>    
                </div>

                <nav class="col-md-8 col-2 order-first main-navigation" id="main-navigation">
                    <button class="menu-toggle" id="menu-toggle" aria-expanded="false" aria-controls="primary-menu">
                        <span class="menu-toggle-bar"></span>
                        <span class="menu-toggle-bar"></span>
                        <span class="menu-toggle-bar"></span>
                        <span class="screen-reader-text">Menu</span>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav-menu Dana-Regular',
                        'container'      => false,
                        'fallback_cb'    => 'wp_page_menu',
                        'depth'          => 3
                    ));
                    ?>
                </nav>

                <div class="col-md-2 col-3 order-last d-flex justify-content-end">
                    <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ); ?>"  class="buttonTroy Dana-Bold" >تماس با ما</a>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="content" class="site-content">
    <div>
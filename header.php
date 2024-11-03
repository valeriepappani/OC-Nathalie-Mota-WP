<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/theme.css">
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav class="nathaliemota-nav-primary">
        <div class="logo">
            <?php
            // Affiche le logo
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <?php
        // Affiche le menu
        wp_nav_menu(array(
            'theme_location' => 'primary', 
            'menu_class' => 'nav-menu nathaliemota_nav',
        ));
        ?>
    </nav>
</header>

        <script>
        document.getElementById("mobile-menu").addEventListener("click", function() {
            this.classList.toggle("active"); // Ajoute ou retire la classe active
            const navMenu = document.querySelector(".nav-menu");
            navMenu.classList.toggle("active"); // Affiche ou cache le menu
        });

        </script>

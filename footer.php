<footer>
    <div class="footer-content">
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_class' => 'footer-menu', // Classe CSS pour le menu, si nécessaire
                'fallback_cb' => false // Empêche l'affichage d'un menu par défaut si aucun menu n'est assigné
            ));
            ?>
        </nav>
    </div>
</footer>

<footer>
    <div id="scrollUp">
        <a href="#"><img src="/wp-content/uploads/2021/10/prev.svg"/></a>
    </div>

    <div class="barre-separation"></div>

    <div class="container-m">
        <div class="newsletter">
            <div style="position: relative">
                <span class="newsletter-titre">Newsletter</span>
                <img class="enveloppe" src="/wp-content/uploads/2021/09/enveloppe.svg" alt="">
            </div>
            
            <p class="texte-inscription">Inscrivez-vous à la newsletter pour recevoir chaque mois un condensé des nouvelles de l'atelier.</p>
            <?php echo do_shortcode('[mc4wp_form id="184"]'); ?>
        </div>

        <a href="<?php echo home_url( '/' ); ?>">
            <img class="logo-footer" src="/wp-content/uploads/2021/09/logo-noir.svg" alt="Logo footer">
        </a>

        <div class="reseaux-contact">
            <a class="social" href="https://www.facebook.com/seve.mobilier" target="_blank" style="padding:0px 5px"><img src="/wp-content/uploads/2021/10/facebook.svg" alt="Icône Facebook"></a>
            <a class="social" href="https://fr.linkedin.com/company/le-bois-de-deux-mains" target="_blank"><img src="/wp-content/uploads/2021/10/linkedin.svg" alt="Icône Linkedin"></a>
            <a class="social" href="https://www.instagram.com/seve.mobilier/?hl=fr" target="_blank"><img src="/wp-content/uploads/2021/10/instagram.svg" alt="Icône Instagram"></a>
            <a class="cta" href="<?php echo site_url().'/contact' ?>">Nous contacter</a>
        </div>

        <div class="menu-footer"><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?></div>

        <p class="copyright">2015-2021 - SEVE - 
            <a href="<?php echo site_url().'/plan-de-site' ?>">Plan du site</a> - 
            <a href="<?php echo site_url().'/mentions-legales' ?>">Mentions légales</a> - 
            <a href="<?php echo site_url().'/faq' ?>">FAQ</a></p>
    </div> 
    
</footer>
  
<?php wp_footer(); ?>

</body>
</html>
<?php get_header(); ?>

<div class="container-s page404">
    <img src="<?php echo site_url().'/wp-content/uploads/2021/09/page404.jpg' ?>" alt="Erreur 404">
    <p>Oups ! La page que vous recherchez a sûrement déjà été recyclée !</p>
    <a class="cta" href="<?php echo home_url( '/' ); ?>">Retourner à l'accueil</a>
</div>

<?php get_footer(); ?>
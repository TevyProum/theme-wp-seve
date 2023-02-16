<?php get_header(white); ?>

<!-- Entete -->
<div class="container-xl" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo site_url().'/wp-content/uploads/2021/09/P1000343-scaled.jpg' ?>); background-position: center">
    <div class="container-m hero">
        <span class="categorie">Mobilier</span>
        <div class="separateur-categorie"></div>
        <h1>Nos réalisations</h1>
        <p class="sous-titre">Nous produisons des meubles écoconçus sur mesure ou en moyenne série. <br>Professionnels, collectivités, particuliers : parlez-nous de votre projet !</p>
        <a class="cta transparent center" href="#content">Découvrir nos réalisations</a>
    </div>
    <div id="content"></div>
</div>

<!-- Toutes les réalisations + pagination -->
<div class="container-m flex liste-pdts">
    
    <?php 
    $post_type = $args['post_type'];
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    global $wp_query;
    $original_query = $wp_query;

    $query_args = array(
        'post_type' => 'realisations',
        'posts_per_page' => 6,
        'paged' => $paged
    );

    $custom_post_type = new WP_Query( $query_args );
    $wp_query = $custom_post_type;

    if ( $custom_post_type->have_posts() ) : 
        while ( $custom_post_type->have_posts() ) : $custom_post_type->the_post(); ?>
            <div class="container-realisations">
                <a href="<?php the_permalink(); ?>">
                    <div class="image-realisations"><?php the_post_thumbnail(); ?></div>
                    <div class="overlay-realisations">
                        <div class="flex">
                            <div><h5>Date</h5><?php the_field('date_de_la_realisation'); ?></div>
                            <div><h5>Client</h5><?php the_field('nom_du_client'); ?></div>
                        </div>
                        <div class="cta">Voir la réalisation</div>
                    </div>
                    <h2 style="font-size: 20px; margin-bottom: 50px;"><?php the_title(); ?></h2>
                </a>
            </div>
        <?php endwhile;
    endif ?>
</div>
    <?php the_posts_pagination(); 
        wp_reset_postdata(); ?>

  <!-- Section "Plus de mobilier" -->
    <div class="container-m realisations plus-de-mobilier">
        <span class="categorie">Mobilier</span>
        <div class="separateur-categorie"></div>
        <h2>Plus de mobilier</h2>
            <div class="flex autres-pdts">
                <div class="container-autres-pdts survol">
                    <a href="<?php echo site_url().'/produits' ?>">
                    <img class="arrondi" src="<?php echo site_url().'/wp-content/uploads/2021/09/IMG_4296-scaled.jpg' ?>" alt="Notre gamme">
                    <div class="gradient"></div>
                    <h3 class="titre-autres-pdts">Notre gamme</h3>
                    </a>
                </div>
                <div class="container-autres-pdts survol">
                    <a href="<?php echo site_url().'/showroom' ?>">
                    <img class="arrondi" src="<?php echo site_url().'/wp-content/uploads/2021/09/showroom-plusdemobilier.jpg' ?>" alt="Le showroom">
                    <div class="gradient"></div>
                    <h3 class="titre-autres-pdts">Notre showroom</h3>
                    </a>
                </div>
            </div>
    </div>

<!-- Section "Envie de travailler avec nous ?" -->
<div class="renseignements">
    <div class="container-s realisations">
        <h3 style="font-size: 32px;">Envie de travailler avec nous ?</h3>
        <p>Ecrivez-nous pour nous parler de votre projet, pour obtenir des renseignements sur notre atelier, pour nous donner de la matière première ou pour nous parler de la météo. 
                                    On a hâte de vous lire !</p>
        <a class="cta center" href="<?php echo site_url().'/contact' ?>">Nous contacter</a>
    </div>
</div>

<?php get_footer(); ?>
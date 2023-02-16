<?php get_header(); ?>

<!-- Entete -->
<div class="container-m entete">
    <span class="categorie">Mobilier</span>
    <div class="separateur-categorie"></div>
    <h1>Notre gamme</h1>
    <p class="sous-titre">Une gamme contemporaine aux lignes chaleureuses : découvrez notre collection de meubles en réemploi pour meubler vos bureaux et intérieurs.</p>
</div>

<!-- Tous les produits + pagination -->
<div class="container-m flex liste-pdts">
    

<?php 
    $post_type = $args['post_type'];
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    global $wp_query;
    $original_query = $wp_query;

    $query_args = array(
        'post_type' => 'produits',
        'posts_per_page' => 6,
        'paged' => $paged
    );

    $custom_post_type = new WP_Query( $query_args );
    $wp_query = $custom_post_type;
    
    if ( $custom_post_type->have_posts() ) : 
        while ( $custom_post_type->have_posts() ) : $custom_post_type->the_post(); ?>
            <div class="container-pdt">
                <a href="<?php the_permalink(); ?>">
                    <div class="image-mobilier"><?php the_post_thumbnail(); ?></div>
                    <div class="titre-produit">
                        <div class="cat"><?php the_terms( $post->ID, 'categories'); ?></div>
                        <a href="<?php the_permalink(); ?>"><h2 style="font-size: 20px; margin-top: 0px;"><?php the_title(); ?></h2></a>
                    </div>
                </a>
            </div>
        <?php endwhile;
    endif; ?>
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
                    <a href="<?php echo site_url().'/realisations' ?>">
                    <img class="arrondi" src="<?php echo site_url().'/wp-content/uploads/2021/09/realisations-plusdemobilier.jpg' ?>" alt="Nos réalisations">
                    <div class="gradient"></div>
                    <h3 class="titre-autres-pdts">Nos réalisations</h3>
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
<?php
get_header();
?>

    <!-- Section "Entete + slider" -->
    <div class="container-s realisations">
        <span class="categorie">Mobilier - <a href="<?php echo site_url().'/produits' ?>">Notre gamme</a></span>
        <div class="separateur-categorie"></div>
        <h1><?php the_title(); ?></h1>
        <p class="sous-titre"><?php the_field('sous-titre-pdt') ?></p>
    </div>

    <!-- Section "Image/Slider" -->
    <?php  
        $images = get_field('slider');
        if( $images ): ?>
        <div class="single-item">
                    <?php foreach( $images as $image ): ?>
                        <div>
                            <img data-lazy="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div>
                    <?php endforeach; ?>
            </div>
        <?php endif; ?>


    <!-- Section "Description" -->
    <div class="container-m flex reverse">
        <div class="demi-texte">
            <span class="categorie">Description</span>
            <h3><?php the_field('titre_de_la_description_pdt') ?></h3>
            <p><?php the_field('description_pdt') ?></p>
            <a class="cta creation" href="<?php echo site_url().'/association' ?>">Découvrez notre processus de création</a>
        </div>

       <!-- Tableau d'informations -->
       <div>
            <span class="categorie" style="color:#7EB02B">Informations</span>
                <?php
                    if( have_rows('tableau_info_pdt') ):
                        while( have_rows('tableau_info_pdt') ) : the_row(); ?>
                            <div class="tab-flex">
                            <div class="picto">
                                    <?php $image = get_sub_field('pictogramme-pdt');
                                        $size = 'full'; 
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        } ?>
                                </div>
                                <div class="tab-contenu">
                                    <div class="info-header"><?php the_sub_field('titre_info_pdt') ?></div>
                                    <div class="info-content"><?php the_sub_field('description_info_pdt') ?></div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; ?>
        </div>
    </div>

    <!-- Section "Intéressé?" -->
    <div class="container-m realisations single-content">
        <h3>Vous êtes intéressé par ce produit ?</h3>
        <p>Faites-nous part de vos envies, ensemble nous leur donnerons vie !</p>
        <a class="cta center" href="<?php echo site_url().'/contact' ?>">Nous contacter</a>
    </div>

    <!-- Section "Nos autres réalisations" -->
    <div class="container-m">
        <h2 class="titre-autres-rea">Nos autres produits</h2>

        <div class="other-products">
            <?php 
                 $args = array(
                    'post_type' => 'produits',
                    'showposts' => -1, 
                );
                $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post(); ?>
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
                    endif;
                wp_reset_postdata(); ?>
        </div>
    </div>

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


<?php
get_footer();
<?php get_header('white');


if( have_rows('composants_pages') ):
    while ( have_rows('composants_pages') ) : the_row();
        if( get_row_layout() == 'hero' ):
            get_template_part('composants/hero');
        endif;
    endwhile;
endif; ?>

<div class="menu-secondaire"><?php wp_nav_menu( array( 'theme_location' => 'atelier' ) ); ?></div>

<?php if( have_rows('composants_pages') ):
    while ( have_rows('composants_pages') ) : the_row(); ?>

        <div id="savoir-faire">
            <?php if( get_row_layout() == 'bloc-fond-uni' ):
                get_template_part('composants/bloc-fond-uni'); ?>
        </div>

        <?php elseif( get_row_layout() == 'slider-atelier' ):
            get_template_part('composants/slider-atelier'); ?>

        <?php elseif( get_row_layout() == 'bloc-fond-image' ):
            get_template_part('composants/bloc-fond-image'); ?>

        <?php endif;
    endwhile;
endif; ?>
 
 <!-- Section "Autres catégories" -->
 <div class="container-m realisations">
     <span class="categorie">Mobilier</span>
     <div class="separateur-categorie"></div>
     <h2>Autres catégories</h2>
         <div class="flex autres-pdts">
             <div style="position: relative">
                 <a href="<?php echo site_url().'/realisations' ?>">
                 <img class="arrondi" src="<?php echo site_url().'/wp-content/uploads/2021/09/realisations-plusdemobilier.jpg' ?>" alt="Nos réalisations">
                 <h3 class="titre-autres-pdts">Nos réalisations</h3>
                 </a>
             </div>
             <div style="position: relative">
             <!-- <a href="<?php echo site_url().'/produits' ?>"> -->
                 <img class="arrondi a-venir" src="<?php echo site_url().'/wp-content/uploads/2021/09/gamme-plusdemobilier.jpg' ?>" alt="Notre gamme">
                 <h3 class="titre-autres-pdts">à venir - Notre gamme</h3>
                 </a>
             </div>
         </div>
 </div>
 
 <?php get_footer();
<?php
/*
Template Name: Page composants
*/
  
if(is_single() || is_page(57) || is_page(94) || is_page(54) || is_page(547)) {
 get_header();
} else {
 get_header('white');
}
 wp_head();

 
if( have_rows('composants_pages') ):
 
   while ( have_rows('composants_pages') ) : the_row();
 
       if( get_row_layout() == 'hero' ):
 
           get_template_part('composants/hero');
 
       elseif( get_row_layout() == 'entete' ):
 
           get_template_part('composants/entete');
 
       elseif( get_row_layout() == 'texte' ):
 
           get_template_part('composants/texte');

        elseif( get_row_layout() == 'contact' ):
 
            get_template_part('composants/contact');
        
        elseif( get_row_layout() == 'accordeon' ):
 
            get_template_part('composants/accordeon');

        elseif( get_row_layout() == 'image-droite' ):
 
            get_template_part('composants/image-droite');

        elseif( get_row_layout() == 'image-gauche' ):
 
            get_template_part('composants/image-gauche');

        elseif( get_row_layout() == 'bloc-fond-uni' ):
 
            get_template_part('composants/bloc-fond-uni');

        elseif( get_row_layout() == 'bloc-fond-image' ):
 
            get_template_part('composants/bloc-fond-image');
            
        elseif( get_row_layout() == 'bloc-repeteur' ):
 
            get_template_part('composants/bloc-repeteur');

        elseif( get_row_layout() == 'autres-produits' ):
 
            get_template_part('composants/autres-produits');

        elseif( get_row_layout() == 'map' ):
 
            get_template_part('composants/map');

        elseif( get_row_layout() == 'equipe' ):
 
            get_template_part('composants/equipe');

        elseif( get_row_layout() == 'projet' ):
 
            get_template_part('composants/projet');

        elseif( get_row_layout() == 'slider-atelier' ):
 
            get_template_part('composants/slider-atelier');
        
        elseif( get_row_layout() == 'slider-association' ):
 
            get_template_part('composants/slider-association');

        elseif( get_row_layout() == 'showroom-slider' ):
 
            get_template_part('composants/showroom-slider');
 
       endif;
 
   endwhile;
 
endif;
 

get_footer();

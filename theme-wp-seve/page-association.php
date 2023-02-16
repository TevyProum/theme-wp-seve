<?php get_header('white');


if( have_rows('composants_pages') ):
    while ( have_rows('composants_pages') ) : the_row();
        if( get_row_layout() == 'hero' ):
            get_template_part('composants/hero');
        endif;
    endwhile;
 endif;?>

 <div class="menu-secondaire"><?php wp_nav_menu( array( 'theme_location' => 'association' ) ); ?></div>

<?php if( have_rows('composants_pages') ):
    while ( have_rows('composants_pages') ) : the_row(); ?>

        <div id="social">
        <?php if( get_row_layout() == 'texte' ):
            get_template_part('composants/texte'); ?>

        <?php elseif( get_row_layout() == 'slider-association' ):
            get_template_part('composants/slider-association'); ?>
        </div>
        
        <div id="environnemental">
        <?php elseif( get_row_layout() == 'image-gauche' ):
             get_template_part('composants/image-gauche'); ?>
        </div>

        <div id="economique">
        <?php elseif( get_row_layout() == 'image-droite' ):
             get_template_part('composants/image-droite'); ?>
        </div>

        <?php elseif( get_row_layout() == 'equipe' ):
             get_template_part('composants/equipe'); ?>

        <div id="projet">
        <?php elseif( get_row_layout() == 'projet' ): 
           get_template_part('composants/projet'); ?>
        </div>
  
        <?php endif;
    endwhile;
 endif;
 
 
 get_footer();
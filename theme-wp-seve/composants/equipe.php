<div id="membre-equipe" class="container-l" style="margin-bottom: 110px;">
    <div style="text-align: center; margin-top: 20px;"><span class="categorie"><?php the_sub_field('categorie') ?></span></div>
    <div class="separateur-categorie" style="text-align: center;"></div>
    <h2 style="text-align: center; max-width: 700px; margin: 30px auto;"><?php the_sub_field('titre') ?></h2>

    <?php if( have_rows('chiffres') ): ?>
        <div class="flex equipe">
            <?php while( have_rows('chiffres') ): the_row(); ?>
                <div class="col-chiffre">
                    <div class="chiffre"><?php the_sub_field('chiffre') ?></div>
                    <span class="equipe"><?php the_sub_field('texte_sous_chiffre') ?></span>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
            
        <?php if( have_rows('membre') ): ?>
            <div class="slide-equipe">
                <?php while ( have_rows('membre') ) : the_row();?>
                    <div class="">
                        <img class="arrondi" src="<?php the_sub_field('photo') ?>">
                        <div class="equipe-nom"><?php the_sub_field('prenom') ?> <?php the_sub_field('nom') ?></div>
                        <div class="equipe-position"><?php the_sub_field('position') ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <div class="container-m" style="margin: 40px">
            <img class="arrondi" src="<?php the_sub_field('image_pleine_largeur') ?>">
            <p><?php the_sub_field('texte') ?></p>
        </div>
</div>


    
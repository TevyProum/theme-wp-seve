<div class="container-m">
        
    <h3 style="text-align: center"><?php the_sub_field('titre_principal') ?></h3>

    <?php if( have_rows('repeteur') ): ?>
        <div class="flex">
            <?php while( have_rows('repeteur') ): the_row(); ?>
                <div class="repeteur">
                    <div><img class="arrondi" src="<?php the_sub_field('image') ?>"></div>
                    <h5><?php the_sub_field('titre') ?></h5>
                    <p><?php the_sub_field('sous-titre') ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>
<div id="creation" class="container-l" style="padding-top: 80px">

    <div class="entete">
        <span class="categorie">L'atelier</span>
        <div class="separateur-categorie"></div>
        <h2><?php the_sub_field('titre') ?></h2>
    </div>

    <?php if( have_rows('slider') ): ?>
        <div class="atelier-slide">
            <?php $project_counter = 1;
            while ( have_rows('slider') ) : the_row();?>
                <div>
                    <div style="position: relative">
                        <img class="arrondi" data-lazy="<?php the_sub_field('image') ?>">
                        <div class="gradient-atelier"></div>
                        <div class="texte-atelier">
                            <span>Etape <?php echo $project_counter; ?></span>
                            <h3><?php the_sub_field('titre') ?></h3>
                        </div>
                    </div>
                    <p><?php the_sub_field('texte') ?></p>
                </div>
            <?php 
            $project_counter++; 
            endwhile; ?>
        </div>
    <?php endif; ?>
</div>
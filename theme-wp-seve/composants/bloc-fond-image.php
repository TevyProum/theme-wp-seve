<div id="matiere" class="container-xl" style="background-color: #F8F7F5; background-size: contain; background-repeat: no-repeat; background-position: center;">
    <img class="atelier-fond" src="<?php the_sub_field('background') ?>">

    <div class="container-m" style="margin: 100px auto">

        <!-- 1ère partie -->
        <?php if( have_rows('partie1') ): ?>
            <?php while( have_rows('partie1') ): the_row(); ?>
                <div class="flex atelier">
                    <div class="image"><img class="arrondi" src="<?php the_sub_field('image_gauche') ?>"></div>
                    <div class="atelier-texte">
                        <h2><?php the_sub_field('titre_droite') ?></h2>
                        <p><?php the_sub_field('texte_droite') ?></p>
                        <div>
                            <?php $link = get_sub_field('cta_droite');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="cta bloc" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <div id="design">
        <!-- 2ème partie -->
        <?php if( have_rows('partie2') ): ?>
            <?php while( have_rows('partie2') ): the_row(); ?>
                <div class="flex atelier reverse">
                    <div class="atelier-texte">
                        <h2><?php the_sub_field('titre_gauche') ?></h2>
                        <p><?php the_sub_field('texte_gauche') ?></p>
                        <div>
                            <?php $link = get_sub_field('cta_gauche');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="cta bloc" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="image"><img class="arrondi" src="<?php the_sub_field('image_droite') ?>"></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
        
    </div>
</div>
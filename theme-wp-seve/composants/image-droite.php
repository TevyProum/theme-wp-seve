<div class="container-m">
    <div class="flex reverse-one">

        <div class="demi">
            <?php if (get_sub_field('categorie')): ?>
                    <span class="categorie"><?php the_sub_field('categorie') ?></span>
                    <div class="separateur-categorie left"></div>
            <?php endif; ?>

            <?php if (get_sub_field('titre_h2')): ?>
                <h2><?php the_sub_field('titre_h2') ?></h2>
            <?php endif; ?>

            <?php if (get_sub_field('titre_h3')): ?>
                <h3><?php the_sub_field('titre_h3') ?></h3>
            <?php endif; ?>

            <p><?php the_sub_field('texte') ?></p>
            
            <?php if (get_sub_field('cta')): ?>
            <div>
                <?php $link = get_sub_field('cta');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="cta bloc" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>

        <div>
            <div class="image"><img class="arrondi" src="<?php the_sub_field('image') ?>"></div>

            <!-- Page Association -->
            <?php if (get_sub_field('texte_fond')): ?>
                <div class="texte_fond"><?php the_sub_field('texte_fond') ?></div>
            <?php endif; ?>
        </div>
        
    </div>
</div>
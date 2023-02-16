<div class="container-xl" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_sub_field('image')?>'); background-position: center">

    <div class="container-m hero">
        <span class="categorie"><?php the_sub_field('categorie') ?></span>
        <div class="separateur-categorie"></div>

        <h1><?php the_sub_field('titre') ?></h1>

        <p class="sous-titre"><?php the_sub_field('sous-titre') ?></p>
        
        <div>
            <?php $link = get_sub_field('cta');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="cta transparent center" href="#content" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>

    <div id="content"></div>
</div>
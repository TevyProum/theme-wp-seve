<div class="container-l projet">
    <div style="text-align: center; margin-top: 20px;"><span class="categorie"><?php the_sub_field('categorie') ?></span></div>
    <div class="separateur-categorie" style="text-align: center;"></div>
    <h2 style="text-align: center; max-width: 700px; margin: 30px auto;"><?php the_sub_field('titre') ?></h2>
    <p style="text-align: center; max-width: 960px; margin: auto;"><?php the_sub_field('texte') ?></p>
            
    <?php if( have_rows('paragraphe') ): ?>
        <div class="flex">
            <?php while( have_rows('paragraphe') ): the_row(); ?>
                <div class="paragraphe">
                    <div class="icones-flex">
                        <?php $image = get_sub_field('pictogramme');
                            $size = 'full'; 
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            } ?>
                        <h5><?php the_sub_field('titre') ?></h5>
                    </div>
                    <div><?php the_sub_field('texte') ?></div>
                    <div class="icones-flex">
                        <div>
                            <?php 
                            $link = get_sub_field('cta');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                        <?php if (get_sub_field('cta_2')): ?>
                            <div>
                                <?php 
                                $link = get_sub_field('cta_2');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>
<div class="container-m flex">

    <div class="container-xs">
        <h3><?php the_sub_field('titre') ?></h3>
        <p><?php the_sub_field('texte') ?></p>
    </div> 

    <div>
        <?php  
            $images = get_sub_field('slider');
            if( $images ): ?>
            <div class="single-item slide-atelier">
                <?php foreach( $images as $image ): ?>
                    <div>
                        <img data-lazy="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

</div>

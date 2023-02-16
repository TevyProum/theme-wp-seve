<div class="container-xl">
    <!-- Section "Image/Slider" -->
    <?php  
        $images = get_sub_field('slider');
        if( $images ): ?>
        <div class="association-slide">
            <?php foreach( $images as $image ): ?>
                <div>
                    <img class="arrondi" data-lazy="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

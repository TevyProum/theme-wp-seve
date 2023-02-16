<div class="container-s">
    <?php
    if( have_rows('accordion_repeater') ):
        while ( have_rows('accordion_repeater') ) : the_row();
            
            $header = get_sub_field('accordion_header');
            $content = get_sub_field('accordion_content'); ?>
        
            <button class="accordion"><?php echo $header; ?></button>
            <div class="panel">
            <p><?php echo $content; ?></p>
            </div>    
            <?php
        endwhile; 
    endif; ?>
</div>
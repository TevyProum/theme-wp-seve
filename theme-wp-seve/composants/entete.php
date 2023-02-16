<div class="container-m entete">

        <?php if (get_sub_field('categorie')): ?>
                <span class="categorie"><?php the_sub_field('categorie') ?></span>
                <div class="separateur-categorie"></div>
        <?php endif; ?>

        <h1><?php the_sub_field('titre') ?></h1>

        <?php if (get_sub_field('sous-titre')): ?>
                <p class="sous-titre"><?php the_sub_field('sous-titre') ?></p>
        <?php endif; ?>

</div>

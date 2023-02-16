<div class="container-m map">

    <div class="flex">
        <div class="flex-map">
            <?php echo do_shortcode(get_sub_field('google_maps')); ?>
        </div>

        <div class="flex-map">
            <h3><?php the_sub_field('titre') ?></h3>
            <p><?php the_sub_field('texte') ?></p>

            <div class="champ1 icones-flex">
                <img src="/wp-content/uploads/2021/09/localisation.svg">
                <div>
                    <h5>Adresse</h5>
                    <span><?php the_sub_field('adresse') ?></span>
                </div>
            </div>
            <div class="champ2 icones-flex">
                <img src="/wp-content/uploads/2021/09/heures.svg">
                <div>
                    <h5>Horaires d'ouverture</h5>
                    <span><?php the_sub_field('horaires_douverture') ?></span>
                </div>
            </div>
            <div class="champ3 icones-flex">
                <img src="/wp-content/uploads/2021/09/telephone.svg">
                <div>
                    <h5>Téléphone</h5>
                    <span><?php the_sub_field('telephone') ?></span>
                </div>
            </div>
        </div>

    </div>

</div>
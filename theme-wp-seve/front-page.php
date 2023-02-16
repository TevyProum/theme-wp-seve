<div class="container-xl" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php the_field('hero_image'); ?>); background-size: cover; background-position: center">
    <?php get_header('white'); ?>
        <div class="container-l white">
            <div style="max-width:650px; padding: 80px 0px 120px 0px">
                    <h1>Achetez plus qu’un meuble</h1>
                    <h2>Mobilier design et recyclé</h2>
                    <p class="white">SEVE est un atelier spécialisé dans la conception et la réalisation de mobiliers de qualité à partir de matières recyclées. 
                    Il emploie une majorité de salariés en parcours d’insertion professionnelle.</p>
                    <a href="#content" class="cta transparent">Découvrir Seve</a>
            </div>
        </div>
        <div id="content"></div>
</div>


<div class="container-xl">
    <?php  
        $images = get_field('hero_slider');
        if( $images ): ?>
        <div class="hero-slider">
            <?php foreach( $images as $image ): ?>
                <div>
                    <img data-lazy="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>


<div class="container-l" style="margin-top: 60px;">
    <?php if( have_rows('mobilier_copie') ): ?>
        <?php while( have_rows('mobilier_copie') ): the_row(); ?>
            <div class="entete">
                <span class="categorie">Mobilier</span>
                <div class="separateur-categorie"></div>
                <h2><?php the_sub_field('titre') ?></h2>
                <p><?php the_sub_field('texte') ?></p>
            </div>

            <div class="atelier-slide">
<?php if( have_rows('categorie') ): ?>
            <?php $project_counter = 1;
            while ( have_rows('categorie') ) : the_row();?>
                <?php if( get_sub_field('lien_de_la_categorie') ): ?><a href="<?php the_sub_field('lien_de_la_categorie') ?>"><?php endif; ?>
                <div class="hp-categorie">
                   <div class="hp-img-overlay"><img data-lazy="<?php the_sub_field('image') ?>"><div class="gradient"></div></div>
                       <span class="hp-chiffre-overlay">0<?php echo $project_counter; ?></span>
                       <h3 class="hp-titre-overlay"><?php the_sub_field('titre') ?></h2>
                       <div class="overlay">
                           <p class="hp-texte-overlay"><?php the_sub_field('texte'); ?></p>
                           <div class="hp-cta-overlay"><?php the_sub_field('texte-lien'); ?></div>
                    </div>
                    </div>
                </a>
            <?php 
            $project_counter++; 
            endwhile; ?>
    <?php endif; ?>
    </div>
    
    <?php endwhile; ?>
    <?php endif; ?>
</div>


<div class="container-xl" style="background-color: #F8F7F5; background-size: contain; background-repeat: no-repeat; background-position: center;">
    <img class="atelier-fond" src="/wp-content/uploads/2021/10/tree_rings_vector_trace_9-Converti-1.png">
    <div class="container-m flex">
        <?php if( have_rows('latelier') ): ?>
            <?php while( have_rows('latelier') ): the_row(); ?>
                <div class="container-xs">
                    <span class="categorie">L'atelier</span>
                    <div class="separateur-categorie left"></div>
                    <h2><?php the_sub_field('titre') ?></h2>
                    <p><?php the_sub_field('texte') ?></p>
                    <a href="<?php echo site_url().'/atelier' ?>" class="cta bloc">Découvrir l'atelier</a>
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

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>


<div class="container-xl">
    <?php if( have_rows('lassociation') ): ?>
        <?php while( have_rows('lassociation') ): the_row(); ?>
            <div class="hero" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php the_sub_field('image')?>'); background-position: top; padding: 150px 20px;">
                <span class="categorie">L'association</span>
                <div class="separateur-categorie"></div>
                <h2><?php the_sub_field('titre') ?></h2>
                <p class="sous-titre"><?php the_sub_field('texte') ?></p>
                <a href="<?php echo site_url().'/association' ?>" class="cta" style="margin: 50px auto">Découvrir l'association</a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<div class="container-xl hero" style="background: #7BAC2B; position: relative;">
    <img class="wheel" src="/wp-content/uploads/2021/10/Pattern-circulaire.svg">
        <div class="container-m anime">
        <?php if( have_rows('don_de_matiere') ): ?>
            <?php while( have_rows('don_de_matiere') ): the_row(); ?>
                    <span class="categorie">Don de matière</span>
                    <div class="separateur-categorie" style="border-top: 2px solid white; opacity: 0.7;"></div>
                    <h2><?php the_sub_field('titre') ?></h2>
                    <p class="sous-titre" style="max-width: none;"><?php the_sub_field('texte') ?></p>
                    <div class="icones-flex">
                        <a href="<?php echo site_url().'/don-de-matiere' ?>" class="cta transparent ensavoirplus">En savoir plus</a>
                        <a class="cta transparent" href="<?php echo site_url().'/contact' ?>">Nous contacter</a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>


    <div class="center" style="background:#F8F7F5; padding: 80px 20px">
        <div class="container-s"><h2 style="margin: 0px;">Ne ratez rien<br> de notre actualité</h2></div>
        <p style="margin-bottom: 30px;">Suivez-nous sur Facebook, LinkedIn et Instagram</p>
        <div class="reseaux-contact">
            <a class="social" href="https://www.facebook.com/seve.mobilier" target="_blank" style="padding: 15px 20px;"><img src="/wp-content/uploads/2021/10/facebook.svg" alt="Icône Facebook"></a>
            <a class="social" href="https://fr.linkedin.com/company/le-bois-de-deux-mains" target="_blank"><img src="/wp-content/uploads/2021/10/linkedin.svg" alt="Icône Linkedin"></a>
            <a class="social" href="https://www.instagram.com/seve.mobilier/?hl=fr" target="_blank"><img src="/wp-content/uploads/2021/10/instagram.svg" alt="Icône Instagram"></a>
        </div>
    </div>
</div>


<div class="container-m flex">
    <div class="container-xxs">
        <span class="categorie">Partenaires</span>
        <div class="separateur-categorie left"></div>
        <h2>Ils font partie de l’aventure</h2>
        <p>Être bien entouré, c’est essentiel !</p>
    </div>

    <div class="slide-partenaires">
        <?php  
                $images = get_field('partenaires');
                if( $images ): ?>
                <div class="slider">
                    <?php foreach( $images as $image ): ?>
                        <div>
                            <img data-lazy="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
    </div>
</div>


<div class="renseignements">
    <div class="container-s realisations">
        <h3 style="font-size: 32px;">Une demande ? Une question ?</h3>
        <p>Ecrivez-nous pour nous parler de votre projet, pour obtenir des renseignements sur notre atelier, pour nous donner de la matière première ou pour nous parler de la météo. On a hâte de vous lire !</p>
        <a class="cta" style="margin: 40px auto;" href="<?php echo site_url().'/contact' ?>">Nous contacter</a></div>
    </div>
</div>

<?php get_footer(); ?>


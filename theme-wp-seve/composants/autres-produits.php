<div class="container-m realisations">
     <span class="categorie">Mobilier</span>
     <div class="separateur-categorie"></div>
     <h2>Plus de mobilier</h2>
         <div class="flex autres-pdts">
             <div class="container-autres-pdts survol">
                 <a href="<?php echo site_url().'/realisations' ?>">
                 <img class="arrondi" src="<?php the_sub_field('image') ?>" alt="Nos réalisations">
                 <div class="gradient"></div>
                 <h3 class="titre-autres-pdts"><?php the_sub_field('titre') ?></h3>
                 </a>
             </div>
             <div class="container-autres-pdts survol">
                 <a href="<?php echo site_url().'/produits' ?>">
                 <img class="arrondi" src="<?php the_sub_field('image2') ?>" alt="Notre gamme">
                 <div class="gradient"></div>
                 <h3 class="titre-autres-pdts"><?php the_sub_field('titre2') ?></h3>
                 </a>
             </div>
         </div>
 </div>
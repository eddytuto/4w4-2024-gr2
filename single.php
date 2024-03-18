<?php 
/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>
<h2>single.php</h2>


<div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Accueil (h2)</h2>
        <div class="section__cours">  
 <?php

  ?>      
  <?php if (have_posts()):
        while(have_posts()): the_post(); ?>
        <div class="carte">
            <h4><?php the_title() ?></h4>
            <p><?php the_content(); ?></p>
        </div>
       <?php endwhile; ?>
    <?php endif; ?>
  </div>

</div>
    
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Événement</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Lorem, ipsum.</a>  Minima velit qui unde odit quae, <a href="#">Lorem, ipsum.</a>  magni labore maiores facilis obcaecati dolore, ullam facere. Ducimus veniam reprehenderit, temporibus ab at possimus fugit?</p>
             <blockquote>Événement ipsum, dolor sit amet consectetur adipisicing elit. Accusantium a, repellat alias qui ut in ratione optio quia quae minus repudiandae ducimus aliquid aperiam unde atque tempore non. Non, magnam.</blockquote>
        </section>
        <?php get_template_part("gabarit/vague"); ?>
    </div>

    <?php  get_footer(); ?>
    
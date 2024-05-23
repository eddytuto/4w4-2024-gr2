<?php 
/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>
<!-- h2>Front-page.php</h2 -->
<div id="entete" class="global">
        <section class="entete__header">  
                        <!-- facebook -->

            <div class="entete__header__texte">    
                <h1 class="bgc-text"><?php echo get_bloginfo('name'); ?></h1>
                <h2 class="bgc-text"><?php echo get_bloginfo('description'); ?></h2>
                <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
            </div>   
            <div class="entete__header__button">
        <a class="entete__button" href="http://localhost:81/4w4-2024-gr2/conference/">Conférence de la semaine</a>
        </div>
        </section>
<?php get_template_part("gabarit/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Destinations populaires</h2>
        <div class="section__destination">  
 <?php
/*
get_the_title(); // retourne une chaîne qui contient le titre
the_title() // echo du titre
*/

  ?>      
  <?php if (have_posts()):
        while(have_posts()): the_post(); 
            $ma_categorie = "carte";
            if (in_category('galerie')) {
                $ma_categorie = "galerie";  
             }
            get_template_part( 'gabarit/categorie', $ma_categorie ); 
           
            ?>
       <?php endwhile; ?>
    <?php endif; ?>
  </div>

    </div>
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
            <h2>Galerie  (h2)</h2>
            <p>Lorem ipsum dolor sit amet,<a href="#">Lorem, ipsum.</a>  consectetur adipisicing elit. Minima <a href="#">Lorem, ipsum.</a>  velit qui unde odit quae, magni labore maiores facilis obcaecati dolore, ullam facere. Ducimus veniam reprehenderit, temporibus ab at possimus fugit?</p>
            <blockquote>Galerie ipsum, dolor sit amet consectetur adipisicing elit. Accusantium a, repellat alias qui ut in ratione optio quia quae minus repudiandae ducimus aliquid aperiam unde atque tempore non. Non, magnam.</blockquote>
            <?php echo do_shortcode('[em_destination]'); ?>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Les destinations par catégorie</h2>
            <article class="flexbox">
            <?php get_template_part("gabarit/categorie"); ?>
             </article>
        </section>
        <?php get_template_part("gabarit/vague"); ?>
    </div>
    <?php  get_footer(); ?>
    
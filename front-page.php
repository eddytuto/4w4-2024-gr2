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
            <div class="entete__header__button"><button class="entete__button">Événements</button></div>
        </section>
<?php get_template_part("gabarit/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Accueil (h2)</h2>
        <div class="section__cours">  
 <?php
/*
get_the_title(); // retourne une chaîne qui contient le titre
the_title() // echo du titre
*/

  ?>      
  <?php if (have_posts()):
        while(have_posts()): the_post(); ?>
        <div class="carte">
            <?php the_post_thumbnail('thumbnail'); ?>
            <h4><?php the_title() ?></h4>
            <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
            <p><a href="<?php echo get_permalink(); ?>">La suite</a> </p>
            <?php the_category(); ?>
        </div>
       <?php endwhile; ?>
    <?php endif; ?>
  </div>

    </div>
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
            <h2>Galerie  (h2)</h2>
            <p>Lorem ipsum dolor sit amet,<a href="#">Lorem, ipsum.</a>  consectetur adipisicing elit. Minima <a href="#">Lorem, ipsum.</a>  velit qui unde odit quae, magni labore maiores facilis obcaecati dolore, ullam facere. Ducimus veniam reprehenderit, temporibus ab at possimus fugit?</p>
            <blockquote>Galerie ipsum, dolor sit amet consectetur adipisicing elit. Accusantium a, repellat alias qui ut in ratione optio quia quae minus repudiandae ducimus aliquid aperiam unde atque tempore non. Non, magnam.</blockquote>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Les destinations par catégorie</h2>
            <article class="flexbox">
            <?php
            /*
     get_categories() :  Est l'ensemble des catégorie du site
     get_category() : Est l'ensemble des catégories d'un post

            */ 
              $categories = get_categories();
              foreach ($categories as $elm_categorie){
                $nom = $elm_categorie->name;
                $description = wp_trim_words($elm_categorie->description, 10);
                $nombre_destination = $elm_categorie->count;
                $url_categorie = get_term_link($elm_categorie);
                ?>
                <div class="carte">
                    <h3><?php echo $nom ?></h3>
                    <p><?php echo $description ?></p>
                    <p>Nombre de destination : <?php echo $nombre_destination ?></p>
                    <a href="<?php echo $url_categorie?>"><?php echo $nom ?> ... </a>
              </div>
             <?php } ?>
             </article>
        </section>
        <?php get_template_part("gabarit/vague"); ?>
    </div>

    <?php  get_footer(); ?>
    
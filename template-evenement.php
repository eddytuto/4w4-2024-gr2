<?php
/**
 * Template name: Evenement
 *
 */
?>
<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();
/* on peut aussi intégrer un champ personnalisé directement à l'intérieur d'une page ou d'un article en 
utilisant la syntaxe [acf field="adresse"]
[acf field="date"] et [acf field="heure"]
?>
<p>L'adresse de l'événement : <?php the_field('adresse'); ?></p>
<p>La date de l'événement : <?php the_field('date'); ?></p> 
<p>L'heure de l'événement : <?php the_field('heure'); ?></p> 
   

<?php endif;?>
</main><!-- #main -->
<?php
get_footer();
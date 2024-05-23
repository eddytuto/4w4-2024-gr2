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
<?php the_content();?>
<p>L'adresse de l'événement : <?php the_field('adresse'); ?></p>
<p>La date de l'événement : <?php the_field('date'); ?></p> 
<p>L'heure de l'événement : <?php the_field('heure'); ?></p> 
   

<?php endif;?>
</main><!-- #main -->
<?php
get_footer();
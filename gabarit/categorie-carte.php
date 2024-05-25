<?php
/**
*  Gabarit pour afficher une carte de destination
*/
?>
<div class="carte">
    <?php the_post_thumbnail('thumbnail'); ?>
    <h4><?php the_title() ?></h4>
    <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
    <p><a href="<?php echo get_permalink(); ?>">La suite</a> </p>
    <?php the_category(); ?>
</div>
<?php
/**
 * gabarit pour afficher des cartes de catégorie 
 *     get_categories() :  Est l'ensemble des catégorie du site
 *     get_category() : Est l'ensemble des catégories d'un post
 *
*/ 
    $categories = get_categories();
    foreach ($categories as $elm_categorie){
    $nom = $elm_categorie->name;
    $id_categorie = $elm_categorie->term_id;
    $description = wp_trim_words($elm_categorie->description, 10);
    $nombre_destination = $elm_categorie->count;
    $url_categorie = get_term_link($elm_categorie);
    ?>
    <div class="carte">
        <h3><?php echo $nom ?></h3>
        <p><?php echo $description ?></p>
        <p>id de la catégorie : <?php echo $id_categorie ?></p>
        <p>Nombre de destination : <?php echo $nombre_destination ?></p>
        <a href="<?php echo $url_categorie?>"><?php echo $nom ?> ... </a>
    </div>
    <?php } ?>
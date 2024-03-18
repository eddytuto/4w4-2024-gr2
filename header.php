<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème gr2</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css';?>" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css';?>" >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div id="menu" class="global">

        <?php 
        /* permet d'ajouter un logo qui a été choisi à l'aide du  personnaliser «customizer» */
        echo get_custom_logo(); 
        
        
        ?>
        <header class="entete__menu">
            <label id="burger" for="chk_burger">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path></svg>
            </label>
            <input id="chk_burger" type="checkbox">
            <?php wp_nav_menu(array("container"=>"nav")); ?>
        </header>
    </div>
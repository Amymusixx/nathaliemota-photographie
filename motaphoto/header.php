<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motaphoto</title>
    <meta name="description" content="Site pour la photographe Nathalie Mota"> 
    <?php wp_head() ?>
</head>
<body>
<header>
  <div>
    <img class='logo' src= <?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png' ?>>
</div>
<?php 
wp_nav_menu([
    'motaphoto' => 'primary',
]); ?>

<div class="burger">
  <span></span>
</div>
<div class="menu-burger">
<?php 
wp_nav_menu([
    'motaphoto' => 'primary',
]); ?>
</div>


</header>

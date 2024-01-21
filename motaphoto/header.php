<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motaphoto</title>
    <meta name="description" content="Site pour la photographe Nathalie Mota"> 
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <?php wp_head() ?>
</head>
<body>
<header id='header' class="">
  <div class="header-box">
<div>
    <img class='logo' src= <?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png' ?>>
</div>
<div><?php 
wp_nav_menu([
    'motaphoto' => 'primary',
]); ?></div>
</div>

<div class="burger">
  <span></span>
</div>
<div class="menu-burger animate__animated">
<?php 
wp_nav_menu([
    'motaphoto' => 'primary',
]); ?>
</div>

</header>

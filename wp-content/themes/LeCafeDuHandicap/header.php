<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php  wp_head(); ?>
</head>
<body>

<!-- NavBar -->
<nav class="navbar sticky-top navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <?php the_custom_logo() ?>
    <a class="navbar-brand" href="http://localhost:8080/wordpress_Le_caf%C3%A9_du_handicap/">
      <h1 class="text-center" id="siteTitle"><?php bloginfo('name') ?></h1>
    </a>
  </div>
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- DIV contenant le main menu -->
    <div class="collapse navbar-collapse mediaNav" id="navbarSupportedContent">
      <?php wp_nav_menu([
        'menu' => "mainMenu",
        'container' => false,
        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
      ]); ?>
    </div>
  </div>
</nav>
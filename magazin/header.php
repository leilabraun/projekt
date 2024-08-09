<!DOCTYPE html>
<html lang="de-CH" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name') ;?></title>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head() ;?>
    <!-- Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  </head>
  <body <?php body_class() ;?>>
  <!-- HEADER Text -->
    <header>
    <h1>Leila Braun</h1>
 
        <nav class="burger-menu">

          <div class="burger-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>

          <div class="menu-div">
            <?php wp_nav_menu(array('theme_location' => 'hauptnavigation')) ;?>
          </div>





            
        </nav>
    </header>
    <main>

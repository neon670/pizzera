<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>

</head>
<body>
<header class="site-header">
  <div class="container">
    <div class="logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
      <img scr="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logoimage">
    </a>
    </div>
  <div class="header-information">
    <div class="socials">
      <?php 
      $args = array(
        'theme_location' => 'social-menu',
        'container' => 'nav',
        'container-class' => 'socials',
        'container_id' => 'socials',
        'link_before' => '<span class="sr-text">',
        'link_after' => '</span>'
        ); 
        wp_nav_menu($args);
         ?>
    </div>
      <div class="address">
      <p>8179 Bay Ave Mountain View,CA 098943</p>
      <p>Phone Number: 1-92-333-0909</p>
    </div>
  </div>
</div> <!-- container -->
</header>
<div class="main-menu">
  <div class="mobile-menu">
    <a href ="#" class="mobile"><i class="fas fa-bars"></i>Menu</a>
  </div>
  <div class="navigation container">
    <?php 
      $args = array(
      'theme_location' => 'header-menu',
      'container' => 'nav',
      'container-class' => 'site-nav'
       ); 
        wp_nav_menu($args);
       ?>
 </div>
</div>
</nav>

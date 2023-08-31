<!-- WORDPRESS TEMPLATE FOR HEADER -->
<?php $headerMenuLeft = array(
  'theme_location' => 'header-menu-left',
  'menu_class' => 'header-menu-left',
  'menu_id' => '',
); ?>
<?php $headerMenuRight = array(
  'theme_location' => 'header-menu-right',
  'menu_class' => 'header-menu-right',
  'menu_id' => '',
); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="author" content="Oraco Agency">
  <!-- ADD CONTENT -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Cherry Events</title>
  <?php wp_head(); ?>
</head>


<div id="cursor-follow"></div>
<div id="scroll-top">
  <img src="http://bcenew.local/wp-content/uploads/2023/08/icons8-down-arrow-50.png" />
</div>

<body>
  <div class="menu">
    ABC
  </div>

  <header id="header" class="transparent-background">
    <div class="container">

      <div class="header__inner">
        <div class="header__inner-left">
          <?php wp_nav_menu($headerMenuLeft); ?>
        </div>
        <img src="http://bcenew.local/wp-content/uploads/2023/08/header-logo.svg" />
        <div class="header__inner-right">
          <?php wp_nav_menu($headerMenuRight); ?>
          <button class="test-menu-btn" style="color: white;">TEST</button>
        </div>
      </div>

    </div>
  </header>
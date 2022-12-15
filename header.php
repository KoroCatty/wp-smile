<html <?php language_attributes(); ?>>

<head
    prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/ fb# prefix属性: http://ogp.me/ns/ prefix属性#"
  >
    <title>Smile Design</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="copyright" content="" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="" />
    <meta name="keywords" content="" />

    <!-- SNS -->
    <!-- <meta property="og:title" content="" />
  <meta property="og:description"
    content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:locale" content="ja_JP" /> -->

    <!-- Twitter -->
    <meta name="twitter:title" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:description" content="" />
    <meta name="og:image" content="" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@" />

    <!-- google font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel="stylesheet"
    />

    <!-- font awesome cdn  -->
    <script
      src="https://kit.fontawesome.com/f1ec62d0b6.js"
      crossorigin="anonymous"
    ></script>

    <!-- Font Awesome for Time Line Icons-->
    <script src="https://kit.fontawesome.com/b8a7fea4d4.js"></script>

    <!-- From Material icons Guide  for Hamburger icon-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <?php wp_head(); ?>
  </head>

  <!------ contents ------------------------------ -->
  <body class="body">


    <!-- Hamburger Hidden Menu -->
    <nav class="overWrap">
      <ul class="overWrap__box">
        <li class="overWrap__box--item">
          <a href="/" class="">
            <img
              src="<?php echo esc_url( get_template_directory_uri() );  ?>/src/img/site-logo.svg"
              alt="Logo"
              class="overWrap__box--img"
            />
        </a>
        </li>

        <li class="overWrap__box--item">
          <a href="<?php echo esc_url( home_url('/') ); ?>" class="overWrap__box--link">Home</a>
        </li>
        <li class="overWrap__box--item">
          <a href="<?php echo esc_url( home_url('/about-us') ); ?>" class="overWrap__box--link">About Us </a>
        </li>
        <li class="overWrap__box--item">
          <a href="<?php echo esc_url( home_url('/') ); ?>" class="overWrap__box--link">Blog</a>
        </li>

        <li class="overWrap__box--item">
          <a href="<?php echo esc_url( home_url('/contact-us') ); ?>"  class="overWrap__box--link">CONTACT </a>
        </li>
      </ul>

      <!-- Global Menuを表示 -->
      <?php
      // $args = array(
      //   'menu' => 'smileMenu',
      //   'menu_class' => 'overWrap__box',// ulタグのクラス名
      //   'container' => false,
      // );
      // wp_nav_menu($args);
      ?>
    </nav>

    <header class="header">
      <div class="logo ">
        <!-- <img src="../img/site-logo.svg" alt="logo" class="logo__img" /> -->
          <h1 class="logo">DIGSMILE<span>INC.</span></h1>
      </div>

      <!-- Hamburger Icon -->
      <div class="headerHam">
        <button class="headerHam__icon">
          <span class="headerHam__icon--bar top"></span>
          <span class="headerHam__icon--bar middle"></span>
          <span class="headerHam__icon--bar bottom"></span>
        </button>

        <div class="headerHam__text">menu</div>
      </div>
    </header>
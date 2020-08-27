<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>CORe</title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/wave.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cover.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://use.typekit.net/nai1vii.css" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />


  <?php wp_head(); ?>
</head>

<body>



  <div class="content">

    <header class="header">
      <h1 class="core_logo"><a href="#"><img src="<?php echo get_theme_file_uri("img/CORe_logo.png"); ?>" alt="CORe コーレ"></a></h1>
      <div class="btn_trigger">
        <button type="button" class="zdo_drawer_button">
          <span class="zdo_drawer_bar zdo_drawer_bar1"></span>
          <span class="zdo_drawer_bar zdo_drawer_bar2"></span>
          <span class="zdo_drawer_bar zdo_drawer_bar3"></span>
        </button>
      </div>
      <div class="nav_wrapper">
        <nav class="nav">
          <ul class="nav_menu">
            <li>
              <a href="#aboutus">
                <p class="nav_item">ABOUT US</p>
                <p class="nav_item_jp">会社紹介</p>
              </a>
            </li>
            <li>
              <a href="#product">
                <p class="nav_item">PRODUCT</p>
                <p class="nav_item_jp">製品</p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="nav_item">SERVICE&PLAN</p>
                <p class="nav_item_jp">サービス・料金</p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="nav_item">CASE</p>
                <p class="nav_item_jp">事例</p>
              </a>
            </li>
            <li>
              <a href="#">
                <p class="nav_item">NEWS</p>
                <p class="nav_item_jp">新着情報</p>
              </a>
            </li>
          </ul>
        </nav>
        <div class="a_btn">
          <a href="#">
            <p class="nav_item">CONTACT</p>
            <p class="nav_item_jp">お問い合わせ</p>
          </a>
        </div>
      </div>
    </header>
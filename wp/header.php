<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">

  <!-- フォント読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Murecho:wght@100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__wrap">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__logo">
          <picture class="l-header__logo-img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="株式会社クラフトマンのロゴ" width="300" height="52">
          </picture>
        </a>
        <div class="l-header__hamburger js-nav-btn">
          <span class="l-header__hamburger-line"></span>
          <span class="l-header__hamburger-line"></span>
          <span class="l-header__hamburger-line"></span>
        </div>
        <nav class="g-nav js-nav">
          <ul class="g-nav__list">
            <li class="g-nav__item">
              <a href="#environment" class="g-nav__link">働く環境</a>
            </li>
            <li class="g-nav__item">
              <a href="#recruit" class="g-nav__link">募集要項</a>
            </li>
            <li class="g-nav__item">
              <a href="#executives" class="g-nav__link">役員紹介</a>
            </li>
            <li class="g-nav__item">
              <a href="#message" class="g-nav__link">代表メッセージ</a>
            </li>
            <li class="g-nav__item">
              <a href="#about" class="g-nav__link">会社概要</a>
            </li>
            <li class="g-nav__item">
              <a href="#entry" class="g-nav__btn">エントリー</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
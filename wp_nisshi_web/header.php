<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="JA兵庫西">
    <meta name="description" content="JA兵庫西の広報誌にっしぃ広場のWEBサイトです">
    <title>
      <?php
      if ( !is_home() ){
        wp_title('|', true, 'right');
      }
      bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="icon" href="img/icon.png" sizes="16x16" type="image/png">
    
    <?php
    wp_head();
    ?>
  </head>
  <body>
    <div class="main">
      <!-- seoのため非表示-->
      <h1>JA兵庫西</h1>
      <header>
        <div class="l-header">
          <ul class="menu">
            <li><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a></li>
            <li>
              <h2 class="c-title-main">にっしぃひろば</h2>
            </li>
            <li>
              <div class="search_container">
                <input type="text" placeholder="検索はこちら">
                <input type="submit" value="">
              </div>
              <div class="l-header-icon"><a href=""><i class="fab fa-instagram-square fa-2x l-header-icon__start"></i></a><a href=""><i class="fab fa-facebook-square fa-2x"></i></a></div>
            </li>
          </ul>
        </div>
        <div class="c-title-main-top__under"><span>YOGONISHI  AGRICULTURAL  COOPERATIVE</span></div>
      </header>

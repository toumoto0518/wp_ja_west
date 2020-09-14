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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.png" sizes="16x16" type="image/png">
    
    <?php
    wp_head();
    ?>
  </head>
  <body>

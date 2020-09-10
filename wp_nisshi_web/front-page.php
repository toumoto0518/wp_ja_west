<?php get_header(); ?>
<div class="main">
      <!-- seoのため非表示-->
      <h1>JA兵庫西</h1>
      <header>
        <div class="l-header">
          <ul class="menu">
            <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a></li>
            <li>
              <h2 class="c-title-main">にっしぃひろば</h2>
            </li>
            <li>
              <div class="search_container">
                <input type="text" placeholder="検索はこちら">
                <input type="submit" value="">
              </div>
              <div class="l-header-icon"><a href="https://www.instagram.com/ja_hyogo/"><i class="fab fa-instagram-square fa-2x l-header-icon__start"></i></a><a href="https://www.facebook.com/pages/JA%E5%85%B5%E5%BA%AB%E8%A5%BF/112179886000623"><i class="fab fa-facebook-square fa-2x"></i></a></div>
            </li>
          </ul>
        </div>
        <div class="c-title-main-top__under"><span>YOGONISHI  AGRICULTURAL  COOPERATIVE</span></div>
      </header>


      <div class="c-title-main__under">
        <ul class="slick01">
          <li><img class="c-img-slick" src="<?php echo get_template_directory_uri(); ?>/img/main_header.png" alt=""></li>
          <li><img class="c-img-slick" src="<?php echo get_template_directory_uri(); ?>/img/main_header.png" alt=""></li>
          <li><img class="c-img-slick" src="<?php echo get_template_directory_uri(); ?>/img/main_header.png" alt=""></li>
        </ul><img class="w100" src="<?php echo get_template_directory_uri(); ?>/img/main_header_under.png" alt="">
      </div>
    </div>
    <div class="l-menu u-mgn--t64px">
      <ul>
        <li><a href="http://ideekobe.xsrv.jp/ja-h-west-magazine/feature/"><img src="<?php echo get_template_directory_uri(); ?>/img/menu1.png" alt="特集ボタン画像"></a></li>
        <li><a href="http://ideekobe.xsrv.jp/ja-h-west-magazine/topics/"><img src="<?php echo get_template_directory_uri(); ?>/img/menu2.png" alt=""></a></li>
        <li><a href="http://ideekobe.xsrv.jp/ja-h-west-magazine/farming/"><img src="<?php echo get_template_directory_uri(); ?>/img/menu3.png" alt=""></a></li>
        <li><a href="http://ideekobe.xsrv.jp/ja-h-west-magazine/garden/"><img src="<?php echo get_template_directory_uri(); ?>/img/menu4.png" alt=""></a></li>
        <li><a href="http://ideekobe.xsrv.jp/ja-h-west-magazine/health/"><img src="<?php echo get_template_directory_uri(); ?>/img/menu5.png" alt=""></a></li>
        <li><a href="http://ideekobe.xsrv.jp/ja-h-west-magazine/recipe/"><img src="<?php echo get_template_directory_uri(); ?>/img/menu6.png" alt=""></a></li>
        <li><a href="http://ideekobe.xsrv.jp/ja-h-west-magazine/trouble/"><img src="<?php echo get_template_directory_uri(); ?>/img/menu7.png" alt=""></a></li>
        <li><a href="http://ideekobe.xsrv.jp/ja-h-west-magazine/initiative/"><img src="<?php echo get_template_directory_uri(); ?>/img/menu8.png" alt=""></a></li>
      </ul>
    </div>
    <div class="l-title-top u-mgn--t64px">
      <h3 class="title">最新の記事</h3>
      <p class="content">最新の記事はこちらからご覧ください。</p>
    </div>
    <!-- 最新記事ループ構文-->
    <div class="l-article">
        <?php get_template_part('loop', 'top'); ?>
    </div>
    <!-- 終了-->

    <div class="l-tag u-mgn--t32px">
        <div class="l-title-top">
            <h3 class="title">タグ</h3>
            <p class="content">便利なタグ機能で、記事を検索！</p>
        </div>
        <div class="c-tag">
            <?php
                $tags = get_tags();
                foreach( $tags as $tag) { 
                echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></li>';
                }
            ?>
        </div>
    </div>
    <!-- タグの出力 -->
    <div>
        
    </div>

    <div class="l-top-img u-mgn--t64px" stlye="display:flex;justfy"><img class="w80 aguri-bito" src="<?php echo get_template_directory_uri(); ?>/img/men.png"></div>
    <div class="l-title-top u-mgn--t64px">
      <h3 class="title">人気の記事</h3>
      <p class="content">人気の記事はこちらからご覧ください。</p>
    </div>
    <!-- 人気の記事ループ構文-->
    <div class="l-article">
        <?php get_template_part('loop', 'top'); ?>
    </div>
    <!-- 終了-->

<?php get_footer(); ?>
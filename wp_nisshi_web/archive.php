<?php get_header(); ?>
<div>
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
                <?php get_search_form(); ?>
              </div>
              <div class="l-header-icon"><a href="https://www.instagram.com/ja_hyogo/"><i class="fab fa-instagram-square fa-2x l-header-icon__start"></i></a><a href="https://www.facebook.com/pages/JA%E5%85%B5%E5%BA%AB%E8%A5%BF/112179886000623"><i class="fab fa-facebook-square fa-2x"></i></a></div>
            </li>
          </ul>
        </div>
        <div class="c-title-main-top__under"><span>YOGONISHI  AGRICULTURAL  COOPERATIVE</span></div>
      </header>


    <div class="l-title-top l-title-archive u-mgn--t64px">
      <?php echo "<h3 class='title'>" . get_the_archive_title() . "</h3>"; ?>
    </div>
    
    <div class="l-original-main">
      <div class="l-original-main__left">
        <!-- ループ構文-->
        <div class="l-article-column2">
          <?php get_template_part('loop', 'main'); ?>
        </div>
        <!--ページナビ-->
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        <!-- 終了-->
      </div>


      <div class="l-original-main__rigth">
        <!-- メニュー表示-->
        <!-- <div class="c-title-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/right_memu.png" alt=""></div>
        <div class="l-title-top">
          <h3 class="title">カテゴリー</h3>
        </div>
        <div class="c-menu-category">
          <div class="c-menu-category__content"><a href="">
              <div class="c-menu-block--red"></div><span></span>特集</a></div>
          <div class="c-menu-category__content"><a href="">
              <div class="c-menu-block--green"></div><span></span>トピックス</a></div>
          <div class="c-menu-category__content"><a href="">
              <div class="c-menu-block--blue"></div><span></span>営農情報</a></div>
          <div class="c-menu-category__content"><a href="">
              <div class="c-menu-block--purple"></div><span></span>健康豆知識</a></div>
          <div class="c-menu-category__content"><a href="">
              <div class="c-menu-block--pinck"></div><span></span>家庭菜園</a></div>
          <div class="c-menu-category__content"><a href="">
              <div class="c-menu-block--orange"></div><span></span>レシピ</a></div>
          <div class="c-menu-category__content"><a href="">
              <div class="c-menu-block--yellow-green"></div><span></span>消費者トラブル</a></div>
          <div class="c-menu-category__content"><a href="">
              <div class="c-menu-block--sky-blue"></div><span></span>JAの取組</a></div>
        </div>
        <div class="c-menu-category-link"><a href="">
            <p>カテゴリー一覧</p></a></div>
        <div class="l-title-top">
          <h3 class="title">人気の記事</h3>
        </div><a class="c-menu-article" href="template.html">
          <div class="c-menu-article__left"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-right-under.png" alt=""></div>
          <div class="c-menu-article__right">
            <p>2020.08.09</p>
            <div class="c-menu-article__right__tag">レシピ</div>
            <p>トロトロオニオンエッグスープ</p>
          </div></a><a class="c-menu-article" href="template.html">
          <div class="c-menu-article__left"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-right-under.png" alt=""></div>
          <div class="c-menu-article__right">
            <p>2020.08.09</p>
            <div class="c-menu-article__right__tag">レシピ</div>
            <p>トロトロオニオンエッグスープ</p>
          </div></a><a class="c-menu-article" href="template.html">
          <div class="c-menu-article__left"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-right-under.png" alt=""></div>
          <div class="c-menu-article__right">
            <p>2020.08.09</p>
            <div class="c-menu-article__right__tag">レシピ</div>
            <p>トロトロオニオンエッグスープ</p>
          </div></a><a class="c-menu-article" href="template.html">
          <div class="c-menu-article__left"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-right-under.png" alt=""></div>
          <div class="c-menu-article__right">
            <p>2020.08.09</p>
            <div class="c-menu-article__right__tag">レシピ</div>
            <p>トロトロオニオンエッグスープ</p>
          </div></a><a class="c-menu-article" href="template.html">
          <div class="c-menu-article__left"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-right-under.png" alt=""></div>
          <div class="c-menu-article__right">
            <p>2020.08.09</p>
            <div class="c-menu-article__right__tag">レシピ</div>
            <p>トロトロオニオンエッグスープ</p>
          </div></a>
          <div class="c-menu-category-link"><a href="archive.html">
            <p>人気記事の一覧</p></a>
          </div> -->


          <?php dynamic_sidebar( 'sidebar' ); ?>

      </div>



    </div>
    <script src="js/app.js"></script>
    <!-- 終了-->

<?php get_footer(); ?>
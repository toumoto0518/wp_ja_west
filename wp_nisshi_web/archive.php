<?php get_header(); ?>
      <!-- seoのため非表示-->
      <h1>JA兵庫西</h1>
      <header>
        <div class="l-header">
          <ul class="menu">
            <!-- <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a></li> -->
            <li class="l-header__menu__li">
              <h2 class="c-title-main"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top-title01.png" alt=""></a></h2>
            </li>
            <li>
              <div class="search_container">
                <?php get_search_form(); ?>
              </div>
              <div class="l-header-icon">
                <a href="http://www.ja-hyogonishi.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
                <a href="https://www.instagram.com/ja_hyogo/" target="_blank"><i class="fab fa-instagram-square fa-2x l-header-icon__start"></i></a>
                <a href="https://www.facebook.com/pages/JA%E5%85%B5%E5%BA%AB%E8%A5%BF/112179886000623" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
              </div>
            </li>
          </ul>
        </div>
        <!-- <div class="c-title-main-top__under"><span>HYOGONISHI  AGRICULTURAL  COOPERATIVE</span></div> -->
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
          <?php dynamic_sidebar( 'sidebar' ); ?>
      </div>
    </div>
    <script src="js/app.js"></script>
    <!-- 終了-->

<?php get_footer(); ?>
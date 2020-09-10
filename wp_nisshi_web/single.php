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
                <input type="text" placeholder="検索はこちら">
                <input type="submit" value="">
              </div>
              <div class="l-header-icon"><a href="https://www.instagram.com/ja_hyogo/"><i class="fab fa-instagram-square fa-2x l-header-icon__start"></i></a><a href="https://www.facebook.com/pages/JA%E5%85%B5%E5%BA%AB%E8%A5%BF/112179886000623"><i class="fab fa-facebook-square fa-2x"></i></a></div>
            </li>
          </ul>
        </div>
        <div class="c-title-main-top__under"><span>YOGONISHI  AGRICULTURAL  COOPERATIVE</span></div>
      </header>


  <div class="l-original">

  </div>
    <div class="l-original-main">

      <div class="l-original-main__left">

      <?php
      if( have_posts() ) :
        while ( have_posts() ) : the_post();
      ?>

      <!-- <div id="newsWrap"> -->
      <div id="<?php the_ID(); ?>" <?php post_class('newsTextWrap')?>>


        <div class="l-original-main__left__tag">
          <time datetime="<?php the_time('Y-m-d'); ?>" class="<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php the_time('Y年m日d日'); ?></time>
          <div class="<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php the_category(); ?></div>
        </div>
        <h3 class="c-title-original"><?php the_title(); ?></h3>
        <div class="c-original-tag"><?php the_tags(''); ?></div>
        <div class="single-style">
          <?php the_content(); ?>
        </div>





      </div><!-- newsWrap -->


      <?php
        endwhile;
      endif;
      ?>

        <div class="l-template-title u-mgn--t64px">
          <h3>関連記事</h3>
        </div>
        <div class="l-template-title">
          <div class="l-article-column3"><a class="l-article-column3__list" href="original.html"><img src="http://placehold.jp/300x210.png" alt="">
              <h4 class="l-article-column3__list__title u-mgn--t8px">世界の料理ミニ博覧会</h4>
              <div class="l-article-column3__list__tag u-mgn--t8px greern">
                <p>2020.4.13</p><span>トピックス</span>
              </div></a><a class="l-article-column3__list" href="original.html"><img src="http://placehold.jp/300x210.png" alt="">
              <h4 class="l-article-column3__list__title u-mgn--t8px">世界の料理ミニ博覧会</h4>
              <div class="l-article-column3__list__tag u-mgn--t8px greern">
                <p>2020.4.13</p><span>トピックス</span>
              </div></a><a class="l-article-column3__list" href="original.html"><img src="http://placehold.jp/300x210.png" alt="">
              <h4 class="l-article-column3__list__title u-mgn--t8px">世界の料理ミニ博覧会</h4>
              <div class="l-article-column3__list__tag u-mgn--t8px greern">
                <p>2020.4.13</p><span>トピックス</span>
              </div></a>
          </div>
        </div>
      </div>
      
      <div class="l-original-main__rigth">
          <?php dynamic_sidebar( 'sidebar' ); ?>
      </div>

    </div>
    <!-- 終了-->

<?php get_footer(); ?>
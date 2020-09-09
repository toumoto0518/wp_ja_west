<?php get_header(); ?>

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
        <?php the_content(); ?>





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
        <!-- メニュー表示-->
        <div class="c-title-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/right_memu.png" alt=""></div>
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
            <p>人気記事の一覧</p></a></div>
      </div>
    </div>
    <!-- 終了-->



<?php get_footer(); ?>
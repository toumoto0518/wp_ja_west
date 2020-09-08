<?php get_header(); ?>

  <div class="l-title-top l-title-archive u-mgn--t64px">
      <h3 class="title"><?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?></h3>
    </div>
    <!-- パンくず -->
    <div class="u-mgn--72px">

    </div>
    <div class="l-original-main">
      <div class="l-original-main__left">
        <!-- ループ構文-->
        <!-- ワードプレス記述 -->
        <div id="newsWrap">
          <div class="newsCon">

            <!-- ループ部分 -->
            <?php get_template_part('loop', 'main'); ?>

            <!--ページナビ-->
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

          </div>
        </div><!-- newsWrap -->


        <!-- 終了-->
        </div>
        <div class="c-pager"><a class="c-pager__select" href="">1</a><a class="c-pager__not-select" href="">2</a><a class="c-pager__not-select" href="">3</a><a class="c-pager__not-select" href="">4</a><a class="c-pager__not-select" href="">5</a>
          <p class="c-pager__santen">…</p><a class="c-pager__not-select" href="">10</a>
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
    <script src="js/app.js"></script>
    <!-- 終了-->

<?php get_footer(); ?>
<?php get_header(); ?>

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
        <li><a href="archive.html"><img src="<?php echo get_template_directory_uri(); ?>/img/menu1.png" alt="特集ボタン画像"></a></li>
        <li><a href="archive.html"><img src="<?php echo get_template_directory_uri(); ?>/img/menu2.png" alt=""></a></li>
        <li><a href="archive.html"><img src="<?php echo get_template_directory_uri(); ?>/img/menu3.png" alt=""></a></li>
        <li><a href="archive.html"><img src="<?php echo get_template_directory_uri(); ?>/img/menu4.png" alt=""></a></li>
        <li><a href="archive.html"><img src="<?php echo get_template_directory_uri(); ?>/img/menu5.png" alt=""></a></li>
        <li><a href="archive.html"><img src="<?php echo get_template_directory_uri(); ?>/img/menu6.png" alt=""></a></li>
        <li><a href="archive.html"><img src="<?php echo get_template_directory_uri(); ?>/img/menu7.png" alt=""></a></li>
        <li><a href="archive.html"><img src="<?php echo get_template_directory_uri(); ?>/img/menu8.png" alt=""></a></li>
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
      <div class="c-tag"><span>農業</span><span>家庭菜園</span><span>wwwwwwwwwwwwwwwwwwww</span></div>
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
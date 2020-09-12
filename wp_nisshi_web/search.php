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

      <!-- localNav -->
      <div class="pageTitleWrap">
        <div class="pageTitle newsTitle">
          <h2>検索結果</h2>
        </div>
      </div>
      <!-- news -->
      <div id="newsWrap">
        <p class="newsText">サイト内検索フォームから検索された検索結果を表示いたします。</p>
        <div class="newsCon">

					<!-- ループ部分 -->
					<?php
					if( have_posts() ) :
					  while ( have_posts() ) : the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('news')?>>
					  <?php the_category(); ?>
					    <a href="<?php the_permalink(); ?>">
					      <div class="flexBox newsTitle newsKiji">
					        <div class="title-border">
					          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m日d日'); ?></time>
					        </div>
					        <p><?php the_title(); ?></p>
					        <div class="smallKiji">
					          <?php the_excerpt(); ?>
					        </div>
					      </div>
					    </a>
					</article>

					<?php
					  endwhile;
					else :
					?>

					<!--検索結果がなっかた時の表示-->
					<?php if(is_search()) : ?>
					<p>検索結果はありませんでした。</p>
				<?php else : ?>
					<p>記事はありません。</p>
					<?php endif; ?>
				<?php endif; ?>

					<!--ページナビ-->
					<?php if(function_exists('wp_pagenavi')){wp_pagenavi(); }?>

        </div>
      </div><!-- newsWrap -->
<?php get_footer(); ?>

<?php get_header(); ?>
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

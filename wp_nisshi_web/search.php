<?php get_header(); ?>

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
		<div class="l-title-top l-title-archive u-mgn--t64px">
			<h3 class="title">検索結果</h3>
		</div>
	  <!-- news -->
	  <div class="l-original-main">
		<div class="l-original-main__left">
			<p class="newsText">サイト内検索フォームから検索された検索結果を表示いたします。</p>
			<div class="l-article-column2">
				<!-- ループ部分 -->
				<?php
				if( have_posts() ) :
					while ( have_posts() ) : the_post();
				?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('l-article-column2__list')?>>
						<a class="" href="<?php the_permalink(); ?>">
							<div class="imgWrap">
								<?php the_post_thumbnail('thumbnail'); ?>
							</div>
							<h4 class="l-article-column2__list__title u-mgn--t8px">
								<?php
									if(mb_strlen($post->post_title, 'UTF-8')>25){
									$title= mb_substr($post->post_title, 0, 25, 'UTF-8');
									echo $title.'…';
									}else{
									echo $post->post_title;
									}
								?>
							</h4>
							<div class="l-article__list__tag red u-mgn--t8px">
							<time datetime="<?php the_time('Y-m-d'); ?>" class="<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php the_time('Y.m.d'); ?></time>
							<div class="<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php the_category(); ?></div>
							</div>
							<p class="u-mgn--t8px"><?php the_excerpt(); ?></p>
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
			</div>
			<!--ページナビ-->
			<?php if(function_exists('wp_pagenavi')){wp_pagenavi(); }?>
		</div><!-- l-original-main__left -->
		<div class="l-original-main__rigth">
          <?php dynamic_sidebar( 'sidebar' ); ?>
      </div>
	</div>
<?php get_footer(); ?>

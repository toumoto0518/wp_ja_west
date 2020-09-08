<?php
if( have_posts() ) :
  while ( have_posts() ) : the_post();
?>

  <article id="post-<?php the_ID(); ?>" <?php post_class('l-article-column2__list')?>>
    <a class="l-article-column2__list" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('thumbnail'); ?>
      <h4 class="l-article-column2__list__title"><?php the_title(); ?></h4>
      <div class="l-article-column2__list__tag red">
      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m日d日'); ?></time>
      <span><?php the_category(); ?></span>
      </div>
      <p><?php the_excerpt(); ?></p>
    </a>
  </article>

<?php
  endwhile;
endif;
?>

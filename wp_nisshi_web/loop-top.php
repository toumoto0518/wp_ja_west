<?php
if( have_posts() ) :
while ( have_posts() ) : the_post();
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('l-article__list')?>>
        <a class="" href="<?php the_permalink(); ?>">
            <img src="http://placehold.jp/300x210.png" alt="">
            <h4 class="l-article__list__title u-mgn--t8px"><?php the_title(); ?></h4>
            <div class="l-article__list__tag red u-mgn--t8px">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <span><?php the_category(); ?></span>
            </div>
            <p class="u-mgn--t8px"><?php the_excerpt(); ?></p>
        </a>
    </article>
<?php
endwhile;
endif;
?>
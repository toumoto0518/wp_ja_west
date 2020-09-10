<!-- 人気の記事ワードプレス -->
<?php
	setPostViews(get_the_ID());
	query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=3&order=DESC');
	while(have_posts()) : the_post();
?>

            <article class="l-article__list">
                <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post-thumbnail'); } ?>
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
            </article>

<?php endwhile; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>
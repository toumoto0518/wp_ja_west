<?php
/*アイキャッチ画像を使用可能にする*/
add_theme_support('post-thumbnails');

// アーカイブページ
function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; //任意のスラッグ名
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );




//ページナビ設定
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 5,
  'paged' => $paged
);

$my_query = new WP_Query( $args );




/*カスタムメニュー機能*/
add_theme_support('menus');

/*ウィジェット*/
register_sidebar(array(
     'name' => 'sidebar' ,
     'id' => 'sidebar' ,
     'before_widget' => '<div class="widget">',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));

/*ウィジェット02*/
register_sidebar(array(
     'name' => 'sidebar02' ,
     'id' => 'sidebar02' ,
     'before_widget' => '<div class="widget02">',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));

/*検索エリアウィジェット追加*/
register_sidebar(array(
     'name' => 'search' ,
     'id' => 'search' ,
     'before_widget' => '<div class="search_area">',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));

/*コメント欄*/
add_filter('comment_form_default_fields','my_comment_form_default_fields');
function my_comment_form_default_fields($args){
	$args['author'] = ''; // 「名前」を削除
	$args['email'] = ''; // 「メールアドレス」を削除
	$args['url'] = ''; //「ウェブサイト」を削除
	return $args;
}
// 固定ページ画像の画像パス自動挿入
function imagepassshort($arg) {
$content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');


//固定ページ自動pタグ削除
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
    global $post;
    $remove_filter = false;

    $arr_types = array('page'); //自動整形を無効にする投稿タイプを記述 ＝固定ページ
    $post_type = get_post_type( $post->ID );
    if (in_array($post_type, $arr_types)){
                $remove_filter = true;
        }

    if ( $remove_filter ) {
        remove_filter('the_content', 'wpautop');
        remove_filter('the_excerpt', 'wpautop');
    }

    return $content;
}

//投稿ページのみ検索対象
function my_posts_search( $search, $wp_query ){
	// 検索結果ページ・メインクエリ・管理画面以外の条件が揃った場合
    if ( $wp_query->is_search() && $wp_query->is_main_query() && !is_admin() ){
		// 検索結果を投稿ページのみとする
    	$search .= " AND post_type = 'post' ";
    }
	return $search;
}
add_filter('posts_search','my_posts_search', 99, 2);



//トップページの記事一覧を３件だけループ
function five_posts( $query ) {
    // 指定したページとメインクエリの場合に限定
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', 'post' );
        $query->set( 'posts_per_page', '6' );
    }
}

add_action( 'pre_get_posts', 'five_posts' );



?>

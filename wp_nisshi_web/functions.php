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


//Custom CSS Widget　投稿ページに独自のCSSを適用する
add_action('admin_menu', 'custom_css_hooks');
add_action('save_post', 'save_custom_css');
add_action('wp_head','insert_custom_css');
function custom_css_hooks() {
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'post', 'normal', 'high');
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'page', 'normal', 'high');
}
function custom_css_input() {
	global $post;
	echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="'.wp_create_nonce('custom-css').'" />';
	echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css',true).'</textarea>';
}
function save_custom_css($post_id) {
	if (!wp_verify_nonce($_POST['custom_css_noncename'], 'custom-css')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	$custom_css = $_POST['custom_css'];
	update_post_meta($post_id, '_custom_css', $custom_css);
}
function insert_custom_css() {
	if (is_page() || is_single()) {
		if (have_posts()) : while (have_posts()) : the_post();
			echo '<style type="text/css">'.get_post_meta(get_the_ID(), '_custom_css', true).'</style>';
		endwhile; endif;
		rewind_posts();
	}
}


//人気の記事トップページ用
/* 人気記事一覧
---------------------------------------------------------- */
//記事閲覧数を取得する
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0 View";
    }
    return $count.' Views';
  }
  //記事閲覧数を保存する
  function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
    }else{
      $count++;
      update_post_meta($postID, $count_key, $count);
    }
  }
  //headに出力されるタグを削除(閲覧数を重複してカウントするのを防止するため)
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);





  ////////////////////どのページのアーカイブか判断する
  function my_archive_title($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false ); 
      } elseif ( is_tag() ) { 
          $title = single_tag_title( '', false ); 
      } 
      $title = $title. ''; 
      return $title; 
  }; 
  add_filter( 'get_the_archive_title', 'my_archive_title');


?>

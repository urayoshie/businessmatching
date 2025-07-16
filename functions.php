<?php
/*----------------------------------------------------------*/
/* 投稿にアイキャッチ画像追加 */
/*----------------------------------------------------------*/
add_theme_support('post-thumbnails');


/*----------------------------------------------------------*/
/* 投稿アーカイブページの表示設定 */
/*----------------------------------------------------------*/
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //URLとして使いたい文字列
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/*----------------------------------------------------------*/
/* PCとSPで表示件数変更 */
/*----------------------------------------------------------*/
function mobile_posts_per_page( $query ) {
  if ( ! is_admin() && wp_is_mobile() && $query->is_main_query() ) {
      $query->set( 'posts_per_page', 10 ); //10件表示
  }
}
add_action( 'pre_get_posts', 'mobile_posts_per_page' );

/*----------------------------------------------------------*/
// 2024年イベントモーダル用
/*----------------------------------------------------------*/
add_action('wp_ajax_load_past_event', 'load_past_event_content');
add_action('wp_ajax_nopriv_load_past_event', 'load_past_event_content');

function load_past_event_content() {
    // テーマ内の past-event.php を読み込んで出力
    get_template_part('past-event'); // past-event.php を include
    wp_die(); // 処理終了
}
function localize_theme_url() {
    wp_enqueue_script('common-js', get_template_directory_uri() . '/assets/js/common.js', array('jquery'), null, true);
    wp_localize_script('common-js', 'themeData', array(
        'themeURL' => get_template_directory_uri(),
    ));
}
add_action('wp_enqueue_scripts', 'localize_theme_url');
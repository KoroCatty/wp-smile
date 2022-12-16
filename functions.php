<?php
get_template_part('Function/Enqueue'); 

/*******************************
 Title Name in each page
 ****************************/
add_theme_support( 'title-tag' ); // タイトル名変更できるようにする
add_theme_support( 'post-thumbnails' ); // アイキャッチ画像
add_theme_support( 'menus' ); // menu
add_theme_support('widgets'); // Widgets

/*******************************
 タイトルタグの区切り文字をエン・ダッシュから縦線に変更する 第二は自由な関数名
 ****************************/
add_filter( 'document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}

/*******************************
  タイトルタグのテキストを自由に変更する
 ****************************/
add_filter( 'document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title) {
  if (is_home() ) {
    unset($title['tagline']); //タグラインを削除
    $title['title'] = 'Kaz_businessは成功します。'; // Change text
  }
  return $title;
}

/*******************************
 コメント入力フォーム以外のフォームの編集するための関数定義
 ****************************/
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields( $args ) {
  $args['url'] = ''; //サイトを削除
  $args['author'] = ''; //名前を削除
  $args['email'] = ''; //メルアドを削除
  return $args;
}

/*******************************
 Topページのみフックをかけて、投稿記事の数を制御する
 ****************************/
add_action( 'pre_get_posts', 'my_pre_get_posts' );
function my_pre_get_posts($query) {
  // 管理画面、メインクエリ以外には設定しない
  if ( is_admin() || ! $query->is_main_query() ){
    return;
  }
  // トップページの場合
  if ( $query->is_home() ){
    $query->set( 'posts_per_page', 5 );
    return;
  }
}

/*******************************
 タグなどの自動整形機能の無効化・有効化
 ****************************/
add_action( 'wp' , 'my_wpautop');
function my_wpautop() {
  if ( is_page('contact')) {
    remove_filter( 'the_content', 'wpautop');
  }
}

/*******************************

 ****************************/


/*******************************
 
 ****************************/

/*******************************
 
 ****************************/
/*******************************
 
 ****************************/
/*******************************
 
 ****************************/

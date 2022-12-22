<?php 

function load_css()
{
  // Connect to Bootstrap CSS (not npm経由なので消してもいい)
  // wp_register_style(
  //   'bootstrap',
  //   get_template_directory_uri() . '/css/bootstrap.min.css',
  //   array(),
  //   false, //バージョン
  //   'all', //メディアクエリ,responsive design
  // );
  // wp_enqueue_style('bootstrap'); //呼び出し

  // Connect to app.css(This has to be after Bootstrap)
  // wp_register_style(
  //   'main',
  //   get_template_directory_uri() . '/dist/app.css',
  //   array(),
  //   false,
  //   'all',
  // );
  wp_enqueue_style('main');

  // Font Awesome
  wp_enqueue_style( 'font-awesome', "https://kit.fontawesome.com/f1ec62d0b6.js");
}

add_action('wp_enqueue_scripts', 'load_css');


// Bootstrap JS and jQuery
function load_js()
{
  wp_enqueue_script('jquery');// jQuery is included in WP but still we have to enqueue this 
  
// Connect to Bootstrap CSS (not npm経由なので消してもいい)
  // wp_register_style(
  //   'bootstrap',
  //   get_template_directory_uri() . '/js/bootstrap.min.js',
  //   'jquery',
  //   false,
  //   'true',
  // );
  // wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');





/*******************************
 ページ毎に読み込むJSを切り替える
 ****************************/
// function my_scripts_method() {
//     // 条件分岐してスクリプトのパスを定義
//     if (is_front_page()){
//         $scriptPath =  '/dist/app.js';
  
//     } else if( is_page("about-us")){
//       $scriptPath =  '/dist/about.js';

//     } else if( is_single()){
//       $scriptPath =  '/dist/about.js';
  
//     } else if( is_archive()){
//       $scriptPath =  '/dist/about.js';
  
//   }else {
//         $scriptPath =  '/dist/contact.js';
//     }
  
    // 定義したパスを使ってスクリプトファイルを読み込む
    // wp_enqueue_script(
    //     'custom_script',
    //     get_template_directory_uri() . $scriptPath,
    //     ['jquery'],
    //     false,
    //     'true',
    // );

  // //同様に共通スクリプトを読み込む場合
  // wp_register_script(
  //   'app',
  //   get_template_directory_uri() . '/dist/app.js',
  //   ['jquery'],
  //   false,
  //   'true',
  // );
  // wp_enqueue_script('app');
  // }
  // add_action('wp_enqueue_scripts', 'my_scripts_method');
  
    
  function enqueue_styles_scripts_versioning() {
 /*******************************
 ページ毎に読み込むJSを切り替える      // 条件分岐してスクリプトのパスを定義
 ****************************/
    if (is_front_page()){
      $scriptPath =  '/dist/app.js';

  } else if( is_page("about-us")){
    $scriptPath =  '/dist/about.js';

  } else if( is_single()){
    $scriptPath =  '/dist/about.js';

  } else if( is_archive()){
    $scriptPath =  '/dist/about.js';

}else {
      $scriptPath =  '/dist/contact.js';
  }
  
// JS, CSS enqueuing with filetime() 
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/dist/app.css', array(), filemtime(get_template_directory() . '/dist/app.css'), false);
    
  wp_enqueue_script( 'main-styles', get_template_directory_uri() .  $scriptPath, ['jquery'], filemtime(get_template_directory() .  $scriptPath ), true );


}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_scripts_versioning' );
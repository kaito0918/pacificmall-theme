<?php 
function my_enqueue_scripts() {
    $uri = get_template_directory_uri();

    // jQuery を読み込む（WordPress 同梱版）
    wp_enqueue_script('jquery');

    // 独自のJSファイル
    wp_enqueue_script(
        'bundle_js',                          // ハンドル名（識別子）
        $uri . '/assets/js/bundle.js',        // 読み込むファイルのURL
        array('jquery'),                      // 依存関係（先にjQueryを読み込む）
        null,                                 // バージョン（省略可）
        true                                  // フッターに読み込むか
    );

    // 独自のCSSファイル
    wp_enqueue_style(
        'my_style',                           // ハンドル名
        $uri . '/assets/css/styles.css',      // 読み込むファイルのURL
        array(),                              // 依存関係
        null                                  // バージョン
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

register_nav_menus(
    array (
    'place_global' => 'グローバル',
    'place_footer' => 'フッターナビ'
     )   
);

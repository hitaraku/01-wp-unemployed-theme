<?php


function shortcode_empty_paragraph_fix($content) {
    $array = array (
        '<p>[' => '[',
        ']</p>' => ']',
        ']<br />' => ']'
    );
 
    $content = strtr($content, $array);
    return $content;
}
add_filter('the_content', 'shortcode_empty_paragraph_fix');


/*===============================
  ショートコード
===============================*/
// LP用のコンテンツ幅イメージ(PC)
function lpimgpcFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    
	return '<div class="lpimg-pc">' . $content . '</div>';
}
add_shortcode('lpimgpc', 'lpimgpcFunc');

// LP用のコンテンツ幅イメージ(スマホ＆タブ)
function lpimgspFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    
	return '<div class="lpimg-sp">' . $content . '</div>';
}
add_shortcode('lpimgsp', 'lpimgspFunc');

// PCのみ表示
function pcFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    
	return '<div class="smanone">' . $content . '</div>';
	
}
add_shortcode('pc', 'pcFunc');

// スマホとタブのみ表示
function mobileFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    
	return '<div class="pcnone">' . $content . '</div>';
	
}
add_shortcode('pc', 'pcFunc');

// ショートコード【ボタン】
function btnFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'class' => '',
		'position' => '',
    ), $atts ) );
    
	return '<div class="btn-wrap  align' . $position. ' ' . $class. '">' . $content . '</div>';
	
}
add_shortcode('btn', 'btnFunc');

//カラムwrap
function colwrapFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
	), $atts ) );
     
    return '<div class="colwrap clearfix">' . do_shortcode($content) . '</div>';
}
add_shortcode('colwrap', 'colwrapFunc');

//2カラム
function col2Func( $atts, $content = null ) {
    extract( shortcode_atts( array(
	), $atts ) );
     
    return '<div class="col2">' . do_shortcode($content) . '</div>';
}
add_shortcode('col2', 'col2Func');

//3カラム
function col3Func( $atts, $content = null ) {
    extract( shortcode_atts( array(
	), $atts ) );
     
    return '<div class="col3">' . do_shortcode($content) . '</div>';
}
add_shortcode('col3', 'col3Func');

//fbの投稿埋め込み
function fbFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
	), $atts ) );
     
    return '<div class="fb-posts">' . do_shortcode($content) . '</div>';
}
add_shortcode('fb', 'fbFunc');

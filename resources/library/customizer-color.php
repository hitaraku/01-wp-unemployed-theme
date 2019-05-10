<?php

//テーマカスタマイザーで編集しない方は削除して下さい（ここから）

function fanfare_customize_register($wp_customize) {

$wp_customize->add_section( 'fanfare_logo_image', array(
'title' => 'ロゴ画像',
'description' => '<span style="font-size:10px;">画像の高さは40pxまでで設定してください</span>',
'priority' => 10,
) );
 
$wp_customize->add_setting( 'fanfare_logo_image', array(
'default' => '',
'type' => 'option',
'capability' => 'edit_theme_options',
) );
 
$wp_customize->add_control( new WP_Customize_Image_Control(
$wp_customize,
'logo_Image',
array(
'label' => '画像',
'section' => 'fanfare_logo_image',
'settings' => 'fanfare_logo_image',
)
) );

    
    // 色の変更
    $wp_customize->add_section( 'fanfare_menu_customize', array(
    'title' => __( 'サイトカラー（色）', 'fanfare' ),
    'priority' => 30,
    ) );
	
	$wp_customize->add_setting( 'fanfare_main_color', array( 'default' => '#80deea', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_main_color', array(
    'label' => __( '1-A.ヘッダーの色（メインカラー）', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_main_color',
    ) ) );

	$wp_customize->add_setting( 'fanfare_main_color2', array( 'default' => '#80deea', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_main_color2', array(
    'label' => __( '1-B.ヘッダーの色（グラデーションにする場合1-Aと別の色を）', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_main_color2',
    ) ) );

	$wp_customize->add_setting( 'fanfare_menu_logocolor', array( 'default' => '#333333', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_menu_logocolor', array(
    'label' => __( '2.ヘッダー部分文字色', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_menu_logocolor',
    ) ) );


	$wp_customize->add_setting( 'fanfare_left_menu', array( 'default' => '#08a8f3', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_left_menu', array(
    'label' => __( '3.SP&Tablet左メニューカラー,検索ボタン,ナビドロップダウン背景色', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_left_menu',
    ) ) );


	$wp_customize->add_setting( 'fanfare_navi_text', array( 'default' => '#06a9f4', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_navi_text', array(
    'label' => __( '4.ナビメニューの文字色', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_navi_text',
    ) ) );


	$wp_customize->add_setting( 'fanfare_headnavimo_color', array( 'default' => '#1ab3ff', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_headnavimo_color', array(
    'label' => __( '5.ナビメニューの文字色(マウスオン）', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_headnavimo_color',
    ) ) );


	$wp_customize->add_setting( 'fanfare_navi_moback', array( 'default' => '#08a8f3', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_navi_moback', array(
    'label' => __( '6.ナビメニュー背景色(マウスオン）', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_navi_moback',
    ) ) );


    $wp_customize->add_setting( 'fanfare_maintext_color', array( 'default' => '#333333', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_maintext_color', array(
    'label' => __( '7.メインの文字色', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_maintext_color',
    ) ) );
  

    $wp_customize->add_setting( 'fanfare_h_color', array( 'default' => '#7d9ee0', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_h_color', array(
    'label' => __( '8.見出しキーカラー(H2,H3,H4)', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_h_color',
    ) ) );

    $wp_customize->add_setting( 'fanfare_h2font_color', array( 'default' => '#ffffff', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_h2font_color', array(
    'label' => __( '9.見出し2(H2)文字色', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_h2font_color',
    ) ) );

	$wp_customize->add_setting( 'fanfare_point_color', array( 'default' => '#ff7f50', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_point_color', array(
    'label' => __( '10.ポイントカラー背景色', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_point_color',
    ) ) );

    $wp_customize->add_setting( 'fanfare_pointfont_color', array( 'default' => '#ffffff', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_pointfont_color', array(
    'label' => __( '11.ポイントカラー文字色', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_pointfont_color',
    ) ) );

	$wp_customize->add_setting( 'fanfare_cta_color', array( 'default' => '#cccccc', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_cta_color', array(
    'label' => __( '12.CTA背景色(濃いめ推奨）', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_cta_color',
    ) ) );


    $wp_customize->add_setting( 'fanfare_footer_color', array( 'default' => '#1a1a1a', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_footer_color', array(
    'label' => __( '13.フッター背景色', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_footer_color',
    ) ) );

    $wp_customize->add_setting( 'fanfare_footertext_color', array( 'default' => '#b3b3b3', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_footertext_color', array(
    'label' => __( '14.フッター文字色', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_footertext_color',
    ) ) );

    $wp_customize->add_setting( 'fanfare_footerlink_color', array( 'default' => '#ffffff', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fanfare_footerlink_color', array(
    'label' => __( '15.フッターリンク文字色', 'fanfare' ),
    'section' => 'fanfare_menu_customize',
    'settings' => 'fanfare_footerlink_color',
    ) ) );

         }
    add_action('customize_register', 'fanfare_customize_register');
    
    function fanfare_customize_css()
    {
    //初期カラー
	$menu_main = get_theme_mod( 'fanfare_main_color', '#80deea');
	$menu_main2 = get_theme_mod( 'fanfare_main_color2', '#80deea');
	$menu_logocolor = get_theme_mod( 'fanfare_menu_logocolor', '#ffffff');
	$menu_leftmenu = get_theme_mod( 'fanfare_left_menu', '#00acc1');
	$menu_navitext = get_theme_mod( 'fanfare_navi_text', '#ffffff');
    $menu_headnavimo = get_theme_mod( 'fanfare_headnavimo_color', '#16a5e2');
	$menu_navimo = get_theme_mod( 'fanfare_navi_moback', '#dce5ff');
	$menu_maintext = get_theme_mod( 'fanfare_maintext_color', '#333333');
    $menu_h = get_theme_mod( 'fanfare_h_color', '#06a9f4');	
    $menu_h2font = get_theme_mod( 'fanfare_h2font_color', '#ffffff');   
    $menu_point = get_theme_mod( 'fanfare_point_color', '#06a9f4');
    $menu_pointfont = get_theme_mod( 'fanfare_pointfont_color', '#ffffff');
	$menu_cta = get_theme_mod( 'fanfare_cta_color', '#FF9800'); 
    $menu_footer = get_theme_mod( 'fanfare_footer_color', '#1A237E');    
    $menu_footertext = get_theme_mod( 'fanfare_footertext_color', '#b3b3b3');   
    $menu_footerlink = get_theme_mod( 'fanfare_footerlink_color', '#ffffff');
	$menu_totop = get_theme_mod( 'fanfare_totop_color', '#ffc107');
?>

<style type="text/css">




/*********************************************************
　カスタマイザーのサイトカラー対応部分
*********************************************************/
/*===============================
  1-AB.ヘッダーの背景色（メインカラー）
===============================*/
#header-upper-area {
	background: -webkit-linear-gradient(left, <?php echo $menu_main;?>, <?php echo $menu_main2;?>); 
	background: linear-gradient(to right, <?php echo $menu_main;?>, <?php echo $menu_main2;?>); 
}
/*===============================
  2.ヘッダー部分文字色
===============================*/
#left-menu { color: <?php echo $menu_logocolor;?>;}
header .sitename a { color: <?php echo $menu_logocolor;?>;}
header h1 { color: <?php echo $menu_logocolor;?>;}
header .descr { color: <?php echo $menu_logocolor;?>;}
.menu-title { color: <?php echo $menu_logocolor;?>;}
header .sitename { color: <?php echo $menu_logocolor;?>;}

/*===============================
3.SP&Tablet左メニューカラー
===============================*/
.left-menu-header { background:<?php echo $menu_leftmenu;?>;}
#left-menu-wrap h4 { background:<?php echo $menu_leftmenu;?>;}
#search-button { background:<?php echo $menu_leftmenu;?>;}
#main-navigation li ul li a{ background:<?php echo $menu_leftmenu;?>;}
/*===============================
4.ナビメニューの文字色
===============================*/
#spnaviwrap .spnavi ul li a { color: <?php echo $menu_navitext;?>;}
#navi-large-area a { color: <?php echo  $menu_navitext;?>;}
#search-button { color: <?php echo  $menu_navitext;?>;}
#main-navigation ul li a{ color: <?php echo  $menu_navitext;?>;}
#main-navigation li ul li a{ color: <?php echo  $menu_navitext;?>;}
/*===============================
  5.ナビメニューの文字色(MO)
===============================*/
#main-navigation li a:hover {color: <?php echo $menu_headnavimo;?>;}


/*===============================
  6.ナビメニュー背景色（MO)
===============================*/
#main-navigation li a:hover{ background:<?php echo $menu_navimo;?>;}


/*===============================
  7.メインの文字色
===============================*/
body { color:<?php echo $menu_maintext;?>;}
.post h3 {	color:<?php echo $menu_maintext;?>;}


/*===============================
  8.見出し色(H2,H3,H4)
===============================*/
.post h2{background: <?php echo $menu_h;?>;}
h2{background: <?php echo $menu_h;?>;}
.post .fukidasi h2{background: <?php echo $menu_h;?>;}
.post .material h2{background: <?php echo $menu_h;?>;}
.post .fukidasi h2:after{border-top: 15px solid <?php echo $menu_h;?>;}
.post .shadow h2{background: <?php echo $menu_h;?>;}
.post .ribbon h2{background: <?php echo $menu_h;?>;}
.post .ribbon h2::before,
.post .ribbon h2::after{border-top: 5px solid <?php echo $menu_h;?>;}
.post .ribbon h2::before{border-left: 5px solid <?php echo $menu_h;?>;}
.post .ribbon h2::after{border-right: 5px solid <?php echo $menu_h;?>;}
.post .under-gradline h2{color:<?php echo $menu_h;?>;}
.post .under-gradline h2:after{
	background: -moz-linear-gradient(to right, <?php echo $menu_h;?>, transparent);
	background: -webkit-linear-gradient(to right, <?php echo $menu_h;?>, transparent);
	background: linear-gradient(to right, <?php echo $menu_h;?>, transparent);
}
.post .first-big h2{color:#1a1a1a;}
.post .first-big h2:first-letter {
	color:<?php echo $menu_h;?>;
	border-bottom:solid 3px <?php echo $menu_h;?>;
}
.post .hamiwaku h2{
	border-top: solid 1px <?php echo $menu_h;?>;
	border-bottom: solid 1px <?php echo $menu_h;?>;
	color:<?php echo $menu_h;?>;
}
.post .hamiwaku h2:before,.post .hamiwaku h2:after{
	background-color: <?php echo $menu_h;?>;
}
.post .chapter h2{
	border:1px solid <?php echo $menu_h;?>;
	color:<?php echo $menu_h;?>;
}
.post .chapter h2::after{color: <?php echo $menu_h;?>;}
.post .icon h2 {background:<?php echo $menu_h;?>;}
.post h3 {
	border-color: <?php echo $menu_h;?>;
	color:<?php echo $menu_h;?>;
}
.post .h3underline h3 {
	border-color: <?php echo $menu_h;?>;
	color:<?php echo $menu_h;?>;
}
.post .thin-underline h3 {
	border-color: <?php echo $menu_h;?>;
	color:<?php echo $menu_h;?>;
}
.post .lh3 h3{
	border-color: <?php echo $menu_h;?>;
	color:<?php echo $menu_h;?>;
}
.post .stripes h3:after {
background: -webkit-repeating-linear-gradient(-45deg, <?php echo $menu_h;?>, <?php echo $menu_h;?> 0px, #fff 2px, #fff 2px);
background: repeating-linear-gradient(-45deg, <?php echo $menu_h;?>, <?php echo $menu_h;?> 0px, #fff 2px, #fff 2px);
}
.post .box2 h3{color: <?php echo $menu_h;?>;}
.post .box2 h3::before{color: <?php echo $menu_h;?>;}
.post .box2 h3::after{color: #A1B8D1;}
.post h4{	color:<?php echo $menu_h;?>;}
.post .trans-color h4{	color:<?php echo $menu_h;?>;}
.post .cube-icon h4{	color:<?php echo $menu_h;?>;}
.post .left-border h4{border-color: <?php echo $menu_h;?>;}
.post .left-thin-border h4{border-color: <?php echo $menu_h;?>;}
#newposts h4.widgettitle {
background: <?php echo $menu_h;?>;
}
.sankaku {
    border-top: 30px solid <?php echo $menu_h;?>;
}
#side aside h4{background:<?php echo $menu_h;?>;}

/*===============================
  9.見出し2（H2)文字色
===============================*/
h2{color: <?php echo $menu_h2font;?>;}
.post .material h2{color: <?php echo $menu_h2font;?>;}
h2.toppage{color:#1a1a1a;}
h2.archiev{color:#1a1a1a;}
.post h2{color: <?php echo $menu_h2font;?>;}
.post .ribbon h2{color: <?php echo $menu_h2font;?>;}
.post .icon h2 {color: <?php echo $menu_h2font;?>;}
.post .icon h2:before{color: <?php echo $menu_h2font;?>;}
#newposts h4.widgettitle {color: <?php echo $menu_h2font;?>;}
#side aside h4{color: <?php echo $menu_h2font;?>;}


/*===============================
  10.ポイントカラー背景色
===============================*/
.category_info p{background: <?php echo $menu_point;?>;}
.prof-under-article{background: <?php echo $menu_point;?>;}
#prof-kijisita{background: <?php echo $menu_point;?>;}
.blogbox p { color: <?php echo $menu_point;?>;}
.koukai { color: <?php echo $menu_point;?>;}
.koushin { color: <?php echo $menu_point;?>;}
#kanren .clearfix dt .blog_info {background: <?php echo $menu_point;?>;}
.post ul li:before {background: <?php echo $menu_point;?>;}
ol li:before  {color: <?php echo $menu_point;?>;}
.page-template-page-one-column main ul li:before {background: <?php echo $menu_point;?>;}
.page-template-page-one-column main ol li:before {color: <?php echo $menu_point;?>;}
.blog-card-title::before {background: <?php echo $menu_point;?>;}
.share-wrap{background: <?php echo $menu_point;?>;}
.p-entry__push {background: <?php echo $menu_point;?>;}
.p-shareButton__a-cont{background: <?php echo $menu_point;?>;}
.flow {background: <?php echo $menu_point;?>;}
#toc_container p.toc_title{background: <?php echo $menu_point;?>;}
#toc_container p.toc_title:before{color: <?php echo $menu_point;?>;}
/*固定幅2のボタン*/
.btn-wrap.kotei2 a{ 
	background:<?php echo $menu_point;?>;
	border:1px solid <?php echo $menu_point;?>;
}
.btn-wrap.kotei2 a:hover{ 
	color:<?php echo $menu_point;?>;
	border:1px solid <?php echo $menu_point;?>;
}
.prev dt{background: <?php echo $menu_point;?>;}
.next dt{background: <?php echo $menu_point;?>;}
#under-navi{background: <?php echo $menu_point;?>;}
#topnews .clearfix dd .blog_info p { color: <?php echo $menu_point;?>;}
.tagcloud a{background: <?php echo $menu_point;?>;}
.kijisita-category a{background: <?php echo $menu_point;?>;}
#breadcrumb i.fa.fa-home{color: <?php echo $menu_point;?>;}
#breadcrumb i.fa.fa-folder{color: <?php echo $menu_point;?>;}
.readmore{color: <?php echo $menu_point;?>;}
/*===============================
  11.ポイントカラー文字色
===============================*/
.category_info p{ color: <?php echo $menu_pointfont;?>;}
.prof-under-article-title{ color: <?php echo $menu_pointfont;?>;}
.blog-card-title::before{ color: <?php echo $menu_pointfont;?>;}
.p-entry__push{ color: <?php echo $menu_pointfont;?>;}
.p-entry__note{ color: <?php echo $menu_pointfont;?>;}
.p-shareButton__a-cont__btn p{ color: <?php echo $menu_pointfont;?>;}
.prev dt a{ color: <?php echo $menu_pointfont;?>;}
.next dt a{ color: <?php echo $menu_pointfont;?>;}
.tagcloud a{ color: <?php echo $menu_pointfont;?>;}
#side aside .tagcloud a{ color: <?php echo $menu_pointfont;?>;}
.kijisita-category a{ color: <?php echo $menu_pointfont;?>;}
/*===============================
  12.CTA背景色
===============================*/
#cta-area{
	border-color:<?php echo $menu_cta;?>;
	background:<?php echo $menu_cta;?>;
}

/*===============================
  13.フッター背景色
===============================*/
#footer {	background: <?php echo $menu_footer;?>;
	}

/*===============================
  14.フッター文字色
===============================*/
/*フッターの見出し*/
#footer h4 {
	color: <?php echo $menu_footertext;?>;
}
#footer h4 a {
	color: <?php echo $menu_footertext;?>;
}
/*フッターナビの色*/
#footer-navigation li a{
	color: <?php echo $menu_footertext;?>;
}

/*フッターリスト表示*/ 
#footer_w ul li {
	color: <?php echo $menu_footertext;?>;
}
/* フッターcopyrightの文字色 */
#footer .copy {
	color: <?php echo $menu_footertext;?>;
}
/* フッターのテキストの色　*/
#footer p {
	color:<?php echo $menu_footertext;?>;
}
/*　フッターのリンクテキストマウスオン時の色　*/	
#footer_w a:hover {
		color: <?php echo $menu_footertext;?>;
	}
/*===============================
  15.フッターリンク文字色
===============================*/
/*　フッターのリンクテキストの色　*/	
#footer_w a {
		color: <?php echo $menu_footerlink;?>;
	}
/*　フッターのサイトタイトル色　*/	
#footer .copy a {
		color: <?php echo $menu_footerlink;?>;
	}
/*　フッターのリストの点の色　*/	
#footer_w ul li a:before {
		color: <?php echo $menu_footerlink;?>;
}


/**********************************
 カスタマイザーの切替え部分反映用
**********************************/

/*アイキャッチ画像直後のプロフィール表示・非表示*/
#prof-upper-article{display:<?php echo get_option( 'fanfare_profile_upper' ); ?>;}
/*記事下のプロフィール表示・非表示*/
#prof-kijisita{display:<?php echo get_option( 'fanfare_profile_kijisita' ); ?>;}


/*コメント部分の表示・非表示*/
#comments {display:<?php echo get_option( 'fanfare_comment_design' ); ?>;}

</style>

<?php
    }
    add_action( 'wp_head', 'fanfare_customize_css');
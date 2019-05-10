<?php

//カスタマイザー「便利機能」
function fanfare_benri_customizer($wp_customize) {
    $wp_customize->add_section( 'benri_section', array(
        'title'          =>'便利設定',
        'priority'       => 30,
    ));

    $wp_customize->add_setting('other_options_ga', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'other_options_ga', array(
	    'label' =>'Googleアナリティクス',
		'description' => '<span style="font-size:10px;">入力例：「UA-xxxxxxxx-xx」<br>※All in One SEO Packなどのプラグインなどで設定している場合は設定しない。アクセス数が重複します。</span>',
	    'settings' => 'other_options_ga',
	    'section' => 'benri_section',
	));

    $wp_customize->add_setting('other_options_headcode', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'other_options_headcode', array(
	    'label' =>'headタグ',
		'description' => '<span style="font-size:10px;"><head>タグ内に解析コードなどを入力したい場合はこちら。</span>',
	    'settings' => 'other_options_headcode',
	    'type' => 'textarea',
	    'section' => 'benri_section',
	));
	$wp_customize->add_setting('other_options_bodycode', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'other_options_bodycode', array(
	    'label' =>'<body>直後へタグ設置',
		'description' => '<span style="font-size:10px;"><body>直後に解析コードなどを入力したい場合はこちら。</span>',
	    'settings' => 'other_options_bodycode',
	    'type' => 'textarea',
	    'section' => 'benri_section',
	));

    $wp_customize->add_setting('other_options_bodycode2', array(
	   'type'  => 'option',
	));
	$wp_customize->add_control( 'other_options_bodycode2', array(
	    'label' =>'</body>直前へタグ設置',
		'description' => '<span style="font-size:10px;"></body>直前に解析コードなどを入力したい場合はこちら。</span>',
	    'settings' => 'other_options_bodycode2',
	    'type' => 'textarea',
	    'section' => 'benri_section',
	));
    //コメント欄の表示・非表示
	//セッティング
	$wp_customize->add_setting( 'fanfare_comment_design', array(
	'default'   => 'null',
	'type'      => 'option',
));
	//コントロール
	$wp_customize->add_control( 'fanfare_other_comment_design', array(
	'settings'  => 'fanfare_comment_design', // settingのキー
	'label'     => 'コメント欄の表示・非表示切替', // ラベル名
	'description' => '<span style="font-size:11px;">コメント欄の表示・非表示が切り替えられます。</span>',
	'section'   => 'benri_section', // sectionを指定
	'type' => 'select',
		'choices' => array(
		null => '表示',
		'none' => '非表示',
),
));
}
add_action( 'customize_register', 'fanfare_benri_customizer' );

////////////////////////////////////
// カスタマイザー（デザイン設定）
////////////////////////////////////
function fanfare_other_settings_customizer( $wp_customize ) {

  // この中に追加していく（セクション、セッティング、コントロール）
	//セクション
	$wp_customize->add_section( 'fanfare_other_settings', array(
	'title'     => 'デザイン設定', // 項目名
	'priority'  => 35, // 優先順位
));


//アイキャッチ画像直後プロフィール
	//セッティング
	$wp_customize->add_setting( 'fanfare_profile_upper', array(
	'default'   => 'none',
	'type'      => 'option',
));
	//コントロール
	$wp_customize->add_control( 'fanfare_other_settings_prof_upper', array(
	'settings'  => 'fanfare_profile_upper', // settingのキー
	'label'     => 'アイキャッチ画像直後のプロフィール', // ラベル名
	'description' => '<span style="font-size:10px;">記事の初めのプロフィールを表示/非表示を選択します</span>',
	'section'   => 'fanfare_other_settings', // sectionを指定
	'type' => 'radio',
		'choices' => array(
		null => '表示',
		'none' => '非表示',
),
));

//記事下プロフィール
	//セッティング
	$wp_customize->add_setting( 'fanfare_profile_kijisita', array(
	'default'   => 'none',
	'type'      => 'option',
));
	//コントロール
	$wp_customize->add_control( 'fanfare_other_settings_prof_under', array(
	'settings'  => 'fanfare_profile_kijisita', // settingのキー
	'label'     => '記事の終わり部分のプロフィール', // ラベル名
	'description' => '<span style="font-size:10px;">記事の終わり部分のプロフィールを表示/非表示を選択します</span>',
	'section'   => 'fanfare_other_settings', // sectionを指定
	'type' => 'radio',
		'choices' => array(
		null => '表示',
		'none' => '非表示',
),
));

}
add_action( 'customize_register', 'fanfare_other_settings_customizer' );

////////////////////////////////////
// カスタマイザー（ヘッダー周りの設定）
////////////////////////////////////
function fanfare_header_customizer($wp_customize) {
    $wp_customize->add_section( 'fanfare_header_section', array(
        'title'          =>'ヘッダー周りの設定',
        'priority'       => 80,
    ));

//ロゴ寄せ
	//セッティング
	$wp_customize->add_setting( 'fanfare_logo_position', array(
	'default'   => 'fixed',
	'type'      => 'option',
));
	//コントロール
	$wp_customize->add_control( 'fanfare_header_logo_position', array(
	'settings'  => 'fanfare_logo_position', // settingのキー
	'label'     => 'サイトタイトルのポジション', // ラベル名
	'description' => '<span style="font-size:11px;">サイトタイトルのポジション切替え</span>',
	'section'   => 'fanfare_header_section', // sectionを指定
	'type' => 'radio',
		'choices' => array(
		'none' => '中央寄せ',
		'logoleft' => '左寄せ',
),
));

}
add_action( 'customize_register', 'fanfare_header_customizer' );



///////////////////////////////////////
// カスタマイザー（ヘッダー画像スマホ用）
///////////////////////////////////////
define('HEADERSP_SECTION', 'headersp_section'); //セクションIDの定数化
define('HEADERSP_IMAGE_URL', 'headersp_image_url'); //セッティングIDの定数化
function fanfare_theme_customizer( $wp_customize ) {
 $wp_customize->add_section( HEADERSP_SECTION , array(
 'title' => 'ヘッダー画像（スマホ＆タブレット用）', //セクション名
 'priority' => 70, //カスタマイザー項目の表示順
 'description' => 'スマホとタブレットで見たときのヘッダー画像の設定', //セクションの説明
 ) );
 
 $wp_customize->add_setting( HEADERSP_IMAGE_URL );
 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, HEADERSP_IMAGE_URL, array(
 'label' => 'ヘッダー画像（スマホ用）', //設定ラベル
 'section' => HEADERSP_SECTION, //セクションID
 'settings' => HEADERSP_IMAGE_URL, //セッティングID
 'description' => '※推奨サイズ1000px×1000px 画像をアップロードするとスマホとタブレットから見たヘッダー画像になります。設定しなければPCと同じものになります。',
 ) ) );
 
}
add_action( 'customize_register', 'fanfare_theme_customizer' );//カスタマイザーに登録
 
//スマホ&タブレット用ヘッダー画像のURLの取得
function get_the_headersp_image_url(){
 return esc_url( get_theme_mod( HEADERSP_IMAGE_URL ) );
}


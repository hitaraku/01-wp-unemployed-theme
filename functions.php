<?php
// Add scripts and stylesheets
function startwordpress_scripts() {
    // vendors
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/vendors/css/grid.css', array());
	wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/vendors/css/ionicons.min.css' );

    // own
	wp_enqueue_style( 'blogcss', get_template_directory_uri() . '/resources/css/blog.css');
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
	wp_register_style('Lato', 'https://fonts.googleapis.com/css?family=Lato:300,300i,400');
	wp_enqueue_style( 'Lato');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
	add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
				<?php
						settings_fields( 'section' );
						do_settings_sections( 'theme-options' );
						submit_button();
				?>
		</form>
	</div>
<?php }

// Twitter
function setting_twitter() { ?>
	<input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

function custom_settings_page_setup() {
	add_settings_section( 'section', 'All Settings', null, 'theme-options' );
    add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
    add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );
    
    register_setting( 'section', 'twitter' );
    register_setting( 'section', 'github' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );

function setting_github() { ?>
	<input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

// Custom Post Type
function create_my_custom_post() {
    register_post_type( 'my-custom-post', 
        array(
            'labels' => array(
                'name' => __('My Custom Post'),
                'singular_name' => __('My Custom Post'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'menu',
                'editor',
                'thumbnail',
                'custom-fields'
            )
    ));
}

add_action( 'init', 'create_my_custom_post' );



// // Custom Post Type
// function create_my_custom_post() {
// 	register_post_type( 'my-custom-post',
// 			array(
// 			'labels' => array(
// 	'name' => __( 'My Custom Post' ),
// 	'singular_name' => __( 'My Custom Post' ),
// 			),
// 			'public' => true,
// 			'has_archive' => true,
// 			'supports' => array(
// 	'title',
// 	'editor',
// 	'thumbnail',
// 	'custom-fields'
// 			)
// 	));
// }
// add_action( 'init', 'create_my_custom_post' );

//更新日の追加
function get_mtime($format) {
    $mtime = get_the_modified_time('Ymd');
    $ptime = get_the_time('Ymd');
    if ($ptime > $mtime) {
        return get_the_time($format);
    } elseif ($ptime === $mtime) {
        return null;
    } else {
        return get_the_modified_time($format);
    }
}
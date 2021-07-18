<?php

/**
 * Lizzie Theme (Underscore) functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lizzie_Theme_(Underscore)
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.5');
}

if (!function_exists('lizzie_theme_underscore_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lizzie_theme_underscore_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Lizzie Theme (Underscore), use a find and replace
		 * to change 'lizzie-theme-underscore' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('lizzie-theme-underscore', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-header' => esc_html__('Top Menu', 'lizzie-theme-underscore'),
				'menu-footer' => esc_html__('Footer', 'lizzie-theme-underscore'),
				'menu-footer-lower' => esc_html__('Below Footer', 'lizzie-theme-underscore')
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'lizzie_theme_underscore_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'lizzie_theme_underscore_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lizzie_theme_underscore_content_width() {
	$GLOBALS['content_width'] = apply_filters('lizzie_theme_underscore_content_width', 640);
}
add_action('after_setup_theme', 'lizzie_theme_underscore_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lizzie_theme_underscore_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'lizzie-theme-underscore'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'lizzie-theme-underscore'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'lizzie_theme_underscore_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function lizzie_theme_underscore_scripts() {
	wp_enqueue_style('lizzie-theme-underscore-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('lizzie-theme-underscore-style', 'rtl', 'replace');



	wp_enqueue_script('lizzie-theme-underscore-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_script('lizzie-theme-underscore-js', get_template_directory_uri() . '/dist/app.js', array(), _S_VERSION, true);
}

add_action('wp_enqueue_scripts', 'lizzie_theme_underscore_scripts');

function lizzie_theme_underscore_inject_scripts() {
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<?php
}

add_action('wp_head', 'lizzie_theme_underscore_inject_scripts');

function lizzie_theme_underscore_enqueue_fonts() {

	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&display=swap', false );


}

add_action('wp_enqueue_scripts', 'lizzie_theme_underscore_enqueue_fonts');


/**
 * Allow for SVG types
 * https://wpengine.com/resources/enable-svg-wordpress/#Method_2_Manually_Enable_SVG_File_Uploads
 */
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
	if ( $wp_version !== '4.7.1' ) {
	   return $data;
	}
  
	$filetype = wp_check_filetype( $filename, $mimes );
  
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
  }, 10, 4 );
  
function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
echo '<style type="text/css">
		.attachment-266x266, .thumbnail img {
			width: 100% !important;
			height: auto !important;
		}
		</style>';
}
add_action( 'admin_head', 'fix_svg' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


require get_template_directory() . '/src/block-patterns.php';



/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

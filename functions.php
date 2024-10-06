<?php
/**
 * Clark functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Clark
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function clark_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Clark, use a find and replace
		* to change 'clark' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'clark', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'clark' ),
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
			'clark_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'clark_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clark_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clark_content_width', 640 );
}
add_action( 'after_setup_theme', 'clark_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clark_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'clark' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'clark' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clark_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clark_scripts() {
	wp_enqueue_style( 'clark-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'clark-style', 'rtl', 'replace' );


	//Enqueue Styles

	wp_enqueue_style( 'clark-font', "//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900", array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'clark-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'clark-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'clark-owl-carosel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'clark-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'clark-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'clark-aos', get_template_directory_uri() . '/assets/css/aos.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'clark-ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'clark-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'clark-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'clark-style-theme', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all' );


	// Enqueue Scriptss

	wp_enqueue_script( 'clark-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-animate-number', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'clark-main-theme', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'clark_scripts' );

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

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


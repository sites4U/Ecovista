<?php
/**
 * ecovista functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ecovista
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
function ecovista_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ecovista, use a find and replace
		* to change 'ecovista' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ecovista', get_template_directory() . '/languages' );

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
			'menu-header' => esc_html__( 'Menu Header', 'ecovista' ),
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
			'ecovista_custom_background_args',
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
add_action( 'after_setup_theme', 'ecovista_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ecovista_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ecovista_content_width', 640 );
}
add_action( 'after_setup_theme', 'ecovista_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ecovista_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ecovista' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ecovista' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ecovista_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ecovista_scripts() {

	wp_enqueue_style( 'ecovista-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.1' );
	wp_enqueue_style( 'swiper-slider', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '9.3.2' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), '1.0' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );
	wp_style_add_data( 'ecovista-style', 'rtl', 'replace' );


	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.0.min.js', array(), '3.7.0', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '9.3.2', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), '1.1.0', true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), '5.0.0', true );
	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array(), '2.2.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ecovista_scripts' );


function custom_customize_register($wp_customize) {

	// Header Fields START
	$wp_customize->add_section('header_section', array(
		'title'    => esc_html__('Шапка сайта', 'ecovista'),
		'priority' => 10,
	));

	// Header Text START
	$wp_customize->add_setting('header_text_left', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('header_text_left', array(
		'label'    => esc_html__('Текст в шапке', 'ecovista'),
		'section'  => 'header_section',
		'type'     => 'text',
	));
	// Header Text END

	// Header Text START
	$wp_customize->add_setting('header_phone', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('header_phone', array(
		'label'    => esc_html__('Телефон', 'ecovista'),
		'section'  => 'header_section',
		'type'     => 'text',
	));
	// Header Text END

	// Header Address START
	$wp_customize->add_setting('header_address', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('header_address', array(
		'label'    => esc_html__('Адрес', 'ecovista'),
		'section'  => 'header_section',
		'type'     => 'text',
	));
	// Header Address END

	// Header Schedule START
	$wp_customize->add_setting('header_schedule', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('header_schedule', array(
		'label'    => esc_html__('График работы', 'ecovista'),
		'section'  => 'header_section',
		'type'     => 'text',
	));
	// Header Schedule END

	// Header Twitter START
	$wp_customize->add_setting('header_twitter', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('header_twitter', array(
		'label'    => esc_html__('Twitter', 'ecovista'),
		'section'  => 'header_section',
		'type'     => 'text',
	));
	// Header Twitter END

	// Header Whatsapp START
	$wp_customize->add_setting('header_whatsapp', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('header_whatsapp', array(
		'label'    => esc_html__('Whatsapp', 'ecovista'),
		'section'  => 'header_section',
		'type'     => 'text',
	));
	// Header Whatsapp END

// Header Fields END

// Footer Fields START
	$wp_customize->add_section('footer_section', array(
		'title'    => esc_html__('Подвал сайта', 'ecovista'),
		'priority' => 11,
	));

	// Footer Text START
	$wp_customize->add_setting('footer_text_left', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('footer_text_left', array(
		'label'    => esc_html__('Текст в подвале', 'ecovista'),
		'section'  => 'footer_section',
		'type'     => 'textarea',
	));
	// Footer Text END

	// Footer Phone START
	$wp_customize->add_setting('footer_phone', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('footer_phone', array(
		'label'    => esc_html__('Телефон', 'ecovista'),
		'section'  => 'footer_section',
		'type'     => 'text',
	));
	// Footer Phone END

	// Footer Address START
	$wp_customize->add_setting('footer_address', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('footer_address', array(
		'label'    => esc_html__('Адрес', 'ecovista'),
		'section'  => 'footer_section',
		'type'     => 'text',
	));
	// Footer Address END

	// Footer Email START
	$wp_customize->add_setting('footer_email', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('footer_email', array(
		'label'    => esc_html__('Email', 'ecovista'),
		'section'  => 'footer_section',
		'type'     => 'text',
	));
	// Footer Email END

	// Footer Copyright START
	$wp_customize->add_setting('footer_copyright', array(
		'default'   => '',
		'sanitize_callback'   => 'sanitize_text_field',
	));
	$wp_customize->add_control('footer_copyright', array(
		'label'    => esc_html__('Copyright', 'ecovista'),
		'section'  => 'footer_section',
		'type'     => 'text',
	));
	// Footer Copyright END

// Footer Fields END



}

add_action('customize_register', 'custom_customize_register');


/** Add Class for menu links START */
function add_menu_link_class($atts, $item, $args) {
	$atts['class'] = 'anchor-link';
	return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);
/** Add Class for menu links END */


if ( ! function_exists( '_mwt_fw_filter_github_api_url' ) ) :
	function _mwt_fw_filter_github_api_url( $url ) {
		return 'https://api.github.com';
	}
endif;

add_filter( 'fw_github_api_url', '_mwt_fw_filter_github_api_url', 999 );
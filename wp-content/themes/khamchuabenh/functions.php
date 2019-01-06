<?php
/**
 * Khambenh Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Khambenh_Theme
 */

if ( ! function_exists( 'khambenh_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function khambenh_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Khambenh Theme, use a find and replace
		 * to change 'khambenh-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'khambenh-theme', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'khambenh-theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'khambenh_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'khambenh_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function khambenh_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'khambenh_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'khambenh_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function khambenh_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'khambenh-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'khambenh-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'khambenh_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function khambenh_theme_scripts() {
	wp_enqueue_style( 'khambenh-theme-style', get_stylesheet_uri() );

    wp_register_style('contact-form-7-css', plugins_url() . '/contact-form-7/includes/css/styles.css');
    wp_enqueue_style('contact-form-7-css');

    wp_register_style('rs-plugin-settings-css', get_template_directory_uri() . '/lib/revslider/public/assets/css/settings.css');
    wp_enqueue_style('rs-plugin-settings-css');

    wp_register_style('style-fonts-css', get_template_directory_uri() . '/lib/mixcolors/fonts/font-awesome.css');
    wp_enqueue_style('style-fonts-css');

    wp_register_style('style-fonts2-css', get_template_directory_uri() . '/lib/mixcolors/fonts/fonts.css');
    wp_enqueue_style('style-fonts2-css');

    wp_register_style('style-bootstap-css', get_template_directory_uri() . '/lib/mixcolors/css/bootstrap.css');
    wp_enqueue_style('style-bootstap-css');

    wp_register_style('style-bootstap-theme-css', get_template_directory_uri() . '/lib/mixcolors/css/bootstrap-theme.css');
    wp_enqueue_style('style-bootstap-theme-css');

    wp_register_style('style-bxslider-css', get_template_directory_uri() . '/lib/mixcolors/css/jquery.bxslider.css');
    wp_enqueue_style('style-bxslider-css');

    wp_register_style('style-main-css', get_template_directory_uri() . '/lib/mixcolors/css/style.css');
    wp_enqueue_style('style-main-css');

    wp_register_style('main-style-css', get_template_directory_uri() . '/lib/mixcolors/style.css');
    wp_enqueue_style('main-style-css');

    wp_register_style('A2A_SHARE_SAVE', plugins_url() . '/add-to-any/addtoany.min.css');
    wp_enqueue_style('A2A_SHARE_SAVE');

    wp_register_script('jquery-transit', get_template_directory_uri() . '/lib/SD-mobile-nav/js/jquery.transit.min.js', array('jquery', 'jquery-migrate'),'1.1', false);
    wp_enqueue_script('jquery-transit');

    wp_register_script('jquery.touchwipe', get_template_directory_uri() . '/lib/SD-mobile-nav/js/jquery.touchwipe.min.js', array('jquery', 'jquery-migrate'),'1.1', false);
    wp_enqueue_script('jquery.touchwipe');

    wp_register_script('jquery.sidr', get_template_directory_uri() . '/lib/SD-mobile-nav/js/jquery.sidr.js', array('jquery', 'jquery-migrate'),'1.1', false);
    wp_enqueue_script('jquery.sidr');

    wp_register_script('mobile.nav.frontend', get_template_directory_uri() . '/lib/SD-mobile-nav/js/mobile.nav.frontend.js', array('jquery', 'jquery-migrate'),'1.1', false);
    wp_enqueue_script('mobile.nav.frontend');

    wp_register_script('jquery.themepunch.tools', get_template_directory_uri() . '/lib/revslider/public/assets/js/jquery.themepunch.tools.min.js', array('jquery', 'jquery-migrate'),'1.1', false);
    wp_enqueue_script('jquery.themepunch.tools');

    wp_register_script('jquery.themepunch.revolution', get_template_directory_uri() . '/lib/revslider/public/assets/js/jquery.themepunch.revolution.min.js', array('jquery', 'jquery-migrate'),'1.1', false);
    wp_enqueue_script('jquery.themepunch.revolution');

    wp_register_script('front.min', get_template_directory_uri() . '/lib/table-of-contents-plus/front.min.js', array('jquery', 'jquery-migrate'),'1.1', true);
    wp_enqueue_script('front.min');

    wp_register_script('jquery.flexslider', get_template_directory_uri() . '/lib/ml-slider/assets/sliders/flexslider/jquery.flexslider-min.js', array('jquery', 'jquery-migrate', 'wp-embed'),'1.1', true);
    wp_enqueue_script('jquery.flexslider');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery', 'jquery-migrate', 'wp-embed'),'1.1', true);
    wp_enqueue_script('bootstrap');

    /*wp_enqueue_script( 'khambenh-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'khambenh-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}*/
}
add_action( 'wp_enqueue_scripts', 'khambenh_theme_scripts' );

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


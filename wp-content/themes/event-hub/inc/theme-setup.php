<?php
if ( ! function_exists( 'event_hub_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function event_hub_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on event-hub, use a find and replace
	 * to change 'event-hub' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'event-hub', get_template_directory() . '/languages' );

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
        add_image_size( 'event-hub-recent-news', 360, 450, true );
        add_image_size( 'event-hub-related-post', 360, 250, true );
        add_image_size( 'event-hub-small-thumb', 80, 66, true );
        add_image_size( 'event-hub-sponsors-logo', 252, 136, true );
        add_image_size( 'event-hub-sponsors1', 260, 265, true );
        add_image_size( 'event-hub-sponsors2', 360, 262, true );
        add_image_size( 'event-hub-sponsors3', 360, 434, true );
        add_image_size( 'event-hub-speakers-small', 52, 52, true );

	// This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'event-hub' ),
            'footer' => esc_html__( 'Footer Menu', 'event-hub' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'event_hub_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
        
        //woocommerce support
        add_theme_support( 'woocommerce' );
}
endif;
add_action( 'after_setup_theme', 'event_hub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function event_hub_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'event_hub_content_width', 640 );
}
add_action( 'after_setup_theme', 'event_hub_content_width', 0 );



<?php
/**
 * esportsWP functions and definitions
 *
 * @package esportsWP
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'esportswp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function esportswp_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on esportsWP, use a find and replace
	 * to change 'esportswp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'esportswp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('image-slider', 940, 420, true);
	add_image_size('small-thumbnail', 285, 160, true);
	add_image_size('banner-thumbnail', 940, 420, true);

//	add_image_size('banner-thumbnail', 850, 350, true);





	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'esportswp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'esportswp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // esportswp_setup
add_action( 'after_setup_theme', 'esportswp_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function esportswp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'esportswp' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'esportswp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function esportswp_scripts() {

	//wp_enqueue_style( 'esportswp-style', get_stylesheet_uri() );

	wp_enqueue_style( 'reset', get_template_directory_uri() . '/reset.css');

	wp_enqueue_style( 'main', get_template_directory_uri() . '/main.css');

	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/bower_components/woothemes-FlexSlider-ce5441b/flexslider.css');


	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js', array('jquery'), '', true );




	wp_enqueue_script( 'esportswp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'esportswp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );


	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

	wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/bower_components/woothemes-FlexSlider-ce5441b/jquery.flexslider-min.js', array('jquery'), '', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'esportswp_scripts' );




function custom_post_image_silder() {

	$labels = array(
		'name'               => _x( 'Image-Slider', 'post type general name' ),
		'singular_name'      => _x( 'Image-Sliders', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Image' ),
		'add_new_item'       => __( 'Add New Image' ),
		'edit_item'          => __( 'Edit Image' ),
		'new_item'           => __( 'New Image' ),
		'all_items'          => __( 'All Image' ),
		'view_item'          => __( 'View Image' ),
		'search_items'       => __( 'Search Image' ),
		'not_found'          => __( 'No images found' ),
		'not_found_in_trash' => __( 'No products found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Image-Slider'
	);

	$supports = array(
		'title',
	'editor',
	'author',
	'custom-fields',
	'revisions',
		'thumbnail',
		'page-attributes'
	);

$details = array(
	'labels'        => $labels,
	'description'   => 'Images For Image Slider',
	'public'        => true,
	'menu_position' => 5,
	'supports'      => $supports,
	'has_archive'   => true,
);

register_post_type( 'image-slider', $details );
	}

add_action( 'init', 'custom_post_image_silder' );



// Get top ancestor
function get_top_ancestor_id() {

	global $post;

	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];

	}

	return $post->ID;

}
// Does page have children?
function has_children() {

	global $post;

	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);

}
//Customize excerpt word count length
function custom_excerpt_length() {
	return 55;
}

add_filter('excerpt_length', 'custom_excerpt_length');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


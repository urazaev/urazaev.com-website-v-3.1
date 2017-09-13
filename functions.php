<?php
/**
 * Urazaev Production functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Urazaev_Production
 */

if ( ! function_exists( 'urazaev_production_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function urazaev_production_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Urazaev Production, use a find and replace
	 * to change 'urazaev-production' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'urazaev-production', get_template_directory() . '/languages' );

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
	add_theme_support( 'custom-background', apply_filters( 'urazaev_production_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'urazaev_production_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function urazaev_production_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'urazaev_production_content_width', 640 );
}
add_action( 'after_setup_theme', 'urazaev_production_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function urazaev_production_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'urazaev-production' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'urazaev-production' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'urazaev_production_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function urazaev_production_scripts() {
	wp_enqueue_style( 'urazaev-production-style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
', array(), '20170313' );
	wp_enqueue_style( 'urazaev-production-font-awesome', get_template_directory_uri() . '/plugins/font-awesome/css/font-awesome.min.css', array(), '20170313' );
	wp_enqueue_style( 'urazaev-production-owl-carousel', get_template_directory_uri() . '/plugins/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css', array(), '20170313' );
	wp_enqueue_style( 'urazaev-production-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css', array(), '20170313' );
	wp_enqueue_style( 'urazaev-production-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '20170313' );
	wp_enqueue_style( 'urazaev-production-forms', get_template_directory_uri() . '/css/forms.min.css', array(), '20170313' );
	wp_enqueue_style( 'urazaev-production-design', get_template_directory_uri() . '/css/design.css', array(), '20170313' );
	wp_enqueue_style( 'urazaev-production-media', get_template_directory_uri() . '/css/media.css', array(), '20170313' );

    
	wp_enqueue_script( 'urazaev-production-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215' );
    wp_enqueue_script( 'urazaev-production-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'urazaev-production-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '20171503', true );
    wp_enqueue_script( 'urazaev-production-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', array(), '20151215', true );
    wp_enqueue_script( 'urazaev-production-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '20171503', true );
    wp_enqueue_script( 'urazaev-production-formlib', get_template_directory_uri() .  '/plugins/forms/js/lib.min.js', array(), '20171503', true );
    wp_enqueue_script( 'urazaev-production-owl', get_template_directory_uri() .  '/plugins/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js', array(), '20171503', true );
    wp_enqueue_script( 'urazaev-production-waypoints', get_template_directory_uri() .  '/plugins/counter/waypoints.min.js', array(), '20171503', true );
    wp_enqueue_script( 'urazaev-production-counterup', get_template_directory_uri() .  '/plugins/counter/jquery.counterup.min.js', array(), '20171503', true );
    wp_enqueue_script( 'urazaev-production-app', get_template_directory_uri() .  '/js/app.min.js', array(), '20171503', true );
    wp_enqueue_script( 'urazaev-production-parallax', get_template_directory_uri() .  '/js/parallax.min.js', array(), '20171503', true );
    wp_enqueue_script( 'urazaev-production-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBgb1hQYsMiWne7tmkpK6yTY7bB4SUmF54&signed_in=true&amp;callback=initMap', array(), '20171503', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'urazaev_production_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

require_once('wp_bootstrap_navwalker.php');

// Testimonials
function create_testimonials() {
    register_post_type('testimonials', array(
      'labels' => array(
        'name'            => __( 'Отзывы' ),
        'singular_name'   => __( 'Testimonials' ),
        'add_new'         => __( 'Добавить отзыв' ),
        'add_new_item'    => __( 'Добавить новый отзыв' ),
        'edit'            => __( 'Редактировать отзывы' ),
        'edit_item'       => __( 'Редактировать отзыв' ),
        'new_item'        => __( 'Новый отзыв' ),
        'all_items'       => __( 'Все отзывы' ),
        'view'            => __( 'Смотреть отзывы' ),
        'view_item'       => __( 'Смотреть отзыв' ),
        'search_items'    => __( 'Искать отзывы' ),
        'not_found'       => __( 'Не найдено' ),
    ),
    'public' => true, // show in admin panel?
    'menu_position' => 7,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array(
			'label' => __( 'People' ),
			'rewrite' => array( 'slug' => 'person' ),
			'capabilities' => array(
				'assign_terms' => 'edit_guides',
				'edit_terms' => 'publish_guides'
			)
		),
    'has_archive' => true,
    'capability_type' => 'post',
    'menu_icon'   => 'dashicons-format-quote',
    'rewrite' => array('slug' => 'testimonials'),
    'show_in_nav_menus' => true,
    'show_in_menu' => true,
    ));
    
    
}
add_action( 'init', 'create_testimonials' );



function create_services() {
    register_post_type('services', array(
      'labels' => array(
        'name'            => __( 'Услуги' ),
        'singular_name'   => __( 'Services' ),
        'add_new'         => __( 'Добавить услуги' ),
        'add_new_item'    => __( 'Добавить новую услугу' ),
        'edit'            => __( 'Редактировать услуги' ),
        'edit_item'       => __( 'Редактировать услугу' ),
        'new_item'        => __( 'Новая услуга' ),
        'all_items'       => __( 'Все услуги' ),
        'view'            => __( 'Смотреть услуги' ),
        'view_item'       => __( 'Смотреть услугу' ),
        'search_items'    => __( 'Искать услуги' ),
        'not_found'       => __( 'Не найдено' ),
    ),
    'public' => true, // show in admin panel?
    'show_ui' => true,
    'menu_position' => 4,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
//   'taxonomies' => array( '' ),
    'has_archive' => true,
    'capability_type' => 'page',
    'menu_icon'   => 'dashicons-visibility',
    'rewrite' => array('slug' => 'services'),
    'show_in_nav_menus' => true,
    'show_in_menu' => true,
    ));
    
    
}
add_action( 'init', 'create_services' );

function create_clientlogos() {
    register_post_type('clientlogos', array(
      'labels' => array(
        'name'            => __( 'Логотипы клиентов' ),
        'singular_name'   => __( 'Clientlogos' ),
        'add_new'         => __( 'Добавить логотипы' ),
        'add_new_item'    => __( 'Добавить логотип' ),
        'edit'            => __( 'Редактировать логотипы' ),
        'edit_item'       => __( 'Редактировать логотип' ),
        'new_item'        => __( 'Новый логотип' ),
        'all_items'       => __( 'Все логотипы' ),
        'view'            => __( 'Смотреть логотипы' ),
        'view_item'       => __( 'Смотреть логотип' ),
        'search_items'    => __( 'Искать логотип' ),
        'not_found'       => __( 'Не найдено' ),
    ),
    'public' => true, // show in admin panel?
    'show_ui' => true,
    'menu_position' => 6,
    'supports' => array( 'title', 'thumbnail'),
    'taxonomies' => array( '' ),
    'has_archive' => true,
    'capability_type' => 'page',
    'menu_icon'   => 'dashicons-images-alt',
    'rewrite' => array('slug' => 'clientlogos'),
    'show_in_nav_menus' => true,
    'show_in_menu' => true,
    ));
    
    
}
add_action( 'init', 'create_clientlogos' );

function create_slider() {
    register_post_type('slider', array(
      'labels' => array(
        'name'            => __( 'Слайдер' ),
        'singular_name'   => __( 'Slider' ),
        'add_new'         => __( 'Добавить слайды' ),
        'add_new_item'    => __( 'Добавить слайд' ),
        'edit'            => __( 'Редактировать слайды' ),
        'edit_item'       => __( 'Редактировать слайд' ),
        'new_item'        => __( 'Новый слайд' ),
        'all_items'       => __( 'Все слайды' ),
        'view'            => __( 'Смотреть слайды' ),
        'view_item'       => __( 'Смотреть слайд' ),
        'search_items'    => __( 'Искать слайды' ),
        'not_found'       => __( 'Не найдено' ),
    ),
    'public' => true, // show in admin panel?
    'show_ui' => true,
    'menu_position' => 6,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array( '' ),
    'has_archive' => true,
    'capability_type' => 'page',
    'menu_icon'   => 'dashicons-images-alt2',
    'rewrite' => array('slug' => 'slider'),
    'show_in_nav_menus' => true,
    'show_in_menu' => true,
    ));
    
    
}
add_action( 'init', 'create_slider' );

function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'my_add_excerpts_to_pages' );

function remove_menus(){
    remove_menu_page( 'link-manager.php' );                
//  remove_menu_page( 'upload.php' );                
//  remove_menu_page( 'edit-comments.php' );               
}
add_action( 'admin_menu', 'remove_menus' );

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
//  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}

add_action( 'init', 'disable_wp_emojicons' );

add_filter( 'emoji_svg_url', '__return_false' );

/**
 * Custom WP gallery
 */
add_shortcode('mygallery', 'my_gallery_shortcode');    
function my_gallery_shortcode($attr) {
   $post = get_post();

	static $instance = 0;
	$instance++;

	if ( ! empty( $attr['ids'] ) ) {
	    // 'ids' is explicitly ordered, unless you specify otherwise.
	    if ( empty( $attr['orderby'] ) )
	        $attr['orderby'] = 'post__in';
	    $attr['include'] = $attr['ids'];
	}

	// Allow plugins/themes to override the default gallery template.
	$output = apply_filters('post_gallery', '', $attr);
	if ( $output != '' )
	    return $output;

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
	    $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
	    if ( !$attr['orderby'] )
	        unset( $attr['orderby'] );
	}

	extract(shortcode_atts(array(
	    'order'      => 'ASC',
	    'orderby'    => 'menu_order ID',
	    'id'         => $post->ID,
	    'itemtag'    => 'div',
	    'icontag'    => 'figure',
	    'captiontag' => 'figcaption',
	    'columns'    => 3,
	    'size'       => 'medium',
	    'include'    => '',
	    'exclude'    => ''
	), $attr));

	$id = intval($id);
	if ( 'RAND' == $order )
	    $orderby = 'none';

	if ( !empty($include) ) {
	    $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

	    $attachments = array();
	    foreach ( $_attachments as $key => $val ) {
	        $attachments[$val->ID] = $_attachments[$key];
	    }
	} elseif ( !empty($exclude) ) {
	    $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	} else {
	    $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if ( empty($attachments) )
	    return '';

	if ( is_feed() ) {
	    $output = "\n";
	    foreach ( $attachments as $att_id => $attachment )
	        $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
	    return $output;
	}

	$itemtag = tag_escape($itemtag);
	$captiontag = tag_escape($captiontag);
	$icontag = tag_escape($icontag);
	$valid_tags = wp_kses_allowed_html( 'post' );
	if ( ! isset( $valid_tags[ $itemtag ] ) )
	    $itemtag = 'li';
	if ( ! isset( $valid_tags[ $captiontag ] ) )
	    $captiontag = 'figcaption';
	if ( ! isset( $valid_tags[ $icontag ] ) )
	    $icontag = 'figure';

	$columns = intval($columns);
	$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
	$float = is_rtl() ? 'right' : 'left';

	$selector = "gallery-{$instance}";

	$gallery_style = $gallery_div = '';
	if ( apply_filters( 'use_default_gallery_style', true ) )
	    $gallery_style = "


	    <!-- see gallery_shortcode() in wp-includes/media.php -->";
	$size_class = sanitize_html_class( $size );
	$gallery_div = "<div id='$selector' class='masonry-layout'>";
	$output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );

	$i = 0;
	foreach ( $attachments as $id => $attachment ) {
	    $link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);

	    $output .= "<{$itemtag} class='masonry-layout__panel'>";
	    $output .= "
	        <{$icontag} class='masonry-layout__panel-content'>
	            $link
	        </{$icontag}>";
	    if ( $captiontag && trim($attachment->post_excerpt) ) {
        $output .= "
	            <{$captiontag} class='wp-caption-text gallery-caption'>
	            " . wptexturize($attachment->post_excerpt) . "
	            </{$captiontag}>";
	    }
	    $output .= "</{$itemtag}>";

	}

	$output .= "
	    </div>\n";
	return $output;
}

function add_class_attachment_link($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a data-fancybox="gallery"',$html);
    return $html;
}
add_filter('wp_get_attachment_link','add_class_attachment_link',10,1);


/**
 * Custom numeric pagintion
 */

function up_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul class="pagination">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li><a>…</a></li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li><a>…</a></li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');







add_filter('user_trailingslashit', 'remcat_function');
function remcat_function($link) {
    return str_replace("/category/", "/", $link);
}

add_filter('user_trailingslashit', 'remport_function');
function remport_function($link) {
    return str_replace("/fw-portfolio-category/", "/", $link);
}
  
add_action('init', 'remcat_flush_rules');
function remcat_flush_rules() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
  
add_filter('generate_rewrite_rules', 'remcat_rewrite');
function remcat_rewrite($wp_rewrite) {
    $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}


function get_hansel_and_gretel_breadcrumbs()
{
    // Set variables for later use
    $here_text        = __( '' );
    $home_link        = home_url('/');
    $home_text        = __( 'Home' );
    $link_before      = '<li typeof="v:Breadcrumb">';
    $link_after       = '</li>';
    $link_attr        = ' rel="v:url" property="v:title"';
    $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $delimiter        = '';              // Delimiter between crumbs
    $before           = '<li>'; // Tag before the current crumb
    $after            = '</li>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';

    /** 
     * Set our own $wp_the_query variable. Do not use the global variable version due to 
     * reliability
     */
    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() ) 
    {
        /** 
         * Set our own $post variable. Do not use the global variable version due to 
         * reliability. We will set $post_object variable to $GLOBALS['wp_the_query']
         */
        $post_object = sanitize_post( $queried_object );

        // Set variables 
        $title          = apply_filters( 'the_title', $post_object->post_title );
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        $post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';

        if ( 'post' === $post_type ) 
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->name );
        }

        // Get post parents if $parent !== 0
        if ( 0 !== $parent ) 
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }

            $parent_links = array_reverse( $parent_links );

            $parent_string = implode( $delimiter, $parent_links );
        }

        // Lets build the breadcrumb trail
        if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }

        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;
    }



    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '<ol class="breadcrumb">';
    if (    is_home()
         || is_front_page()
    ) {
        // Do not show breadcrumbs on page one of home and frontpage
        if ( is_paged() ) {
            $breadcrumb_output_link .= $here_text . $delimiter;
            $breadcrumb_output_link .= '<li><a href="' . $home_link . '">' . $home_text . '</a></li>';
            $breadcrumb_output_link .= $page_addon;
        }
    } else {
        $breadcrumb_output_link .= $here_text . $delimiter;
        $breadcrumb_output_link .= '<li><a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a></li>';
        $breadcrumb_output_link .= $delimiter;
        $breadcrumb_output_link .= $breadcrumb_trail;
        $breadcrumb_output_link .= $page_addon;
    }
    $breadcrumb_output_link .= '</ol>';

    return $breadcrumb_output_link;
}

add_filter( 'wpseo_xml_sitemap_img', '__return_false' );


?>
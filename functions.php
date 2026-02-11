<?php
/**
 * mvrtheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mvrtheme
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
function mvrtheme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on mvrtheme, use a find and replace
		* to change 'mvrtheme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mvrtheme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'mvrtheme' ),
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
			'mvrtheme_custom_background_args',
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
add_action( 'after_setup_theme', 'mvrtheme_setup' );

// Enqueue Montserrat Google Font

function theme_enqueue_styles() {
    wp_enqueue_style(
        'montserrat-font',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap',
        [],
        null
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// Calculate reading time
function calculate_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // 200 words per minute
    return $reading_time;
}

// Make it available in templates
function display_reading_time() {
    $reading_time = calculate_reading_time();
    if ($reading_time > 0) {
        return $reading_time . ' min read';
    }
    return 'Quick read';
}



function mvrtheme_enqueue_styles() {
    wp_enqueue_style(
        'mvrtheme-styles', 
        get_template_directory_uri() . '/dist/styles.css', 
        [], 
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'mvrtheme_enqueue_styles');

function theme_setup() {
  register_nav_menus(array(
    'primary-menu' => __('Primary Menu', 'mvrtheme')
  ));
}
add_action('after_setup_theme', 'theme_setup');


// Gutenberg Editor Styles
function mvr_enqueue_gutenberg_styles() {
    // Add support for editor styles
    add_theme_support('editor-styles');
    
    // Enqueue the editor styles
    add_editor_style('style.css');
    add_editor_style('src/gutenberg.css');
    
    // Enqueue frontend styles for blocks
    wp_enqueue_style(
        'mvr-gutenberg-frontend',
        get_template_directory_uri() . '/src/gutenberg.css',
        array(),
        '1.0.0'
    );
}
add_action('after_setup_theme', 'mvr_enqueue_gutenberg_styles');


// Tailwind CSS Integration
function mvr_theme_setup() {
    // Add support for wide and full alignment
    add_theme_support('align-wide');
    
    // Add support for custom block styles
    add_theme_support('wp-block-styles');
    
    // Add support for editor color palette
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => 'Primary',
            'slug'  => 'primary',
            'color' => '#00558D',
        ),
        array(
            'name'  => 'Accent',
            'slug'  => 'accent',
            'color' => '#fed310',
        ),
        array(
            'name'  => 'Light Gray',
            'slug'  => 'light-gray',
            'color' => '#f7f7f7',
        ),
    ));
}
add_action('after_setup_theme', 'mvr_theme_setup');


// Register Team Members Custom Post Type
function register_team_members_cpt() {
    $labels = array(
        'name' => 'Team Members',
        'singular_name' => 'Team Member',
        'menu_name' => 'Team Members',
        'name_admin_bar' => 'Team Member',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Team Member',
        'new_item' => 'New Team Member',
        'edit_item' => 'Edit Team Member',
        'view_item' => 'View Team Member',
        'all_items' => 'All Team Members',
        'search_items' => 'Search Team Members',
        'not_found' => 'No team members found.',
        'not_found_in_trash' => 'No team members found in Trash.'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'team'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-businessperson',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    );

    register_post_type('team_member', $args);
}
add_action('init', 'register_team_members_cpt');

// Register Practice Areas Taxonomy for Team Members

function register_team_practice_areas() {
    $labels = array(
        'name' => 'Practice Areas',
        'singular_name' => 'Practice Area',
        'search_items' => 'Search Practice Areas',
        'all_items' => 'All Practice Areas',
        'edit_item' => 'Edit Practice Area',
        'update_item' => 'Update Practice Area',
        'add_new_item' => 'Add New Practice Area',
        'new_item_name' => 'New Practice Area Name',
        'menu_name' => 'Practice Areas'
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'practice-area'),
        'show_in_rest' => true
    );

    register_taxonomy('practice_area', 'team_member', $args);
}
add_action('init', 'register_team_practice_areas');



/**
 * Get author profile image with ACF fallback
 */
function mvr_get_author_profile_image($author_id = null, $size = 'medium') {
    if (!$author_id) {
        $author_id = get_the_author_meta('ID');
    }
    
    // Helper to normalize ACF image field
    $resolve_image_url = function($raw, $size) {
        if (empty($raw)) return '';
        
        if (is_array($raw)) {
            // ACF image array
            if (!empty($raw['url'])) return $raw['url'];
            if (!empty($raw['ID'])) {
                return wp_get_attachment_image_url($raw['ID'], $size) ?: '';
            }
        }
        
        if (is_numeric($raw)) {
            // Attachment ID
            return wp_get_attachment_image_url(intval($raw), $size) ?: '';
        }
        
        if (is_string($raw) && filter_var($raw, FILTER_VALIDATE_URL)) {
            // URL string
            return $raw;
        }
        
        return '';
    };

    // 1) Try user-level ACF field (stored on user profile)
    if (function_exists('get_field')) {
        $user_field = get_field('image_profile', 'user_' . $author_id);
        $image_profile = $resolve_image_url($user_field, $size);
        if ($image_profile) return $image_profile;
    }

    // 2) Try to find a team_member CPT by matching email or name
    if (post_type_exists('team_member')) {
        $author_email = get_the_author_meta('user_email', $author_id);
        $author_name = get_the_author_meta('display_name', $author_id);
        
        $team_q = new WP_Query(array(
            'post_type' => 'team_member',
            'posts_per_page' => 10,
            'post_status' => 'publish',
            'fields' => 'ids',
        ));
        
        if ($team_q->have_posts()) {
            foreach ($team_q->posts as $team_id) {
                // Try to match by email first (most reliable)
                $team_email = get_field('email', $team_id);
                if ($team_email && strtolower(trim($team_email)) === strtolower(trim($author_email))) {
                    $team_field = get_field('image_profile', $team_id);
                    $image_profile = $resolve_image_url($team_field, $size);
                    if ($image_profile) return $image_profile;
                }
                
                // Try to match by name
                $team_title = get_the_title($team_id);
                if (strtolower(trim($team_title)) === strtolower(trim($author_name))) {
                    $team_field = get_field('image_profile', $team_id);
                    $image_profile = $resolve_image_url($team_field, $size);
                    if ($image_profile) return $image_profile;
                }
            }
        }
        wp_reset_postdata();
    }

    // 3) Fallback: author avatar
    return get_avatar_url($author_id, array('size' => 96));
}



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mvrtheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mvrtheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'mvrtheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mvrtheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mvrtheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mvrtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mvrtheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mvrtheme_scripts() {
	wp_enqueue_style( 'mvrtheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'mvrtheme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'mvrtheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mvrtheme_scripts' );

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

/*
 * Handle contact form submissions via admin-post
 */
function mvr_handle_contact_form() {
    if ( 'POST' !== strtoupper( $_SERVER['REQUEST_METHOD'] ) ) {
        wp_safe_redirect( home_url() );
        exit;
    }

    $redirect = isset( $_POST['redirect_to'] ) ? esc_url_raw( $_POST['redirect_to'] ) : ( wp_get_referer() ? wp_get_referer() : home_url() );

    if ( ! isset( $_POST['mvr_contact_nonce'] ) || ! wp_verify_nonce( $_POST['mvr_contact_nonce'], 'mvr_contact' ) ) {
        wp_safe_redirect( add_query_arg( 'mvr_contact', 'error', $redirect ) );
        exit;
    }

    $first = sanitize_text_field( $_POST['first-name'] ?? '' );
    $last  = sanitize_text_field( $_POST['last-name'] ?? '' );
    $email = sanitize_email( $_POST['email'] ?? '' );
    $phone = sanitize_text_field( $_POST['phone'] ?? '' );
    $subject_key = sanitize_text_field( $_POST['subject'] ?? '' );
    $message_body = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $first ) || empty( $last ) || ! is_email( $email ) || empty( $message_body ) ) {
        wp_safe_redirect( add_query_arg( 'mvr_contact', 'error', $redirect ) );
        exit;
    }

    $subjects = array(
        'corporate-law' => 'Corporate Law',
        'commercial-law' => 'Commercial Law',
        'contracts' => 'Contracts',
        'mergers-acquisitions' => 'Mergers & Acquisitions',
        'general-inquiry' => 'General Inquiry',
        'other' => 'Other',
    );

    $subject_label = isset( $subjects[ $subject_key ] ) ? $subjects[ $subject_key ] : 'Contact Form Submission';

    $to = 'umile@netamplified.com';
    $cc = 'umile.bhengu@gmail.com';

    $subject = '[' . get_bloginfo( 'name' ) . '] ' . $subject_label . ' — ' . $first . ' ' . $last;

    $message  = '<p><strong>Name:</strong> ' . esc_html( $first . ' ' . $last ) . '</p>';
    $message .= '<p><strong>Email:</strong> ' . esc_html( $email ) . '</p>';
    $message .= '<p><strong>Phone:</strong> ' . esc_html( $phone ) . '</p>';
    $message .= '<p><strong>Subject:</strong> ' . esc_html( $subject_label ) . '</p>';
    $message .= '<p><strong>Message:</strong><br>' . nl2br( esc_html( $message_body ) ) . '</p>';
    $message .= '<p><small>Referrer: ' . esc_url( wp_get_referer() ) . '</small></p>';

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'Cc: ' . $cc,
        'Reply-To: ' . $first . ' ' . $last . ' <' . $email . '>',
    );

    $sent = wp_mail( $to, $subject, $message, $headers );

    if ( $sent ) {
        wp_safe_redirect( add_query_arg( 'mvr_contact', 'success', $redirect ) );
    } else {
        wp_safe_redirect( add_query_arg( 'mvr_contact', 'error', $redirect ) );
    }

    exit;
}
add_action( 'admin_post_nopriv_mvr_contact_form', 'mvr_handle_contact_form' );
add_action( 'admin_post_mvr_contact_form', 'mvr_handle_contact_form' );

/*
 * Handle newsletter subscription submissions via admin-post
 */
function mvr_handle_subscribe_form() {
    if ( 'POST' !== strtoupper( $_SERVER['REQUEST_METHOD'] ) ) {
        wp_safe_redirect( home_url() );
        exit;
    }

    $redirect = isset( $_POST['redirect_to'] ) ? esc_url_raw( $_POST['redirect_to'] ) : ( wp_get_referer() ? wp_get_referer() : home_url() );

    if ( ! isset( $_POST['mvr_subscribe_nonce'] ) || ! wp_verify_nonce( $_POST['mvr_subscribe_nonce'], 'mvr_subscribe' ) ) {
        wp_safe_redirect( add_query_arg( 'mvr_subscribe', 'error', $redirect ) );
        exit;
    }

    $email = sanitize_email( $_POST['subscriber_email'] ?? '' );
    if ( ! is_email( $email ) ) {
        wp_safe_redirect( add_query_arg( 'mvr_subscribe', 'error', $redirect ) );
        exit;
    }

    $to = 'umile@netamplified.com';
    $cc = 'umile.bhengu@gmail.com';

    $subject = '[' . get_bloginfo( 'name' ) . '] Newsletter subscription';
    $message  = '<p>New newsletter subscription request</p>';
    $message .= '<p><strong>Email:</strong> ' . esc_html( $email ) . '</p>';
    $message .= '<p><small>Referrer: ' . esc_url( wp_get_referer() ) . '</small></p>';
    $message .= '<p><small>IP: ' . esc_html( $_SERVER['REMOTE_ADDR'] ?? '' ) . '</small></p>';

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'Cc: ' . $cc,
    );

    $sent = wp_mail( $to, $subject, $message, $headers );

    if ( $sent ) {
        wp_safe_redirect( add_query_arg( 'mvr_subscribe', 'success', $redirect ) );
    } else {
        wp_safe_redirect( add_query_arg( 'mvr_subscribe', 'error', $redirect ) );
    }

    exit;
}
add_action( 'admin_post_nopriv_mvr_subscribe_form', 'mvr_handle_subscribe_form' );
add_action( 'admin_post_mvr_subscribe_form', 'mvr_handle_subscribe_form' );


<?php
/**
 * vet_clinic_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vet_clinic_theme
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
function vet_clinic_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on vet_clinic_theme, use a find and replace
		* to change 'vet_clinic_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'vet_clinic_theme', get_template_directory() . '/languages' );

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
	  		'primary-menu' => esc_html__( 'Primary Menu', 'vet_clinic_theme' ),
	  		'mobile-menu'  => esc_html__( 'Mobile Menu', 'vet_clinic_theme' ),
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
			'vet_clinic_theme_custom_background_args',
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
add_action( 'after_setup_theme', 'vet_clinic_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vet_clinic_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vet_clinic_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'vet_clinic_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vet_clinic_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vet_clinic_theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vet_clinic_theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vet_clinic_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vet_clinic_theme_scripts() {
	wp_style_add_data( 'vet_clinic_theme-style', 'rtl', 'replace' );

	wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/css/main.css', array(), null);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/scripts/main.js', array('jquery'), null, true);

	wp_localize_script('main-js', 'wpVars', array(
        'siteUrl' => get_site_url(), 
    ));

	wp_enqueue_script( 'vet_clinic_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

function vet_clinic_theme_enqueue_styles() {
	wp_enqueue_style('vet-clinic-main', get_stylesheet_directory_uri() . '/css/main.css', array(),null);

    if (is_page('blog')) {
        wp_enqueue_style('vet-clinic-blog', get_stylesheet_directory_uri() . '/css/blog.css', array('vet-clinic-main'), null);
    }

	if (is_page('services')) {
        wp_enqueue_style('vet-clinic-services', get_stylesheet_directory_uri() . '/css/services.css', array('vet-clinic-main'), null);
    }

	if (is_page('special-offers')) {
        wp_enqueue_style('vet-clinic-special-offers', get_stylesheet_directory_uri() . '/css/special-offers.css', array('vet-clinic-main'), null);
    }
	
	if (is_page('prices')) {
        wp_enqueue_style('vet-clinic-prices', get_stylesheet_directory_uri() . '/css/prices.css', array('vet-clinic-main'), null);
    }

	if (is_page('contacts')) {
        wp_enqueue_style('vet-clinic-contacts', get_stylesheet_directory_uri() . '/css/contacts.css', array('vet-clinic-main'), null);
    }

	if (is_page('login')) {
		wp_enqueue_style('vet-clinic-login', get_stylesheet_directory_uri() . '/css/login.css', array(), null);
	}	

	if (is_page('register')) {
		wp_enqueue_style('vet-clinic-register', get_stylesheet_directory_uri() . '/css/register.css', array(), null);
	}	

	if (is_page('profile')) {
        wp_enqueue_style('vet-clinic-profile', get_stylesheet_directory_uri() . '/css/profile.css', array('vet-clinic-main'), null);
    }

	if (is_page('appointment')) {
        wp_enqueue_style('vet-clinic-appointment', get_stylesheet_directory_uri() . '/css/appointment.css', array('vet-clinic-main'), null);
    }

	if (is_page('select-vet')) {
        wp_enqueue_style('vet-clinic-select-vet', get_stylesheet_directory_uri() . '/css/select-vet.css', array('vet-clinic-main'), null);
    }
	
	if (is_page('veterinarian-info')) {
        wp_enqueue_style('vet-clinic-vet-info', get_stylesheet_directory_uri() . '/css/vet-info.css', array('vet-clinic-main'), null);
    }
}
  
add_action( 'wp_enqueue_scripts', 'vet_clinic_theme_enqueue_styles' );
  
add_action( 'wp_enqueue_scripts', 'vet_clinic_theme_scripts' );

add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/users', array(
        'methods' => 'GET',
        'callback' => 'get_custom_users',
        'permission_callback' => '__return_true', 
    ));

    register_rest_route('custom/v1', '/users', array(
        'methods' => 'POST',
        'callback' => 'create_custom_user',
        'permission_callback' => '__return_true', 
    ));
});

add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/patients', array(
        'methods' => 'GET',
        'callback' => 'get_patient_records',
        'permission_callback' => '__return_true', 
    ));

    register_rest_route('custom/v1', '/patients', array(
        'methods' => 'POST',
        'callback' => 'create_patient_record',
        'permission_callback' => '__return_true', 
    ));
});

add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/appointments', array(
        'methods' => 'GET',
        'callback' => 'get_appointment_records',
        'permission_callback' => '__return_true', 
    ));

    register_rest_route('custom/v1', '/appointments', array(
        'methods' => 'POST',
        'callback' => 'create_appointment_record',
        'permission_callback' => '__return_true', 
    ));
});

function get_custom_users() {
    $file_path = get_template_directory() . '/users.json'; 

    if (!file_exists($file_path)) {
        return rest_ensure_response(array('users' => [])); 
    }

    $users_data = json_decode(file_get_contents($file_path), true);

    return rest_ensure_response($users_data); 
}

function create_custom_user(WP_REST_Request $request) {
    $file_path = get_template_directory() . '/users.json'; 

    $users_data = file_exists($file_path) ? json_decode(file_get_contents($file_path), true) : ['users' => []];

    $username = sanitize_text_field($request['name']);
    $password = sanitize_text_field($request['password']);

    foreach ($users_data['users'] as $user) {
        if ($user['name'] === $username) {
            return new WP_Error('user_exists', 'User already exists in JSON', array('status' => 409));
        }
    }

    if (username_exists($username)) {
        return new WP_Error('user_exists', 'User already exists in WordPress', array('status' => 409));
    }

    $user_id = wp_create_user($username, $password);

    if (is_wp_error($user_id)) {
        return new WP_Error('user_creation_failed', 'Failed to create user in WordPress', array('status' => 500));
    }

    wp_update_user(array(
        'ID' => $user_id,
        'role' => 'subscriber',
    ));

    $new_user = array(
        'id' => $user_id, 
        'name' => $username,
        'password' => $password, 
    );
    $users_data['users'][] = $new_user;

    file_put_contents($file_path, json_encode($users_data, JSON_PRETTY_PRINT));

    return rest_ensure_response(array(
        'wordpress_user_id' => $user_id,
        'json_user' => $new_user,
    ));
}

function get_patient_records() {
    $file_path = get_template_directory() . '/patient-records.json';

    if (!file_exists($file_path)) {
        return rest_ensure_response(array('patients' => []));
    }

    $patients_data = json_decode(file_get_contents($file_path), true);

    return rest_ensure_response($patients_data);
}

function create_patient_record(WP_REST_Request $request) {
    $file_path = get_template_directory() . '/patient-records.json';
    $patients_data = file_exists($file_path) ? json_decode(file_get_contents($file_path), true) : ['patients' => []];

    $parameters = $request->get_json_params();
    $userId = sanitize_text_field($parameters['userId']);
    $name = sanitize_text_field($parameters['name']);
    $phone = sanitize_text_field($parameters['phone']);
    $visits = $parameters['visits'];

    $new_patient = array(
        'userId' => $userId,
        'name' => $name,
        'phone' => $phone,
        'visits' => $visits
    );
    $patients_data['patients'][] = $new_patient;

    file_put_contents($file_path, json_encode($patients_data, JSON_PRETTY_PRINT));

    return rest_ensure_response($new_patient);
}

function get_appointment_records() {
    $file_path = get_template_directory() . '/appointment-system.json';

    if (!file_exists($file_path)) {
        return rest_ensure_response(array('appointments' => [])); 
    }

    $appointments_data = json_decode(file_get_contents($file_path), true);

    return rest_ensure_response($appointments_data);
}

function create_appointment_record(WP_REST_Request $request) {
    $file_path = get_template_directory() . '/appointment-system.json';
    $appointments_data = file_exists($file_path) ? json_decode(file_get_contents($file_path), true) : ['appointments' => []];

    $parameters = $request->get_json_params();
    $userId = sanitize_text_field($parameters['userId']);
    $vetId = sanitize_text_field($parameters['vetId']);
    $vetName = sanitize_text_field($parameters['vetName']);
    $service = sanitize_text_field($parameters['service']);
    $date = sanitize_text_field($parameters['date']);
    $time = sanitize_text_field($parameters['time']);

    $new_appointment = array(
        'userId' => $userId,
        'vetId' => $vetId,
        'vetName' => $vetName,
        'service' => $service,
        'date' => $date,
        'time' => $time
    );
    $appointments_data['appointments'][] = $new_appointment;

    file_put_contents($file_path, json_encode($appointments_data, JSON_PRETTY_PRINT));

    return rest_ensure_response($new_appointment);
}

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


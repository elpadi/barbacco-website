<?php
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
/***************************************************************************************************************************
**********	SCRIPT & STYLE ENQUEUE 
****************************************************************************************************************************/
	
	// Enqueue Scripts
	function barbacco_scripts_loads() {
		if ( ! is_admin() ) {
			wp_deregister_script( 'jquery' );
			wp_register_script( 'jquery', ( "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ), false, '1.12.4', true );
			wp_enqueue_script( 'jquery' );
		}
  
		wp_register_script( 'boot-scripts', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.5', true );
		wp_enqueue_script( 'boot-scripts' );
		
		wp_register_script( 'my-scripts', get_template_directory_uri() . '/js/barbacco-scripts.min.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'my-scripts' );
		
		wp_register_script( 'html5-conditional-scripts', ( "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" ), '', '', true );
		wp_enqueue_script( 'html5-conditional-scripts' );
		global $wp_scripts;
		$wp_scripts->add_data( 'html5-conditional-scripts', 'conditional', 'IE 9' );
		wp_register_script( 'respondjs-conditional-scripts', ( "https://oss.maxcdn.com/respond/1.4.2/respond.min.js" ), '', '', true );
		wp_enqueue_script( 'respondjs-conditional-scripts' );
		global $wp_scripts;
		$wp_scripts->add_data( 'respondjs-conditional-scripts', 'conditional', 'IE 9' );
	}
	add_action( 'wp_enqueue_scripts', 'barbacco_scripts_loads' );
	
	// Enqueue Styles
	function barbacco_styles_loads() {
		wp_enqueue_style( 'theme-main-style', get_stylesheet_directory_uri() . '/style.css' );
	}                                                
	add_action( 'wp_enqueue_scripts', 'barbacco_styles_loads' );
	
	
	
/***************************************************************************************************************************
**********	<HEAD> CLEANUP
****************************************************************************************************************************/
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action( 'wp_head', 'rsd_link' );
    	remove_action( 'wp_head', 'wlwmanifest_link' );
    }
    add_action( 'init', 'removeHeadLinks' );
    remove_action( 'wp_head', 'wp_generator' );
    
	
/***************************************************************************************************************************
**********	THEME SUPPORT - THUMBNAILS + MULTIPLE POST THUMBNAIL
****************************************************************************************************************************/
	
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		// set_post_thumbnail_size(200, 225, true);
	}
	
	
/***************************************************************************************************************************
**********	CUSTOM SIDEBAR 
****************************************************************************************************************************/

	// Declare sidebar widget zone
    if ( function_exists( 'register_sidebar' ) ) {
    	register_sidebar( array(
    		'name' => 'Open Table Widgets',
    		'id'   => 'open-table-widgets',
    		'description'   => 'These are widgets for the Open Table Plugin.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	) );
    	register_sidebar( array(
    		'name' => 'MailChimp Widget',
    		'id'   => 'mailchimp-widget',
    		'description'   => 'Widget for the Mailchimp newsletter.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	) );
    	register_sidebar( array(
    		'name' => 'Map, Direction, etc. Widget',
    		'id'   => 'map-direction-widget',
    		'description'   => 'Widget for Map, Directions page.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	) );
    }

	
/***************************************************************************************************************************
**********	CUSTOM MENU 
****************************************************************************************************************************/
	
	// Define custom menu
    if ( function_exists( 'register_nav_menus' ) ) {
    	register_nav_menus( array(
    		'main-navigation' => 'Main Navigation',
    		'about-subnav' => 'About Page Subnavigation',
    		'takeout-subnav' => 'TakeOut & Catering Page Subnavigation'
    	));
    }


/***************************************************************************************************************************
**********	CUSTOM POST TYPES
****************************************************************************************************************************/
	
	// inc folder CPT 
	include_once( 'inc/custom-post-types.php' );
	

/***************************************************************************************************************************
**********	CUSTOM META BOXES
****************************************************************************************************************************/
	
	// inc folder CPT 
	include_once( 'inc/custom-meta-boxes.php' );
	

/***************************************************************************************************************************
**********	THEME OPTIONS
****************************************************************************************************************************/
	
	// inc folder CPT 
	include_once( 'inc/barbacco_theme_options.php' );
	
	
/***************************************************************************************************************************
**********	ENABLE SVG UPLOAD 
****************************************************************************************************************************/
	
	function perbacco_mime_types( $mimes ) {
		$mimes[ 'svg' ] = 'image/svg+xml';
		return $mimes;
	}
	add_filter( 'upload_mimes', 'perbacco_mime_types' );
	
	
/***************************************************************************************************************************
**********	ADDING NAVIGATION ATTRIBUTES 
****************************************************************************************************************************/
	
	add_filter( 'nav_menu_link_attributes', 'my_nav_menu_attribs', 10, 3 );
	function my_nav_menu_attribs( $atts, $item, $args ) {
		// Add the general attributes
		$atts['data-toggle'] = 'collapse';
		$atts['data-target'] = '.navbar-collapse';
		
		// Set the menu ID
		$menu_link = 486;
		// Conditionally match the ID and add the attribute and value
		if ( $item->ID == $menu_link ) {
			$atts['data-toggle'] = 'modal';
			$atts['data-target'] = '#modal-reservations';
		}
		
		//Return the new attribute
		return $atts;
	}
	
	
/***************************************************************************************************************************
**********	MOVING EVERY SCRIPT TAG TO FOOTER 
****************************************************************************************************************************/
	
	function remove_head_scripts() {
		remove_action('wp_head', 'wp_print_scripts');
		remove_action('wp_head', 'wp_print_head_scripts', 9);
		remove_action('wp_head', 'wp_enqueue_scripts', 1);

		add_action('wp_footer', 'wp_print_scripts', 5);
		add_action('wp_footer', 'wp_enqueue_scripts', 5);
		add_action('wp_footer', 'wp_print_head_scripts', 5);
	}
	add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );
	
	
/***************************************************************************************************************************
**********	OPEN LOCAL NAV ITEMS IN SAME WINDOW
****************************************************************************************************************************/
add_filter('wp_setup_nav_menu_item', function($item) {
	if (strpos($item->url, 'www.barbaccosf.com') !== FALSE) $item->target = '';
	return $item;
});
	
?>

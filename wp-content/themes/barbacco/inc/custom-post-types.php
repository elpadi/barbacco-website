<?php
/***************************************************************************************************************************
**********	CUSTOM POST TYPES
****************************************************************************************************************************/

	/**************** PRESS CPT - BEGIN ****************/
		function custom_post_barbacco_press() {

		// Set UI labels for Custom Post Type
			$labels = array(
				'name'                => _x( 'Press', 'Post Type General Name' ),
				'singular_name'       => _x( 'Press', 'Post Type Singular Name' ),
				'menu_name'           => __( 'Press' ),
				'parent_item_colon'   => __( 'Parent Press' ),
				'all_items'           => __( 'All Press' ),
				'view_item'           => __( 'View Press' ),
				'add_new_item'        => __( 'Add New Press' ),
				'add_new'             => __( 'Add New' ),
				'edit_item'           => __( 'Edit Press' ),
				'update_item'         => __( 'Update Press' ),
				'search_items'        => __( 'Search Press' ),
				'not_found'           => __( 'Not Found' ),
				'not_found_in_trash'  => __( 'Not found in Trash' ),
			);
		// Set other options for Custom Post Type
			$args = array(
				'label'               => __( 'barbacco_press' ),
				'description'         => __( 'Press' ),
				'labels'              => $labels,
				// Features this CPT supports in Post Editor
				'supports'            => array( 'title' ),
				// You can associate this CPT with a taxonomy or custom taxonomy. 
				//'taxonomies'          => array( '' ),
				// A hierarchical CPT is like Pages and can have
				// Parent and child items. A non-hierarchical CPT
				// is like Posts.
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => true,
				'show_in_admin_bar'   => true,
				'menu_position'       => 30,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type'     => 'post',
				'menu_icon' => 'dashicons-megaphone',
			);
			// Registering your Custom Post Type
			register_post_type( 'barbacco_press', $args );
		}
		// Hook into the 'init' action so that the function
		// Containing our post type registration is not 
		// unnecessarily executed. 
		add_action( 'init', 'custom_post_barbacco_press', 0 );
	/**************** PRIVATE DINING CPT - END ****************/
	
	/**************** MENUS CPT - BEGIN ****************/
		function barbacco_custom_post_menus() {

		// Set UI labels for Custom Post Type
			$labels = array(
				'name'                => _x( 'Barbacco Menus', 'Post Type General Name' ),
				'singular_name'       => _x( 'Barbacco Menu', 'Post Type Singular Name' ),
				'menu_name'           => __( 'Barbacco Menus' ),
				'parent_item_colon'   => __( 'Parent Menu' ),
				'all_items'           => __( 'All Menus' ),
				'view_item'           => __( 'View Menu' ),
				'add_new_item'        => __( 'Add New Menu' ),
				'add_new'             => __( 'Add New' ),
				'edit_item'           => __( 'Edit Menu' ),
				'update_item'         => __( 'Update Menu' ),
				'search_items'        => __( 'Search Menu' ),
				'not_found'           => __( 'Not Found' ),
				'not_found_in_trash'  => __( 'Not found in Trash' ),
			);
		// Set other options for Custom Post Type
			$args = array(
				'label'               => __( 'restaurant_menus' ),
				'description'         => __( 'Barbacco Menus' ),
				'labels'              => $labels,
				// Features this CPT supports in Post Editor
				'supports'            => array( 'title', 'editor', 'author', 'thumbnail' ),
				// You can associate this CPT with a taxonomy or custom taxonomy. 
				//'taxonomies'          => array( '' ),
				// A hierarchical CPT is like Pages and can have
				// Parent and child items. A non-hierarchical CPT
				// is like Posts.
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => true,
				'show_in_admin_bar'   => true,
				'menu_position'       => 30,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type'     => 'post',
				'menu_icon' 		  => 'dashicons-list-view',
			);
			// Registering your Custom Post Type
			register_post_type( 'restaurant_menus', $args );
		}
		// Hook into the 'init' action so that the function
		// Containing our post type registration is not 
		// unnecessarily executed. 
		add_action( 'init', 'barbacco_custom_post_menus', 0 );
	/**************** MENUS CPT - END ****************/
	
	
?>
<?php
/**
 * La Pizzeria functions and definitions
 */

function lapizzeria_setup(){

	add_theme_support('post-thumbnails');
	add_image_size('specialties', 768, 515, true);
}
add_action('after_setup_theme', 'lapizzeria_setup');
add_image_size('boxes', 437, 291, true);

/**
 * Enqueue scripts and styles.
 */
function lapizzeria_styles(){

	wp_register_style( 'normalize',get_template_directory_uri() . '/css/normalize.css',array(), '7.0' );
	wp_register_style( 'fontawesome-all',get_template_directory_uri() . '/css/fontawesome-all.css',array(), '5.0.10' );
	wp_register_style( 'style',get_template_directory_uri() . '/style.css',array('normalize'), '1.0' );

	wp_enqueue_style('normalize');
	wp_enqueue_style('fontawesome-all');
	wp_enqueue_style('style');

	wp_enqueue_script('js_script', get_template_directory_uri(). '/js/js_script.js',array('jquery'), '1.0.0', true);
	// js files
	// wp_enqueue_scripts('jquery');
	// add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
}
add_action( 'wp_enqueue_scripts', 'lapizzeria_styles');

/**
 * Add Menu
 */
 // function lapizzera_menu(){
	//  register_nav_menu(array(
	// 	 'header-menu'=>__('Header Menu', lapizzera)
	//  ) );
 // }
 // add_action('init', 'lapizzera');


function lapizzera_menu() {
  register_nav_menus(array(
		'header-menu' =>__( 'Header Menu', 'lapizzera' ),
		'social-menu' =>__( 'Social Menu', 'lapizzera' )
	));
}
add_action( 'init', 'lapizzera_menu' );


function lapizzeria_specialties() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'lapizzeria' ),
		'singular_name'      => _x( 'Pizza', 'post type singular name', 'lapizzeria' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'lapizzeria' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'lapizzeria' ),
		'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
		'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
		'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
		'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
		'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
		'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
		'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'lapizzeria' ),
		'not_found'          => __( 'No Pizzas found.', 'lapizzeria' ),
		'not_found_in_trash' => __( 'No Pizzas found in Trash.', 'lapizzeria' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'lapizzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'specialties' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'specialties', $args );
}

add_action( 'init', 'lapizzeria_specialties' );

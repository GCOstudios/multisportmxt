<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load the parent files
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );


	if ( is_singular() ) {
		wp_enqueue_script( 'fitcoach-sequence', get_template_directory_uri() . '/js/sequence.scripts.js', array(), false, true );
	}
}

// Register Footer widget area
function multisport_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar', 'fitcoach' ), 
		'id'            => 'footer-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget col-1-4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );	
}
add_action( 'widgets_init', 'multisport_widgets_init' );

// Override Classes post type
add_action( 'wp_loaded', 'modify_cpt_custom_post_type', 1002 );

function modify_cpt_custom_post_type()
{
	global $wp_post_types;
	$p = 'classes';

	// Someone has changed this post type, always check for that!
	if ( empty ( $wp_post_types[ $p ] )
		or ! is_object( $wp_post_types[ $p ] )
		or empty ( $wp_post_types[ $p ]->labels )
		)
		return;

	// see get_post_type_labels()
	$wp_post_types[ $p ]->labels->name                  = _x( 'Workouts', 'Post Type General Name', 'multisportxt' );
	$wp_post_types[ $p ]->labels->singular_name         = _x( 'Workout', 'Post Type Singular Name', 'multisportxt' );
	$wp_post_types[ $p ]->labels->menu_name             = __( 'Workouts', 'multisportxt' );
	$wp_post_types[ $p ]->labels->name_admin_bar        = __( 'Workouts', 'multisportxt' );
	$wp_post_types[ $p ]->labels->archives              = __( 'Item Archives', 'multisportxt' );
	$wp_post_types[ $p ]->labels->parent_item_colon     = __( 'Parent Item:', 'multisportxt' );
	$wp_post_types[ $p ]->labels->all_items             = __( 'All Workouts', 'multisportxt' );
	$wp_post_types[ $p ]->labels->add_new_item          = __( 'Add New Workout', 'multisportxt' );
	$wp_post_types[ $p ]->labels->add_new               = __( 'Add New', 'multisportxt' );
	$wp_post_types[ $p ]->labels->new_item              = __( 'New Workout', 'multisportxt' );
	$wp_post_types[ $p ]->labels->edit_item             = __( 'Edit Workout', 'multisportxt' );
	$wp_post_types[ $p ]->labels->update_item           = __( 'Update Workout', 'multisportxt' );
	$wp_post_types[ $p ]->labels->view_item             = __( 'View Workout', 'multisportxt' );
	$wp_post_types[ $p ]->labels->search_items          = __( 'Search Workouts', 'multisportxt' );
	$wp_post_types[ $p ]->labels->not_found             = __( 'Not found', 'multisportxt' );
	$wp_post_types[ $p ]->labels->not_found_in_trash    = __( 'Not found in Trash', 'multisportxt' );
	$wp_post_types[ $p ]->labels->featured_image        = __( 'Featured Image', 'multisportxt' );
	$wp_post_types[ $p ]->labels->set_featured_image    = __( 'Set featured image', 'multisportxt' );
	$wp_post_types[ $p ]->labels->remove_featured_image = __( 'Remove featured image', 'multisportxt' );
	$wp_post_types[ $p ]->labels->use_featured_image    = __( 'Use as featured image', 'multisportxt' );
	$wp_post_types[ $p ]->labels->insert_into_item      = __( 'Insert into item', 'multisportxt' );
	$wp_post_types[ $p ]->labels->uploaded_to_this_item = __( 'Uploaded to this item', 'multisportxt' );
	$wp_post_types[ $p ]->labels->items_list            = __( 'Items list', 'multisportxt' );
	$wp_post_types[ $p ]->labels->items_list_navigation = __( 'Items list navigation', 'multisportxt' );
	$wp_post_types[ $p ]->labels->filter_items_list     = __( 'Filter items list', 'multisportxt' );

	$wp_post_types[ $p ]->label                         = __( 'Workouts', 'multisportxt' );
	$wp_post_types[ $p ]->description                   = __( 'Add a workout to your schedule', 'multisportxt' );
	$wp_post_types[ $p ]->supports                      = array( 'title', 'thumbnail' );
	$wp_post_types[ $p ]->taxonomies                    = array( 'thumbnail' );
	$wp_post_types[ $p ]->hierarchical                  = false;
	$wp_post_types[ $p ]->public                        = true;
	$wp_post_types[ $p ]->show_ui                       = true;
	$wp_post_types[ $p ]->show_in_menu                  = true;
	$wp_post_types[ $p ]->menu_position                 = 5;
	$wp_post_types[ $p ]->show_in_admin_bar             = true;
	$wp_post_types[ $p ]->show_in_nav_menus             = true;
	$wp_post_types[ $p ]->can_export                    = true;
	$wp_post_types[ $p ]->has_archive                   = true;
	$wp_post_types[ $p ]->exclude_from_search           = true;
	$wp_post_types[ $p ]->publicly_queryable            = true;
	$wp_post_types[ $p ]->capability_type               = 'page';
}

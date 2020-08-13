<?php

// Redux framework
include 'lib/redux-framework.php';
include 'lib/sample/sample-config.php';
// Add stylesheet and Js 
function wp_interiordesign_scripts(){

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css', array(),'4.1.1', 'all' );
	wp_enqueue_style( 'style-css', get_template_directory_uri().'/css/style.css', array(),'1.1.1', 'all' );
	wp_enqueue_style( 'responsive-css', get_template_directory_uri().'/css/responsive.css', array(),'1.1.1', 'all' );
	wp_enqueue_style( 'main-css', get_template_directory_uri());


	wp_enqueue_script('jquery-js', get_template_directory_uri().'/js/jquery.js', array(), '1.12.4', true);
	wp_enqueue_script('popper-js', get_template_directory_uri().'/js/popper.min.js', array(), '1', true);
	wp_enqueue_script('jquery-ui-js', get_template_directory_uri().'/js/jquery-ui.js', array(), '1.12.1', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array(), '4.1.1', true);
	wp_enqueue_script('fancybox-js', get_template_directory_uri().'/js/jquery.fancybox.js', array(), '3.2.10', true);
	wp_enqueue_script('isotope-js', get_template_directory_uri().'/js/isotope.js', array(), '2.1.1', true);
	wp_enqueue_script('owl-js', get_template_directory_uri().'/js/owl.js', array(), '2.2.0', true);
	wp_enqueue_script('wow-js', get_template_directory_uri().'/js/wow.js', array(), '1.0.1', true);
	wp_enqueue_script('appear-js', get_template_directory_uri().'/js/appear.js', array(), '1.0.0', true);
	wp_enqueue_script('scrollbar-js', get_template_directory_uri().'/js/scrollbar.js', array(), '3.1.12', true);
	wp_enqueue_script('main-js', get_template_directory_uri().'/js/script.js', array(), '1.0.0', true);





}

add_action( 'wp_enqueue_scripts','wp_interiordesign_scripts');



add_theme_support( 'post-formats',array('aside','video','audio') );
add_theme_support( 'post-thumbnails');

// Custome Post Register
function Register_custome_Post(){
	// services one start
	register_post_type( 'services-one',array(
        'labels'  => array(
      	'name'                  =>__('Services One') ,
      	'singular_name'         =>__('Service'),
      	'add_new'               => __( 'Add New'),
        'add_new_item'          => __( 'Add New Service'),
        'new_item'              => __( 'New Service' ),
        'edit_item'             => __( 'Edit Service'),
        'view_item'             => __( 'View Service'),
        'not_found'             => __( 'no service  found'),
        'not_found_in_trash'    => __( 'not service found trash')
      	 ),


        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-performance',
        'menu_position'       => 20,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array('slug' => 'services', ),
        'supports'            => array('title','editor')
	) );
	// services one end


// services two star

	register_post_type( 'services-two',array(
        'labels'  => array(
      	'name'                  =>__('Services Two') ,
      	'singular_name'         =>__('Service'),
      	'add_new'               => __( 'Add New'),
        'add_new_item'          => __( 'Add New Service'),
        'new_item'              => __( 'New Service' ),
        'edit_item'             => __( 'Edit Service'),
        'view_item'             => __( 'View Service'),
        'not_found'             => __( 'no service  found'),
        'not_found_in_trash'    => __( 'not service found trash')
      	 ),


        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-performance',
        'menu_position'       => 21,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array('slug' => 'services'),
        'supports'            => array('title','editor')
	) );

    // services two end

	// Megazine start
	register_post_type( 'megazines',array(
        'labels'  => array(
      	'name'                  =>__('All Megazines') ,
      	'singular_name'         =>__('Megazine'),
      	'add_new'               => __( 'Add New'),
        'add_new_item'          => __( 'Add New Megazine'),
        'new_item'              => __( 'New Megazine' ),
        'edit_item'             => __( 'Edit Megazine'),
        'view_item'             => __( 'View Megazine'),
        'not_found'             => __( 'no Megazine  found'),
        'not_found_in_trash'    => __( 'not Megazine found trash')
      	 ),


        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-format-aside',
        'menu_position'       => 23,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array('slug' => 'megazines', ),
        'supports'            => array('editor')
	) );

		
	// services end




	// Megazine start
	register_post_type( 'works',array(
        'labels'  => array(
      	'name'                  =>__('All Works') ,
      	'singular_name'         =>__('Works'),
      	'add_new'               => __( 'Add New'),
        'add_new_item'          => __( 'Add New Work'),
        'new_item'              => __( 'New Work' ),
        'edit_item'             => __( 'Edit Work'),
        'view_item'             => __( 'View Work'),
        'not_found'             => __( 'no Megazine  found'),
        'not_found_in_trash'    => __( 'not Megazine found trash')
      	 ),


        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-buddicons-topics',
        'menu_position'       => 24,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array('slug' => 'works', ),
        'supports'            => array('title','editor')
	) );

		
	// Megazine end


		// Customers start
	register_post_type( 'customers',array(
        'labels'  => array(
      	'name'                  =>__('All Customers') ,
      	'singular_name'         =>__('customer'),
      	'add_new'               => __( 'Add Customer'),
        'add_new_item'          => __( 'Add New Customer'),
        'new_item'              => __( 'New Customer' ),
        'edit_item'             => __( 'Edit Customer'),
        'view_item'             => __( 'View Customer'),
        'not_found'             => __( 'no Customer  found'),
        'not_found_in_trash'    => __( 'not Customer found trash')
      	 ),


        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-businesswoman',
        'menu_position'       => 24,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array('slug' => 'customer', ),
        'supports'            => array('title','editor')
	) );
    // Customers start
    register_post_type( 'about_us_counter',array(
        'labels'  => array(
        'name'                  =>__('About us counter') ,
        'singular_name'         =>__('About us counter'),
        'add_new'               => __( 'Add About-us-counter'),
        'add_new_item'          => __( 'Add New About-us-counter'),
        'new_item'              => __( 'New About-us-counter' ),
        'edit_item'             => __( 'Edit About-us-counter'),
        'view_item'             => __( 'View About-us-counter'),
        'not_found'             => __( 'no About-us-counter  found'),
        'not_found_in_trash'    => __( 'not About-us-counter found trash')
         ),


        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           =>'dashicons-media-text',
        'menu_position'       => 24,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array('slug' => 'About-us', ),
        'supports'            => array('title','editor')
    ) );


        register_post_type( 'about_us_team',array(
        'labels'  => array(
        'name'                  =>__('About us team member') ,
        'singular_name'         =>__('About usteam'),
        'add_new'               => __( 'Add About us team'),
        'add_new_item'          => __( 'Add New About-us-team'),
        'new_item'              => __( 'New About-us-team' ),
        'edit_item'             => __( 'Edit About-us-team'),
        'view_item'             => __( 'View About-us-team'),
        'not_found'             => __( 'no About-us-team  found'),
        'not_found_in_trash'    => __( 'not About-us-team found trash')
         ),


        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           =>'dashicons-buddicons-buddypress-logo',
        'menu_position'       => 24,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array('slug' => 'About-us', ),
        'supports'            => array('title','editor')
    ) );
		
	// Customers end
}
add_action( 'init','Register_custome_Post');

//Menu Register


function register_my_menu(){
	register_nav_menu( 'main-menu',__('Main Menu') );
};
add_action( 'init', 'register_my_menu');

//Widgets

function interiordesign_widgets(){
register_sidebar( 
    array
    (
            'name'              =>'Footer Widget One',
            'id'                =>'footer_widget_one',
            'before_widget'     =>'<div class="footer-column col-lg-7 col-md-6 col-sm-12"> <div class="footer-widget logo-widget first-widgets">',
            'after_widget'      =>'</div></div>',
            'before_title'=>'',
            'after_title'  =>''
    ) );
register_sidebar( 
    array
        (
            'name'              =>'Footer Widget Two',
            'id'                =>'footer_widget_two',
            'before_widget'     =>'<div class="footer-column col-lg-5 col-md-6 col-sm-12"><div class="footer-widget links-widget second-widgets">',
            'after_widget'      =>'</div></div>',
            'before_title'=>'<h2>',
            'after_title'  =>'</h2>'
         ) );
register_sidebar( array(
            'name'              =>'Footer Widget Three',
            'id'                =>'footer_widget_three',
            'before_widget'     =>'<div class="footer-column col-lg-5 col-md-6 col-sm-12"><div class="footer-widget contact-widget three-widgets">',
            'after_widget'      =>'</div></div>',
            'before_title'=>'<h2>',
            'after_title'  =>'</h2>'

) );
register_sidebar( array(
            'name'              =>'Footer Widget Four',
            'id'                =>'footer_widget_four',
            'before_widget'     =>'<div class="footer-column col-lg-7 col-md-6 col-sm-12"><div class="footer-widget newsletter-widget four-widget">',
            'after_widget'      =>'</div></div>',
            'before_title'=>'<h2>',
            'after_title'  =>'</h2>'

) );


register_sidebar( array(
            'name'              =>'Header Widgets Left',
            'id'                =>'header_widget',
            'before_widget'     =>'<div class="top-right clearfix left-header-widget">',
            'after_widget'      =>'</div>',
            'before_title'      =>'',
            'after_title'       =>''

) );




register_sidebar( array(
            'name'              =>'Header Widgets Right',
            'id'                =>'header_widget_right',
            'before_widget'     =>'<div class="top-left clearfix right-header-widget">',
            'after_widget'      =>'</div>',
            'before_title'      =>'',
            'after_title'       =>''

) );

}

add_action( 'init','interiordesign_widgets' );


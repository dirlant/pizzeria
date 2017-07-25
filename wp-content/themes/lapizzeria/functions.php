<?php

function lapizzeria_setup(){
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'nosotros', $width = 437, $height = 291, $crop = true );
  add_image_size( 'especialidades', $width = 768, $height = 515, $crop = true );
}

add_action( 'after_setup_theme', 'lapizzeria_setup');

function lapizzeria_styles(){

  // Registrando los estilos
  wp_register_style('normalize', $src = get_template_directory_uri() . '/css/normalize.css', $deps = array(), $ver = 'v7.0.0' );
  wp_register_style('google_fonts', $src = 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900', $deps = array(), $ver = 'v1.0.0');
  wp_register_style('fontawesome', $src = get_template_directory_uri() . '/css/font-awesome.min.css', $deps = array('normalize'), $ver = 'v4.7.0' );
  wp_register_style('style', $src = get_template_directory_uri() . '/style.css', $deps = array('normalize'), $ver = 'v1.0' );

  // Llamando a los estilos
  wp_enqueue_style('normalize');
  wp_enqueue_style('google_fonts');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('style');

  // Registrando JS
  wp_register_script('scripts', $src = get_template_directory_uri() . '/js/scripts.js', $deps = array(), $ver = 'v1.0.0', $in_footer = true );

  // Llamando a los scripts
  wp_enqueue_script('jquery');
  wp_enqueue_script('scripts');
}

add_action( 'wp_enqueue_scripts', 'lapizzeria_styles');

// Creacion de menus disponibles

add_action( 'init', 'lapizzeria_menus' );

function lapizzeria_menus(){
  register_nav_menus( $locations = array(
    'header-menu' => __('Header Menu', 'lapizzeria'),
    'social-menu' => __('Social Menu', 'lapizzeria')

  ));
}

// Post custom field, para que aparezca en el menu de wordpress
add_action( 'init', 'lapizzeria_especialidades' );

function lapizzeria_especialidades() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'lapizzeria' ),
		'singular_name'      => _x( 'Pizzas', 'post type singular name', 'lapizzeria' ),
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
    'description'        => __( 'Description.', 'Platillos de la piezzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'pizzas' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);



	register_post_type( 'pizzas', $args );

}


// Widget

function lapizzeria_widgets() {
    register_sidebar( $args = array(
      'name' => 'Blog Sidebar',
      'id' => 'blog_sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'befor_title' => '<h3>',
      'after_title' => '</h3>'

    ));
}

add_action( 'widgets_init', 'lapizzeria_widgets')
?>

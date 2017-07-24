<?php

function lapizzeria_setup(){
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'nosotros', $width = 437, $height = 291, $crop = true );
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
function lapizzeria_menus(){
  register_nav_menus( $locations = array(
    'header-menu' => __('Header Menu', 'lapizzeria'),
    'social-menu' => __('Social Menu', 'lapizzeria')

  ));
}

add_action( 'init', 'lapizzeria_menus' )

?>

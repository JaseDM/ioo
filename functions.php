<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once $understrap_inc_dir . $file;
}

function register_widget_areas() {

	register_sidebar( array(
	  'name'          => 'Pie de página 1',
	  'id'            => 'footer_area_one',
	  'description'   => 'Espacios en pie - posición izquierda',
	  'before_widget' => '<div class="col-12 col-md-4">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h4>',
	  'after_title'   => '</h4>',
	));
  
	register_sidebar( array(
	  'name'          => 'Pie de página 2',
	  'id'            => 'footer_area_two',
	  'description'   => 'Espacios en pie - posición centro',
	  'before_widget' => '<div class="col-12 col-md-4">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h4>',
	  'after_title'   => '</h4>',
	));
  
	register_sidebar( array(
	  'name'          => 'Pie de página 3',
	  'id'            => 'footer_area_three',
	  'description'   => 'Espacios en pie - posición derecha',
	  'before_widget' => '<div class="col-12 col-md-4">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h4>',
	  'after_title'   => '</h4>',
	));

	register_sidebar( array(
		'name'          => 'Top header 1',
		'id'            => 'header_area_uno',
		'description'   => 'Espacio en la cabecera - posición izquierda',
		'before_widget' => '<div class="col-12 col-md-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	  ));

	  register_sidebar( array(
		'name'          => 'Top header 2',
		'id'            => 'header_area_dos',
		'description'   => 'Espacio en la cabecera - posición central',
		'before_widget' => '<div class="col-12 col-md-4 text-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	  ));

	  register_sidebar( array(
		'name'          => 'Top header 3',
		'id'            => 'header_area_tres',
		'description'   => 'Espacio en la cabecera - posición derecha',
		'before_widget' => '<div class="col-12 col-md-4 text-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	  ));
  

  
  }
  
  add_action( 'widgets_init', 'register_widget_areas' );

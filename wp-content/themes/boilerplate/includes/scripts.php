<?php
/**
 * Fifty Boilerplate Script Functions
 *
 * @package Fifty Boilerplate
 * 
 * @since   1.0
 */ 

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
 

/**
 * Enqueue scripts and styles. 
 * @return [type] [description]
 */
function utehomelessness_enqueue_scripts_styles(){

  $component_path = get_stylesheet_directory_uri() . '/assets/components/';
  $js_path        = get_stylesheet_directory_uri() . '/assets/js/';
  $css_path       = get_stylesheet_directory_uri() . '/assets/css/';

  //
  wp_enqueue_script( 'jquery' ); // No conflict mode
  
  /**
   * Javascript 
   * Register & enqueue scripts
   */  
  wp_register_script( 'utehomelessness-app', $js_path . 'app.js', array('jquery'), utehomelessness_VERSION, true );
  wp_enqueue_script( 'utehomelessness-app' ); 

  /**
   * Styles
   * Register & enqueue styles
   *
   * component vendor styles, and core app css
   */
  wp_enqueue_style( 'utehomelessness-style', $css_path . 'style.min.css', '', utehomelessness_VERSION );
}
add_action( 'wp_enqueue_scripts', 'utehomelessness_enqueue_scripts_styles' );
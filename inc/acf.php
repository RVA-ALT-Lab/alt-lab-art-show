<?php
/**
 * ACF Pieces
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

  


//make acf php version 
if( function_exists('acf_add_local_field_group') ):


  //ACF JSON SAVER
  add_filter('acf/settings/save_json', 'art_show_json_save_point');
   
  function art_show_json_save_point( $path ) {
      
      // update path
      $path = get_stylesheet_directory() . '/acf-json';
      
      // return
      return $path;
      
  }

  //ACF JSON LOADER
  add_filter('acf/settings/load_json', 'art_show_acf_json_load_point');

  function art_show_acf_json_load_point( $paths ) {
      
      // remove original path (optional)
      unset($paths[0]);    
      
      // append path
      $path = get_stylesheet_directory() . '/acf-json';
      
      // return
      return $paths;
      
  }

acf_add_local_field_group(array(
  'key' => 'group_5e7397e57d0dc',
  'title' => 'Exhibition Details',
  'fields' => array(
    array(
      'key' => 'field_5e7397fa4917d',
      'label' => 'Exhibition Description',
      'name' => 'exhibition_description',
      'type' => 'textarea',
      'instructions' => 'A short summary of what this exhibition is about.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'new_lines' => '',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/art-installation.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => true,
  'description' => '',
));

endif;
<?php

function lil_register_size_taxonomy() {

  $labels = array(
    'name'  => __( 'Sizes', LILDOMAIN ),
    'singular_name' => __( 'Size', LILDOMAIN ),
    'add_new_item'  => __( 'Add New Size', LILDOMAIN ),
  );

  $args = array(
    'labels' => $labels,
    'public'  => true,
    'show_admin_column' => true,
    'show_in_quick_edit'  => true, 
    'show_in_rest'  => true // This will also make sure that that the taxonomy is visible in the post editor
  );

  $post_types = array( 'business' );

  register_taxonomy('size', $post_types, $args);

}

function lil_register_location_taxonomy() {

  $labels = array(
    'name'  => __( 'Locations', LILDOMAIN ),
    'singular_name' => __( 'Location', LILDOMAIN ),
    'add_new_item'  => __( 'Add New Location', LILDOMAIN ),
  );

  $args = array(
    'labels' => $labels,
    'public'  => true,
    'show_admin_column' => true,
    'show_in_quick_edit'  => true,
    'show_in_rest'  => true, // This will also make sure that that the taxonomy is visible in the post editor
    'hierarchical' => true,
    'rewrite' => array( 'hierarchical' => true, 'with_front' => true )
  );

  $post_types = array( 'business', 'event' );

  register_taxonomy('location', $post_types, $args);

}
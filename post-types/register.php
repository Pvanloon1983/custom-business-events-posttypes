<?php

function lil_register_business_type() {

  $lables = array(
    'name'  =>  __( 'Businesses', LILDOMAIN ),
    'singular_name' => __( 'Business', LILDOMAIN ),
    'featured_image' => __( 'Business Logo', LILDOMAIN ),
    'set_featured_image' => __( 'Set Business Logo', LILDOMAIN ),
    'remove_featured_image' => __( 'Remove Logo', LILDOMAIN ),
    'use_featured_image' => __( 'Use Logo', LILDOMAIN ),
    'archives' => __( 'Business Directory', LILDOMAIN ),
    'add_new' => __( 'Add New Business', LILDOMAIN ),
    'add_new_item' => __( 'Add New Business', LILDOMAIN ),
  );

  $args = array(
    'labels'  =>  $lables,
    'public'  =>  true,
    'has_archive' => 'businesses', // Can also be set to true to take the slug as archive in stead of a custom slug
    'rewrite' => array( 'has_front' => true ), // This is for the url structure what we want,
    'menu_icon' => 'dashicons-building',
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    'show_in_rest'  => true, // turns on the rest API and also use the block editor
  );

  register_post_type( 'business', $args );

}

function lil_register_event_type() {

  $lables = array(
    'name'  =>  __( 'Events', LILDOMAIN ),
    'singular_name' => __( 'Event', LILDOMAIN ),
    'featured_image' => __( 'Event Image', LILDOMAIN ),
    'set_featured_image' => __( 'Set Event Image', LILDOMAIN ),
    'remove_featured_image' => __( 'Remove Image', LILDOMAIN ),
    'use_featured_image' => __( 'Use Image', LILDOMAIN ),
    'archives' => __( 'Events Directory', LILDOMAIN ),
    'add_new' => __( 'Add New Event', LILDOMAIN ),
    'add_new_item' => __( 'Add New Event', LILDOMAIN ),
  );

  $args = array(
    'labels'  =>  $lables,
    'public'  =>  true,
    'has_archive' => 'events', // Can also be set to true to take the slug as archive in stead of a custom slug
    'rewrite' => array( 'has_front' => true ), // This is for the url structure what we want,
    'menu_icon' => 'dashicons-calendar-alt',
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    'show_in_rest'  => true, // turns on the rest API and also use the block editor
  );

  register_post_type( 'event', $args );
  
}
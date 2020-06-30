<?php

function add_theme_scripts()
{

  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'slick-stylesheet', get_template_directory_uri() . '/js/libs/slick/slick.css');
  wp_enqueue_style( 'slick-default-theme', get_template_directory_uri() . '/js/libs/slick/slick-theme.css');
  
  wp_enqueue_script('jquery');
  wp_enqueue_script('slick-script', get_template_directory_uri() . '/js/libs/slick/slick.js');
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'));
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts');

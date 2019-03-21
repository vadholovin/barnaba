<?php

// Register & enqueue styles/scripts
function vh_enqueue() {
  
  // STYLES
  wp_register_style( 'vh_flickity', get_template_directory_uri() . '/assets/libs/flickity/flickity.min.css' );
  wp_register_style( 'vh_owl_carousel', get_template_directory_uri() . '/assets/libs/owl-carousel/assets/owl.carousel.min.css' );
  wp_register_style( 'vh_fancybox', get_template_directory_uri() . '/assets/libs/fancybox/jquery.fancybox.min.css' );
  wp_register_style( 'vh_main', get_template_directory_uri() . '/assets/css/main.css' );
  wp_register_style( 'vh_style', get_stylesheet_uri() );

  wp_enqueue_style( 'vh_flickity' );
  wp_enqueue_style( 'vh_fancybox' );
  wp_enqueue_style( 'vh_owl_carousel' );
  wp_enqueue_style( 'vh_main' );
  wp_enqueue_style( 'vh_style' );

  // SCRIPTS
  wp_register_script( 'vh_flickity', get_template_directory_uri() . '/assets/libs/flickity/flickity.pkgd.min.js', array('jquery'), null, true );
  wp_register_script( 'vh_owl_carousel', get_template_directory_uri() . '/assets/libs/owl-carousel/owl.carousel.min.js', array('jquery'), null, true );
  wp_register_script( 'vh_fancybox', get_template_directory_uri() . '/assets/libs/fancybox/jquery.fancybox.min.js', array('jquery'), null, true );
  wp_register_script( 'vh_readmore', get_template_directory_uri() . '/assets/libs/readmore/readmore.min.js', array('jquery'), null, true );
  wp_register_script( 'vh_custom', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'vh_flickity' );
  wp_enqueue_script( 'vh_readmore' );
  wp_enqueue_script( 'vh_owl_carousel' );
  wp_enqueue_script( 'vh_fancybox' );
  wp_enqueue_script( 'vh_custom' );
}
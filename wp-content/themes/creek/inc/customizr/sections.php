<?php
  
  //delete unnecessary things from nav
  $wp_customize->remove_section('nav'); 
  $wp_customize->remove_section('static_front_page');
  $wp_customize->remove_section('custom_css');

  //sections
  $wp_customize->add_section( 'ads_section', array(
    'title' => esc_html__( 'Ads Settings', 'creek' ),
    'description' => esc_html__( 'Setting up an advertise blocks.', 'creek' ),
    'priority' => 35,
  ));
  
   $wp_customize->add_section( 'header_settings', array(
    'title' => esc_html__( 'Header & Footer Settings', 'creek' ),
    'priority' => 35,
  ));

  $wp_customize->add_section( 'basic_settings', array(
    'title' => esc_html__( 'Layout Settings', 'creek' ),
    'priority' => 35,
  ));
 
?>
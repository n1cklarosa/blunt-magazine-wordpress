<?php

  //HEADER ad
  $wp_customize->add_setting( 'header_ad', array(
    'sanitize_callback' => 'creek_sanitize_adsense',));
	$wp_customize->add_control( 'header_ad', array(
    'label' => esc_html__( 'Header Leaderboard', 'creek' ),
    'description' => esc_html__( 'Big leaderboard advertise bottom of the slider in home, and bottom of the menu in every page.', 'creek' ),
    'section' => 'ads_section',
    'type' => 'textarea',
  ));
  
  $wp_customize->add_setting( 'want_header_ad', array(
    'default' => 0,
    'sanitize_callback' => 'creek_sanitize_checkbox'));
  $wp_customize->add_control( 'want_header_ad', array(
    'label' => esc_html__( 'Display Header Leaderboard', 'creek' ),
    'section' => 'ads_section',
    'type' => 'checkbox',
  ));
  

?>
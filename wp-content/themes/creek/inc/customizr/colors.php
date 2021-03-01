<?php

//Primary
$wp_customize->add_setting( 'primary_color', array(
  'default' => '#BB9973',
  'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
  'label' => esc_html__('primary color', 'creek' ),
  'section' => 'colors',
  'settings' => 'primary_color',
) ) );

//meta
$wp_customize->add_setting( 'meta_color', array(
  'default' => '#999',
  'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_color', array(
  'label' => esc_html__('meta color', 'creek' ),
  'section' => 'colors',
  'settings' => 'meta_color',
) ) );

//dark
$wp_customize->add_setting( 'dark_color', array(
  'default' => '#000',
  'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_color', array(
  'label' => esc_html__('dark color', 'creek' ),
  'section' => 'colors',
  'settings' => 'dark_color',
) ) );

//white
$wp_customize->add_setting( 'white_color', array(
  'default' => '#fff',
  'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'white_color', array(
  'label' => esc_html__('white color', 'creek' ),
  'section' => 'colors',
  'settings' => 'white_color',
) ) );

//border
$wp_customize->add_setting( 'border_color', array(
  'default' => '#eee',
  'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_color', array(
  'label' => esc_html__('border color', 'creek' ),
  'section' => 'colors',
  'settings' => 'border_color',
) ) );

?>
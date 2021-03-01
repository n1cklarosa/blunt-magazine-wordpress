<?php
	
  //Menu position
	$wp_customize->add_setting( 'c_menu_position', array( 'default' => 'bottom', 'sanitize_callback' => 'sanitize_text_field' ) );	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'menu_position',
			array(
				'label'          => esc_html__( 'Menu position', 'creek' ),
				'section'        => 'header_settings',
				'settings'       => 'c_menu_position',
				'type'           => 'select',
				'choices'        => array(
					'bottom' => esc_html__( 'Bottom of the logo', 'creek' ),
          'top' => esc_html__( 'Top of the logo', 'creek' ),
          'top_fixed' => esc_html__( 'Top of the logo and fixed', 'creek' ),
				)
			)
		)
	);

	//menu-width
	$wp_customize->add_setting( 'c_menu_width', array( 'default' => 'small', 'sanitize_callback' => 'sanitize_text_field' ) );	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'menu_width',
			array(
				'label'          => esc_html__( 'Menu width', 'creek' ),
				'section'        => 'header_settings',
				'settings'       => 'c_menu_width',
				'type'           => 'select',
				'choices'        => array(
					'small' => esc_html__( 'Container width', 'creek' ),
          'full' => esc_html__( 'Full width', 'creek' ),
				)
			)
		)
	);

	//footer-width
	$wp_customize->add_setting( 'c_footer_width', array( 'default' => 'small', 'sanitize_callback' => 'sanitize_text_field' ) );	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer_width',
			array(
				'label'          => esc_html__( 'Footer width', 'creek' ),
				'section'        => 'header_settings',
				'settings'       => 'c_footer_width',
				'type'           => 'select',
				'choices'        => array(
					'small' => esc_html__( 'Container width', 'creek' ),
          'full' => esc_html__( 'Full width', 'creek' ),
				)
			)
		)
	);

  $wp_customize->add_setting( 'creek_copyright', array(
    'default' => 'Default copyright text',
    'sanitize_callback' => 'creek_sanitize_text'));
  $wp_customize->add_control( 'creek_copyright', array(
    'label' => esc_html__( 'Copyright text', 'creek' ),
    'section' => 'header_settings',
    'type' => 'text',
  ));

?>
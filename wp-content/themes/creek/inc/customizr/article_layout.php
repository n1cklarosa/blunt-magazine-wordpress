<?php
	
	//header slider
  $wp_customize->add_setting( 'want_header_slider', array(
  	'default' => 1,
    'sanitize_callback' => 'creek_sanitize_checkbox'));
	$wp_customize->add_control( 'want_header_slider', array(
    'label' => esc_html__( 'Display the slider?', 'creek' ),
    'section' => 'basic_settings',
    'type' => 'checkbox',
  ));


  //HOME first 2 posts LAYOUT
	$wp_customize->add_setting( 'c_two_post', array( 'default' => 'grid', 'sanitize_callback' => 'sanitize_text_field') );	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'two_post',
			array(
				'label'          => esc_html__( 'Highlighted two posts layout ', 'creek' ),
				'section'        => 'basic_settings',
				'settings'       => 'c_two_post',
				'type'           => 'select',
				'choices'        => array(
					'list' => esc_html__( 'List', 'creek' ),
          'grid' => esc_html__( 'Grid', 'creek' ),
          'standard' => esc_html__( 'Standard', 'creek' ),
				)
			)
		)
	);
	



	//HOME LAYOUT
  $wp_customize->add_setting('c_home_layout',array('default' => 'list', 'sanitize_callback' => 'sanitize_text_field'));	 
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'home_layout',
			array(
				'label'          => esc_html__( 'Homepage layout', 'creek' ),
				'section'        => 'basic_settings',
				'settings'       => 'c_home_layout',
				'type'           => 'select',
				'choices'        => array(
					'list' => esc_html__( 'List', 'creek' ),
          'grid' => esc_html__( 'Grid', 'creek' ),
          'standard' => esc_html__( 'Standard', 'creek' ),
				)
			)
		)
	);



	//Archive pages LAYOUT
  $wp_customize->add_setting('c_archive_layout',array('default' => 'list', 'sanitize_callback' => 'sanitize_text_field'));	 
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'archive_layout',
			array(
				'label'          => esc_html__( 'Archive pages layout', 'creek' ),
				'section'        => 'basic_settings',
				'settings'       => 'c_archive_layout',
				'type'           => 'select',
				'choices'        => array(
					'list' => esc_html__( 'List', 'creek' ),
          'grid' => esc_html__( 'Grid', 'creek' ),
          'standard' => esc_html__( 'Standard', 'creek' ),
				)
			)
		)
	);




	//SIDEBAR LAYOUT
  $wp_customize->add_setting('c_sidebar_side',array('default' => 'left', 'sanitize_callback' => 'sanitize_text_field' ) );	 
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sidebar_side',
			array(
				'label'          => esc_html__( 'Sidebar side on Home and Archives', 'creek' ),
				'section'        => 'basic_settings',
				'settings'       => 'c_sidebar_side',
				'type'           => 'select',
				'choices'        => array(
					'left' => esc_html__( 'Left', 'creek' ),
          'right' => esc_html__( 'Right', 'creek' ),
          'none' => esc_html__( 'No sidebar', 'creek' ),
				)
			)
		)
	);



	//ARTICLE SIDEBAR LAYOUT
  $wp_customize->add_setting('c_article_sidebar_side',array('default' => 'right', 'sanitize_callback' => 'sanitize_text_field'));	 
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'article_sidebar_side',
			array(
				'label'          => esc_html__( 'Sidebar side on Articles and Pages', 'creek' ),
				'section'        => 'basic_settings',
				'settings'       => 'c_article_sidebar_side',
				'type'           => 'select',
				'choices'        => array(
					'left' => esc_html__( 'Left', 'creek' ),
          'right' => esc_html__( 'Right', 'creek' ),
          'none' => esc_html__( 'No sidebar', 'creek' ),
				)
			)
		)
	);



	//related post layout
  $wp_customize->add_setting('c_related_layout',array('default' => 'right', 'sanitize_callback' => 'sanitize_text_field'));	 
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'related_layout',
			array(
				'label'          => esc_html__( 'Related posts layout', 'creek' ),
				'section'        => 'basic_settings',
				'settings'       => 'c_related_layout',
				'type'           => 'select',
				'choices'        => array(
					'list' => esc_html__( 'List', 'creek' ),
          'grid' => esc_html__( 'Grid', 'creek' ),
          'standard' => esc_html__( 'Standard', 'creek' ),
				)
			)
		)
	);
	//display related posts
  $wp_customize->add_setting( 'want_related_posts', array(
  	'default' => 1,
    'sanitize_callback' => 'creek_sanitize_checkbox'));
	$wp_customize->add_control( 'want_related_posts', array(
    'label' => esc_html__( 'Do you want to display the related posts?', 'creek' ),
    'section' => 'basic_settings',
    'type' => 'checkbox',
  ));



?>
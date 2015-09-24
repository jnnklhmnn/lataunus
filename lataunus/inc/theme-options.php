<?php 
/**
*register customizable options
*/

function lataunus_customize_register( $wp_customize ) {
	
	$wp_customize->add_panel( 'panel_id', array(
	'priority' => 10,
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => __( 'Customize lataunus', 'textdomain' ),
	'description' => __( 'Description of what this panel does.', 'textdomain' ),
	));

	$wp_customize->add_section( 'section_id', array(
	'priority' => 10,
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => __( 'Logo upload', 'textdomain' ),
	'description' => '',
	'panel' => 'panel_id',
	));

	$wp_customize->add_setting( 'logoupload', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logoupload', array(
	'label' => __( 'Logo upload (recommended size 900x400)', 'textdomain' ),
	'section' => 'section_id',
	'settings' => 'logoupload',
	)));

	$wp_customize->add_setting( 'logoupload_alt', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control('logoupload_alt', array(
	'label' => __( 'alternative tag for the logo', 'textdomain' ),
	'section' => 'section_id',
	'settings' => 'logoupload_alt',
	));

	//start favicon
	$wp_customize->add_section( 'favicon-section', array(
	'priority' => 10,
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => __( 'add Favicon', 'textdomain' ),
	'description' => '',
	'panel' => 'panel_id',
	));

	$wp_customize->add_setting( 'favicon', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'favicon', array(
	'label' => __( 'Favicon upload (size 16x16)', 'textdomain' ),
	'section' => 'favicon-section',
	'settings' => 'favicon',
	)));
	//end favicon	

	//start analytics
	$wp_customize->add_section( 'analyticslink-section', array(
	'priority' => 10,
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => __( 'add link to google-analytics', 'textdomain' ),
	'description' => '',
	'panel' => 'panel_id',
	));

	$wp_customize->add_setting( 'analyticslink', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control('analyticslink', array(
	'label' => __( 'paste your google analyticslink here', 'textdomain' ),
	'section' => 'analyticslink-section',
	'settings' => 'analyticslink',
	));
	//end analytics

	$wp_customize->add_section( 'contentbackground-section', array(
	'priority' => 10,
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => __( 'background-color of the content section', 'textdomain' ),
	'description' => '',
	'panel' => 'panel_id',
	));

	$wp_customize->add_setting( 'contentbackground', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize,'contentbackground', 
	array(
	'label'      => __( 'choose the color of the contentbackground', 'textdomain' ),
	'section'    => 'contentbackground-section',
	'settings'   => 'contentbackground',
	)));

	$wp_customize->add_setting( 'contentbackgroundgradient', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control('contentbackgroundgradient', array(
	'label' => __( 'paste your background-radient here', 'textdomain' ),
	'section' => 'contentbackground-section',
	'settings' => 'contentbackgroundgradient',
	));

	$wp_customize->add_setting( 'contentbackground-radio', array(
	'default' => 'default',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control(
	'contentbackground-radio',
	array(
	'type' => 'radio',
	'label' => 'do you want to display a color or a gradient?',
	'section' => 'contentbackground-section',
	'settings' => 'contentbackground-radio',
	'choices' => array(
	'color' => 'color',
	'custom-gradient' => 'gradient',
	'default-gradient' =>'default'
	)));

	$wp_customize->add_section( 'searchfield-section', array(
	'priority' => 10,
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => __( 'Searchfield in the Nav-bar', 'textdomain' ),
	'description' => '',
	'panel' => 'panel_id',
	));

	$wp_customize->add_setting( 'searchfield', array(
	'default' => '0',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control('searchfield', array(
	'label' => __( 'Display Searchform in navbar?', 'textdomain' ),
	'section' => 'searchfield-section',
	'settings' => 'searchfield',
	'type'     => 'checkbox',
	)); 

	$wp_customize->add_section( 'front-page-image-section', array(
	'priority' => 10,
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => __( 'Front-Page-Slider', 'textdomain' ),
	'description' => '',
	'panel' => 'panel_id',
	));

	$wp_customize->add_setting( 'front-page-image', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'front-page-image', array(
	'label' => __( 'Sliderpicture1 (size 745x400)', 'textdomain' ),
	'section' => 'front-page-image-section',
	'settings' => 'front-page-image',
	)));

	$wp_customize->add_setting( 'front-page-image2', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'front-page-image2', array(
	'label' => __( 'Sliderpicture2 (size 745x400)', 'textdomain' ),
	'section' => 'front-page-image-section',
	'settings' => 'front-page-image2',
	)));

	$wp_customize->add_setting( 'front-page-image3', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'front-page-image3', array(
	'label' => __( 'Sliderpicture3 (size 745x400)', 'textdomain' ),
	'section' => 'front-page-image-section',
	'settings' => 'front-page-image3',
	)));
	
	$wp_customize->add_setting( 'front-page-image4', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'front-page-image4', array(
	'label' => __( 'Sliderpicture4 (size 745x400)', 'textdomain' ),
	'section' => 'front-page-image-section',
	'settings' => 'front-page-image4',
	)));

	$wp_customize->add_setting( 'front-page-image5', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'front-page-image5', array(
	'label' => __( 'Sliderpicture5 (size 745x400)', 'textdomain' ),
	'section' => 'front-page-image-section',
	'settings' => 'front-page-image5',
	)));

	$wp_customize->add_setting( 'front-page-image6', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'front-page-image6', array(
	'label' => __( 'Sliderpicture6 (size 745x400)', 'textdomain' ),
	'section' => 'front-page-image-section',
	'settings' => 'front-page-image6',
	)));

	$wp_customize->add_section( 'navbar-color-section', array(
	'priority' => 10,
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => __( 'Navbar and Footer background-color', 'textdomain' ),
	'description' => '',
	'panel' => 'panel_id',
	));

	$wp_customize->add_setting( 'navbar-color', array(
	'default' => '',
	'type' => 'option',
	'capability' => 'edit_theme_options',
	'transport' => 'postMessage'
	));

	$wp_customize->add_control(new WP_Customize_Color_Control( 
	$wp_customize, 
	'navbar-color', 
	array(
	'label'      => __( 'background-color of the Navbar and Footer', 'textdomain' ),
	'section'    => 'navbar-color-section',
	'settings'   => 'navbar-color',
	)));

}
add_action( 'customize_register', 'lataunus_customize_register' );
?>
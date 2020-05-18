<?php

/**
 * Adds sections and settings to customizer
 *
 * @param $wp_customize
 */

function virgo_true_customizer_init( $wp_customize ) {
	//Panels
	$wp_customize->add_panel( 'panel_blog', array(
		'title' => esc_html__( 'Blog settings', 'virgo' ),
		'description' => esc_html__( 'Settings of the blog', 'virgo' ),
		'priority' => 31,
	) );


	/*******************************************************************
	 * Main page settings
	 *******************************************************************/

	$tmp_sectionname = "virgo";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Location sidebar', 'virgo' ),
		'priority' => 30,
		'panel' => 'panel_blog'
	) );
	$tmp_tabel = 'sidebar_position';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => 's2',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Location sidebar', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'radio',
		'choices' => array(
			's1' => esc_html__( 'Sidebar Left', 'virgo' ),
			's2' => esc_html__( 'Sidebar Right', 'virgo' ),
		)
	) );

	/*----------------------------------------------------------------
	 * Blog list setting
	 -----------------------------------------------------------------*/
	$tmp_sectionname = "virgo_blog_list";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Blog list', 'virgo' ),
		'priority' => 30,
		'panel' => 'panel_blog'
	) );

	$tmp_tabel = 'text';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'More posts', 'virgo' ),
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Button text More posts', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	$tmp_tabel = 'limit_word';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => 40,
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Limit word in post blog list', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );


	$tmp_tabel = 'type_blog';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => 'default',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Select blog type', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'select',
		'choices' => array(
			'default' => esc_html__( 'default', 'virgo' ),
			'col2' => esc_html__( 'column 2', 'virgo' ),
			'col3' => esc_html__( 'column 3', 'virgo' ),
			'col1' => esc_html__( 'blog sidebar', 'virgo' ),
		)
	) );


	/*******************************************************************
	 * Social networks
	 *******************************************************************/
	$tmp_sectionname = "social_networks";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Social networks', 'virgo' ),
		'priority' => 31,
		'description' => esc_html__( 'Enter url desired social networks so that they appear on the site', 'virgo' )
	) );

	/*short*/

	$tmp_settingname = $tmp_sectionname . '_control_social_shortcode';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( ' Insert Social shortcode or another ', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'description' => esc_html__( 'its show in footer example shortcode [virgo_social_links url="https://pinterest.com/" class="fa fa-pinterest"]', 'virgo' ),
		'settings' => $tmp_settingname,
		'type' => 'textarea'
	) );


	/*facebook*/
	$tmp_settingname = $tmp_sectionname . '_control_facebook';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Facebook  url', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	/*twitter*/
	$tmp_settingname = $tmp_sectionname . '_control_twitter';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Twitter url', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	/*behance*/
	$tmp_settingname = $tmp_sectionname . '_control_behance';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Behance url', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	/*instagram*/
	$tmp_settingname = $tmp_sectionname . '_control_instagram';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'instagram url', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );


	/*******************************************************************
	 * Social networks
	 *******************************************************************/
	$tmp_sectionname = "virgo_mail";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Setting email', 'virgo' ),
		'priority' => 31,
		'description' => ''
	) );

	/*short*/

	$tmp_settingname = $tmp_sectionname . '_email';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( ' Insert your email', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'description' => esc_html__( 'can specify one email', 'virgo' ),
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );


	/*******************************************************************
	 * mailchimp
	 *******************************************************************/
	$tmp_sectionname = "mail";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Email sitting', 'virgo' ),
		'priority' => 31,
	) );
	$tmp_settingname = $tmp_sectionname . '_email';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => "",
		'sanitize_callback' => 'sanitize_email'
	) );
	$wp_customize->add_control( '_control', array(
		'label' => esc_html__( 'Enter email', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( 'can specify  one email', 'virgo' ),
		'type' => 'text'
	) );


	/*******************************************************************
	 * Header
	 *******************************************************************/

	$tmp_sectionname = "Header";


	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Header', 'virgo' ),
		'priority' => 30,
	) );

	/**
	 * Phone
	 */


	$tmp_settingname = $tmp_sectionname . '_phone';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default'
	,
		'sanitize_callback' => 'wp_kses_post'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( ' Phone in the header', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	$tmp_settingname = $tmp_sectionname . '_mail';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default'
	,
		'sanitize_callback' => 'wp_kses_post'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( ' Mail in the header', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	/*******************************************************************
	 * logo
	 *******************************************************************/


	$tmp_sectionname = "logo";


	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Logo', 'virgo' ),
		'priority' => 30,
		'description' => esc_html__( 'Here You can change the logo in the header and in the footer', 'virgo' )
	) );
	$tmp_settingname = 'virgo_logo_small';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' =>
			'',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
		$tmp_settingname, array(
			'label' => esc_html__( ' Logo', 'virgo' ),
			'section' => $tmp_sectionname . "_section",
			'settings' => $tmp_settingname,
		) ) );

// logo 2
	$tmp_settingname = $tmp_sectionname . 'stiky';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default'
	,
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
		$tmp_settingname, array(
			'label' => $tmp_settingname . esc_html__( ' Logo sticky', 'virgo' ),
			'section' => $tmp_sectionname . "_section",
			'settings' => $tmp_settingname,
		) ) );

	/**
	 *  logo
	 */


	$tmp_settingname = $tmp_sectionname . '_text';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default'
	,
		'sanitize_callback' => 'wp_kses_post'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Logo text', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	/*******************************************************************
	 * Map style
	 *******************************************************************/

	$tmp_sectionname = "virgo_map";
	$tmp_default = "";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Map style', 'virgo' ),
		'priority' => 30,
		'description' => esc_html__( 'Map style JSON config (see https://snazzymaps.com, http://www.mapstylr.com/showcase/ )', 'virgo' )
	) );
	$tmp_tabel = 'stylemap_json';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$tmp_settingtitle = esc_html__( 'stylemap_json', 'virgo' );
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => $tmp_default,
		'sanitize_callback' => 'virgo_sanitize_temp'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'stylemap json', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'textarea'
	) );


	$tmp_settingname = $tmp_sectionname . '_google_key';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Insert you google map api key', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( '(see https://developers.google.com/maps/documentation/javascript/get-api-key#key )', 'virgo' ),
		'type' => 'text',
	) );


	/******************************************************************
	 * Colors
	 */

	$colors = array();
	if ( function_exists( 'virgo_get_style_color' ) ) {
		$colors = virgo_get_style_color();
	}


	$arr_exclude = array(
		'717071',
		'616060',
		'8A8A8A',
		'4B4B4B'

	);


	foreach ( $colors as $k => $v ) {
		$grb = virgo_Hex2RGB( $v );
		if ( in_array( $v, $arr_exclude ) ) {
			continue;
		}
		$tmp_sectionname = 'colors';
		$tmp_settingname = $tmp_sectionname . '_m_' . $v;
		$label = $v;

		if ( $v == '6534FF' ) {
			$label = esc_html__( 'Link ', 'virgo' );
		}
		if ( $v == '3B3B3B' ) {
			$label = esc_html__( 'Title text ', 'virgo' );
		}
		if ( $v == '1A1A1A' ) {
			$label = esc_html__( 'blockquote and comment border', 'virgo' );
		}
		if ( $v == '686868' ) {
			$label = esc_html__( 'blockquote and comment ', 'virgo' );
		}
		if ( $v == 'D1D1D1' ) {
			$label = esc_html__( 'Footer widget calendar border ', 'virgo' );
		}
		if ( $v == 'F45D5D' ) {
			$label = esc_html__( 'Sticky bloginfo title', 'virgo' );
		}
		if ( $v == 'A1A1A1' ) {
			$label = esc_html__( 'Recent comment link', 'virgo' );
		}

		if ( $v == '939393' ) {
			$label = esc_html__( 'Footer sidebar rss', 'virgo' );
		}
		if ( $v == '858585' ) {
			$label = esc_html__( 'Navigation mobile link ', 'virgo' );
		}
		if ( $v == '3D3D3D' ) {
			$label = esc_html__( 'Statistics number ', 'virgo' );
		}
		if ( $v == 'DADADA' ) {
			$label = esc_html__( 'Form textarea border buttom ', 'virgo' );
		}
		if ( $v == 'A7A7A7' ) {
			$label = esc_html__( 'Form subscribe placeholder text ', 'virgo' );
		}
		if ( $v == '5E31E9' ) {
			$label = esc_html__( 'Form validation label text ', 'virgo' );
		}
		if ( $v == '747474' ) {
			$label = esc_html__( 'Form validation error text ', 'virgo' );
		}
		if ( $v == '7549FF' ) {
			$label = esc_html__( 'Button focuse, button viole ', 'virgo' );
		}
		if ( $v == '292929' ) {
			$label = esc_html__( 'Banner dark, button dark background ', 'virgo' );
		}
		if ( $v == '59D5F0' ) {
			$label = esc_html__( 'Banner blue, button blue background ', 'virgo' );
		}
		if ( $v == 'C5A47E' ) {
			$label = esc_html__( 'Brown button, background brown ', 'virgo' );
		}
		if ( $v == '030203' ) {
			$label = esc_html__( 'Text dark ', 'virgo' );
		}
		if ( $v == '9A9A9A' ) {
			$label = esc_html__( 'Category name. post name ', 'virgo' );
		}
		if ( $v == '222222' ) {
			$label = esc_html__( 'Background dark', 'virgo' );
		}
		if ( $v == '1C1C1C' ) {
			$label = esc_html__( 'Left menu link brandpanel ', 'virgo' );
		}
		if ( $v == 'F7F7F7' ) {
			$label = esc_html__( 'Background light', 'virgo' );
		}
		if ( $v == 'A515CC' ) {
			$label = esc_html__( 'Background violet', 'virgo' );
		}
		if ( $v == 'A515CC' ) {
			$label = esc_html__( 'Background violet', 'virgo' );
		}
		if ( $v == '959595' ) {
			$label = esc_html__( 'Background yellow', 'virgo' );
		}
		if ( $v == '959595' ) {
			$label = esc_html__( 'Mobile menu link ', 'virgo' );
		}
		if ( $v == '161616' ) {
			$label = esc_html__( 'Left menu link background ', 'virgo' );
		}
		if ( $v == '202020' ) {
			$label = esc_html__( 'Left menu link hover ', 'virgo' );
		}
		if ( $v == '595959' ) {
			$label = esc_html__( 'Left menu link ', 'virgo' );
		}
		if ( $v == '3E3E3E' ) {
			$label = esc_html__( 'Statistics dark column border ', 'virgo' );
		}
		if ( $v == '141414' ) {
			$label = esc_html__( 'Portfolio image popup background ', 'virgo' );
		}
		if ( $v == 'C1C1C1' ) {
			$label = esc_html__( 'Blog author name text ', 'virgo' );
		}
		if ( $v == 'E9E9E9' ) {
			$label = esc_html__( 'Blog tags background ', 'virgo' );
		}
		if ( $v == '474747' ) {
			$label = esc_html__( 'Blog tags text ', 'virgo' );
		}
		if ( $v == 'EAE9E9' ) {
			$label = esc_html__( 'Client reviews qute icon ', 'virgo' );
		}
		if ( $v == 'E2E2E2' ) {
			$label = esc_html__( 'Owl reviews slider pagination ', 'virgo' );
		}
		if ( $v == 'E5E5E5' ) {
			$label = esc_html__( 'Address icon ', 'virgo' );
		}
		if ( $v == '666666' ) {
			$label = esc_html__( 'Address title ', 'virgo' );
		}
		if ( $v == 'F2F2F2' ) {
			$label = esc_html__( 'Footer light background ', 'virgo' );
		}
		if ( $v == '525252' ) {
			$label = esc_html__( 'Footer bottom text ', 'virgo' );
		}
		if ( $v == 'B0B0B0' ) {
			$label = esc_html__( 'Model info text ', 'virgo' );
		}

		if ( $v == 'CACACA' ) {
			$label = esc_html__( 'Statistics column border ', 'virgo' );
		}
		if ( $v == 'FEDE5C' ) {
			$label = esc_html__( 'bg yellow ', 'virgo' );
		}


		$wp_customize->add_setting( $tmp_settingname, array(
			'default' => "#" . esc_html( $v ),
			'sanitize_callback' => 'virgo_sanitize_temp'
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $tmp_settingname,
			array(
				'label' => esc_html__( 'Color ', 'virgo' ) . esc_html( $label ) . '',
				'section' => $tmp_sectionname,
				'settings' => $tmp_settingname,
			) ) );
	}


	/*******************************************************************
	 * Performans
	 *******************************************************************/

	$tmp_sectionname = "virgo_performans";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Performance', 'virgo' ),
		'priority' => 31,
		'description' => esc_html__( '', 'virgo' )
	) );

	$tmp_settingname = $tmp_sectionname . '_preloader';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => true,
		'sanitize_callback' => 'wp_validate_boolean'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Enable preloader ?', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'checkbox',
	) );


	$tmp_settingname = $tmp_sectionname . '_scroll';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => false,
		'sanitize_callback' => 'wp_validate_boolean'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Enable smoothscroll?', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'checkbox',
	) );


	/*******************************************************************
	 * contact form shortcode
	 *******************************************************************/

	$tmp_sectionname = "virgo_c_form_s";


	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Contact form shortcode', 'virgo' ),
		'priority' => 31,
		'description' => esc_html__( '', 'virgo' )
	) );

	$tmp_settingname = $tmp_sectionname . '_val';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '[virgo_contact_form]',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => $tmp_sectionname . esc_html__( 'Contact form shortcode', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'textarea',
	) );


	$tmp_settingname = $tmp_sectionname . '_interior_val';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '[virgo_contact_form_interior]',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Contact form shortcode from Interior page', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'textarea',
	) );


	$tmp_settingname = $tmp_sectionname . '_architecture_val';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '[virgo_contact_form_architecture]',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Contact form shortcode from Architecture page', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'textarea',
	) );


	$tmp_settingname = $tmp_sectionname . '_modal_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Get start ', 'virgo' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'modal title', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text',
	) );


	$tmp_settingname = $tmp_sectionname . '_modal_description';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Leave your contacts and our managers<br> will contact you soon. ', 'virgo' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'modal description', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'textarea',
	) );

	$tmp_settingname = $tmp_sectionname . '_susses_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Thank you', 'virgo' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Modal susses title', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text',
	) );


	/*
	 *
	 */
	$tmp_settingname = $tmp_sectionname . '_susses_sub_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Your message is successfully sent...', 'virgo' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Modal susses subtitle', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text',
	) );

	/*
	 *
	 */
	$tmp_settingname = $tmp_sectionname . '_error_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Sorry', 'virgo' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Modal error title', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text',
	) );
	/*
	 *
	 */
	$tmp_settingname = $tmp_sectionname . '_error_sub_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Something went wrong', 'virgo' ),
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Modal error subtitle', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text',
	) );

	/*
	 *
	 */


	/*
	 *
	 */
	$tmp_settingname = $tmp_sectionname . '_error_title';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'We\'re sorry, but something went wrong', 'virgo' ),
		'sanitize_callback' => 'wp_kses_post'
	) );


	/*********************************************************
	 * Footer
	 **************************************************************/
	$tmp_sectionname = "footer";


	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Footer', 'virgo' ),
		'priority' => 31,
		'description' => esc_html__( '', 'virgo' )
	) );

	$tmp_settingname = $tmp_sectionname . '_copyright';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Footer copyright', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'textarea',
	) );


	/*******************************************************************
	 * 404
	 *******************************************************************/
	$tmp_sectionname = "virgo_404";
	$tmp_default = "";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( '404', 'virgo' ),
		'priority' => 30,
	) );

	$tmp_settingname = $tmp_sectionname . '_top_img';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' =>
			'',
		'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
		$tmp_settingname, array(
			'label' => esc_html__( '404 page Top img', 'virgo' ),
			'section' => $tmp_sectionname . "_section",
			'settings' => $tmp_settingname,
		) ) );


	$tmp_tabel = 'main_title';
	$tmp_settingname = $tmp_sectionname . '_' . $tmp_tabel;
	$tmp_settingtitle = esc_html__( 'main_title', 'virgo' );
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => $tmp_default,
		'sanitize_callback' => 'virgo_sanitize_temp'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Top title', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( 'insert title (for example 404 Page) )', 'virgo' ),
		'type' => 'text'
	) );


	$tmp_settingname = $tmp_sectionname . '_top_desc';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.', 'virgo' ),
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Insert your description', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( '(insert text )', 'virgo' ),
		'type' => 'textarea',

	) );


	$tmp_settingname = $tmp_sectionname . '_btn_text';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => esc_html__( 'Go Back', 'virgo' ),
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Insert your button text', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( '(insert text )', 'virgo' ),
		'type' => 'text',


	) );


	$tmp_settingname = $tmp_sectionname . '_btn_url';

	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => '',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'Insert your button url', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'description' => esc_html__( '(insert url )', 'virgo' ),
		'type' => 'text',


	) );


	/*******************************************************************
	 * mailchimp
	 *******************************************************************/
	$tmp_sectionname = "virgo_mailchimp";
	$wp_customize->add_section( $tmp_sectionname . '_section', array(
		'title' => esc_html__( 'Mailchimp / Subscribe ', 'virgo' ),
		'priority' => 31,
		'description' => esc_html__( 'Specify api key and ID list', 'virgo' )
	) );
	$tmp_settingname = $tmp_sectionname . '_api_control';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => "",
		'sanitize_callback' => 'esc_attr'
	) );
	$wp_customize->add_control( '_control', array(
		'label' => esc_html__( 'API key', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );

	$tmp_settingname = $tmp_sectionname . 'id_list_control';
	$wp_customize->add_setting( $tmp_settingname, array(
		'default' => "",
		'sanitize_callback' => 'esc_attr'
	) );
	$wp_customize->add_control( $tmp_settingname . '_control', array(
		'label' => esc_html__( 'ID list', 'virgo' ),
		'section' => $tmp_sectionname . "_section",
		'settings' => $tmp_settingname,
		'type' => 'text'
	) );
}


function virgo_sanitize_to_int( $value ) {
	return (int) $value;
}


function virgo_sanitize_temp( $value ) {
	return $value;
}


/**
 *Plug in  script to customize
 */

add_action( 'customize_register', 'virgo_true_customizer_init' );


function virgo_color_hack( $css ) {
	$css = str_ireplace( "322F44", "33244A", $css );
	$css = str_ireplace( "47A5F5", "009ECC", $css );
	$css = str_ireplace( "45C3E8", "009ECC", $css );
	$css = str_ireplace( "7CCB18", "AAC600", $css );
	$css = str_ireplace( "62B50A", "AAC600", $css );
	$css = str_ireplace( "006EC6", "0081DB", $css );
	$css = str_ireplace( array(
		"7CCB18",
		"1B2027",
		"191A22",
		"1F1C2D",
		"191A22"
	), array(
		"97C900",
		"030102",
		"011222",
		"011222"
	), $css );
	//green
	$css = str_ireplace( "AAC600", "97C900", $css );
	//orange
	$css = str_ireplace( array(
		"FF9C00",
		"FFAC00",
		"FF5700",
		"FFCB00"
	), "FF9100", $css );
	//dark red
	$css = str_ireplace( array(
		"D82E26",
		"CC130A",
		"A1201A"
	), "D82E26", $css );
	//light red
	$css = str_ireplace( array(
		"E51616",
		"F54100",
		"E73931"
	), "FF9100", $css );

	return $css;


}

function virgo_Hex2RGB( $color ) {
	$color = str_replace( '#', '', $color );
	if ( strlen( $color ) != 6 ) {
		return array(
			0,
			0,
			0
		);
	}
	$virgo_rgb = array();
	for ( $x = 0; $x < 3; $x ++ ) {
		$virgo_rgb[$x] = hexdec( substr( $color, ( 2 * $x ), 2 ) );
	}

	return $virgo_rgb;
}
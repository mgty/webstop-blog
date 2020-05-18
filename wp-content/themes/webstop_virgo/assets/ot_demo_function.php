<?php
/**
 * Theme Mode
 */
/**
 * Show Settings Pages
 */
add_filter('ot_show_pages', '__return_false');

/**
 * Show New Layout
 */
add_filter('ot_show_new_layout', '__return_false');

/*******************************************************/

/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'virgo_custom_theme_options' );
/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.3.0
 */
function virgo_custom_theme_options() {
	/* OptionTree is not loaded yet, or this is not an admin request */
	if ( !function_exists( 'ot_settings_id' ) || !is_admin() ) {
		return false;
	}
	/**
	 * Get a copy of the saved settings array.
	 */
	$saved_settings = get_option( ot_settings_id(), array() );
	$custom_settings = array(
		'contextual_help' => array(
			'sidebar' => ''
		),
		'sections' => array(
			array(
				'id' => 'general',
				'title' => esc_html__( 'General Config', 'virgo' )
			),
			array(
				'id' => 'css',
				'title' => esc_html__( 'Custom CSS & JS', 'virgo' )
			),

			array(
				'id' => 'mask',
				'title' => esc_html__( 'Image mask', 'virgo' )
			),
			array(
				'id' => 'google_fonts',
				'title' => esc_html__( 'Google Fonts', 'virgo' )
			),
			array(
				'id' => 'typography',
				'title' => esc_html__( 'Typography', 'virgo' )
			),
			array(
				'id' => 'navigation',
				'title' => esc_html__( 'Navigation', 'virgo' )
			),

			array(
				'id' => 'sidebars_settings',
				'title' => esc_html__( 'Theme Sidebars Color Options', 'virgo' )
			),


			array(
				'id' => 'frontheader_color',
				'title' => esc_html__( 'Frontage Color Options', 'virgo' )
			),

			array(
				'id' => 'header',
				'title' => esc_html__( 'blog/Page Header Options', 'virgo' )
			),
			array(
				'id' => 'header_color',
				'title' => esc_html__( 'blog/Page Header Color Options', 'virgo' )
			),

			array(
				'id' => 'single_header',
				'title' => esc_html__( 'Single Page Header Options', 'virgo' )
			),
			array(
				'id' => 'archive_page',
				'title' => esc_html__( 'Archive Page Header Options', 'virgo' )
			),
			array(
				'id' => 'error_page',
				'title' => esc_html__( '404 Page Header Options', 'virgo' )
			),
			array(
				'id' => 'search_page',
				'title' => esc_html__( 'Search Page Header Options', 'virgo' )
			),



		),
		'settings' => array(


			array(
				'id' => 'additionalcss',
				'label' => esc_html__( 'additional css', 'virgo' ),
				'desc' => esc_html__( 'You can add additional css ', 'virgo' ),
				'std' => '',
				'type' => 'css',
				'section' => 'css',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => ''
			),

			array(
				'id' => 'additionaljs',
				'label' => esc_html__( 'additional javascript', 'virgo' ),
				'desc' => esc_html__( 'You can add additional javascript ', 'virgo' ),
				'std' => '',
				'type' => 'css',
				'section' => 'css',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => ''
			),

			array(
				'id' => 'virgo_mask',
				'label' => esc_html__( 'Background Black mask', 'virgo' ),
				'desc' => sprintf( esc_html__( 'Background Image Black mask %s or %s.', 'virgo' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'mask',
				'operator' => 'and'
			),

			array(
				'id' => 'virgo_m_c',
				'label' => esc_html__( 'Mask color', 'virgo' ),
				'desc' => esc_html__( 'Please select color with opacity', 'virgo' ),
				'type' => 'colorpicker-opacity',
				'std' => '',
				'section' => 'mask'
			),


			/**
			 * FRONTPAGE COLOR SETTINGS.
			 */

			array(
				'id' => 'virgo_frontpage_header_slogan_color',
				'label' => esc_html__( 'Frontpage paragraph  color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'frontheader_color'
			),
			array(
				'id' => 'virgo_frontpage_header_buttonbg_color',
				'label' => esc_html__( 'Frontpage button background color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'frontheader_color'
			),
			array(
				'id' => 'virgo_frontpage_header_buttonbg_hover_color',
				'label' => esc_html__( 'Frontpage button background hover color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'frontheader_color'
			),


			/*** GENERAL SETTINGS. **/


			array(
				'id' => 'virgo_logowidth',
				'label' => esc_html__( 'Logo width', 'virgo' ),
				'desc' => esc_html__( 'Logo width', 'virgo' ),
				'std' => '39',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'general',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),



			array(
				'id' => 'virgo_font_size',
				'label' => esc_html__( 'Logo  text font size', 'virgo' ),
				'desc' => esc_html__( 'Logo font size', 'virgo' ),
				'std' => '1.875',
				'type' => 'numeric-slider',
				'min_max_step'=> '0,6,0.001',
				'section' => 'general',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),


			/**
			 * GOOGLE FONTS SETTINGS.
			 */
			array(
				'id' => 'body_google_fonts',
				'label' => esc_html__( 'Google Fonts', 'virgo' ),
				'desc' => 'Add Google Font and after the save settings follow these steps Dashbovirgo > Appearance > Theme Options > Typography',
				'std' => '',
				'type' => 'google-fonts',
				'section' => 'google_fonts',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			/**
			 * TYPOGRAPHY SETTINGS.
			 */
			array(
				'id' => 'virgo_tipigrof',
				'label' => esc_html__( 'Typography', 'virgo' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'virgo' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_tipigrof1',
				'label' => esc_html__( 'Typography h1', 'virgo' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'virgo' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_tipigrof2',
				'label' => esc_html__( 'Typography h2', 'virgo' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'virgo' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_tipigrof3',
				'label' => esc_html__( 'Typography h3', 'virgo' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'virgo' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_tipigrof4',
				'label' => esc_html__( 'Typography h4', 'virgo' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'virgo' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_tipigrof5',
				'label' => esc_html__( 'Typography h5', 'virgo' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'virgo' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_tipigrof6',
				'label' => esc_html__( 'Typography h6', 'virgo' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'virgo' ),
				'std' => '',
				'type' => 'typography',
				'section' => 'typography',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),
			/**
			 * NAVIGATION SETTINGS.
			 */


			array(
				'id' => 'virgo_navigationbg',
				'label' => esc_html__( 'Theme navigation background color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color with opacity', 'virgo' ),
				'type' => 'colorpicker-opacity',
				'std' => '',
				'section' => 'navigation'
			),
			array(
				'id' => 'virgo_navitem',
				'label' => esc_html__( 'Theme navigation menu item color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'navigation'
			),
			array(
				'id' => 'virgo_navitem_affix',
				'label' => esc_html__( 'Theme navigation menu item color affix', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'navigation'
			),
			array(
				'id' => 'virgo_navitemhover',
				'label' => esc_html__( 'Theme navigation menu item hover color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'navigation'
			),


			array(
				'id' => 'virgo_sidebarwidgetgeneralcolor',
				'label' => esc_html__( 'Theme Sidebar widget general color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'sidebars_settings'
			),
			array(
				'id' => 'virgo_sidebarwidgettitlecolor',
				'label' => esc_html__( 'Theme Sidebar widget title color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'sidebars_settings'
			),
			array(
				'id' => 'virgo_sidebarlinkcolor',
				'label' => esc_html__( 'Theme Sidebar link title color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'sidebars_settings'
			),
			array(
				'id' => 'virgo_sidebarlinkhovercolor',
				'label' => esc_html__( 'Theme Sidebar link title hover color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'sidebars_settings'
			),
			array(
				'id' => 'virgo_sidebarsearchsubmittextcolor',
				'label' => esc_html__( 'Theme Sidebar search submit text color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'sidebars_settings'
			),
			array(
				'id' => 'virgo_sidebarsearchsubmitbgcolor',
				'label' => esc_html__( 'Theme Sidebar search submit color', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'sidebars_settings'
			),

			/**
			 * blog/PAGE HEADER SETTINGS.
			 */
			array(
				'id' => 'virgo_mask_c_page_header',
				'label' => esc_html__( 'Pages header background image visibility', 'virgo' ),
				'desc' => sprintf( esc_html__( 'Heading visibility %s or %s.', 'virgo' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'header',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'min_max_step' => '',
				'class' => '',
				'condition' => '',
				'operator' => 'and'
			),

			array(
				'id' => 'virgo_blogheaderbgcolor',
				'label' => esc_html__( 'blog Pages Header Section background color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker-opacity',
				'std' => '',
				'section' => 'header'
			),
			array(
				'id' => 'virgo_blogheaderbgcolor_mask',
				'label' => esc_html__( 'blog Pages Header Section background mask color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker-opacity',
				'std' => '',
				'section' => 'header'
			),


			array(
				'id' => 'virgo_blogheaderpaddingtop',
				'label' => esc_html__( 'Header padding top', 'virgo' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'virgo' ),
				'std' => '17',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'header',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_blogheaderpaddingbottom',
				'label' => esc_html__( 'Header padding bottom', 'virgo' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'virgo' ),
				'std' => '14',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'header',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),

			/**
			 * SINGLE HEADER SETTINGS.
			 */


			array(
				'id' => 'virgo_singleheaderpaddingtop',
				'label' => esc_html__( 'Header padding top', 'virgo' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'virgo' ),
				'std' => '17',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'single_header',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_singleheaderpaddingbottom',
				'label' => esc_html__( 'Header padding bottom', 'virgo' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'virgo' ),
				'std' => '14',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'single_header',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_singleheadingcolor',
				'label' => esc_html__( 'Single Pages Heading color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'single_header'
			),
			array(
				'id' => 'virgo_singleheaderparagraphcolor',
				'label' => esc_html__( 'Single Pages title post color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'single_header'
			),


			/**
			 * ARCHIVE HEADER SETTINGS.
			 */


			array(
				'id' => 'virgo_archiveheaderpaddingtop',
				'label' => esc_html__( 'Header padding top', 'virgo' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'virgo' ),
				'std' => '17',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'archive_page',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_archiveheaderpaddingbottom',
				'label' => esc_html__( 'Header padding bottom', 'virgo' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'virgo' ),
				'std' => '14',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'archive_page',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),


			array(
				'id' => 'virgo_archiveheadingcolor',
				'label' => esc_html__( 'Archive Pages Heading color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'typography',
				'std' => '',
				'section' => 'archive_page'
			),


			/**
			 * 404 PAGE HEADER SETTINGS.
			 */


			array(
				'id' => 'virgo_errorheaderpaddingtop',
				'label' => esc_html__( 'Header padding top', 'virgo' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'virgo' ),
				'std' => '17',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'error_page',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_errorheaderpaddingbottom',
				'label' => esc_html__( 'Header padding bottom', 'virgo' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'virgo' ),
				'std' => '17',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'error_page',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
		
			array(
				'id' => 'virgo_errorheadingcolor',
				'label' => esc_html__( '404 Pages Heading color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'typography',
				'std' => '',
				'section' => 'error_page'
			),



			array(
				'id' => 'virgo_errorheaderparagraphcolor',
				'label' => esc_html__( '404 Pages paragraph/slogan color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'typography',
				'std' => '',
				'section' => 'error_page'
			),


			/**
			 * SEARCH PAGE HEADER SETTINGS.
			 */


			array(
				'id' => 'virgo_searchheaderbgcolor',
				'label' => esc_html__( 'Search Pages Heading color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'typography',
				'std' => '',
				'section' => 'search_page'
			),

			array(
				'id' => 'virgo_searchheaderpaddingtop',
				'label' => esc_html__( 'Header padding top', 'virgo' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'virgo' ),
				'std' => '17',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'search_page',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),
			array(
				'id' => 'virgo_searchheaderpaddingbottom',
				'label' => esc_html__( 'Header padding bottom', 'virgo' ),
				'desc' => esc_html__( 'You can use this option for heading text vertical align', 'virgo' ),
				'std' => '14',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'search_page',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),


			array(
				'id' => 'virgo_search_heading_fontsize',
				'label' => esc_html__( 'Search Page Heading font size', 'virgo' ),
				'desc' => esc_html__( 'Enter Search Page Heading font size', 'virgo' ),
				'std' => '',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'search_page',
				'rows' => '',
				'post_type' => '',
				'taxonomy' => '',
				'class' => '',
				'operator' => 'and'
			),


			/**
			 * blog/PAGE HEADING COLOR SETTINGS.
			 */
			array(
				'id' => 'virgo_blogheadingcolor',
				'label' => esc_html__( 'blog Pages Heading color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'header_color'
			),
			array(
				'id' => 'virgo_blogsubtitlecolor',
				'label' => esc_html__( 'blog Pages  post / page title color ', 'virgo' ),
				'desc' => esc_html__( 'Please select color', 'virgo' ),
				'type' => 'colorpicker',
				'std' => '',
				'section' => 'header_color'
			),
		





		)
	);
	/* allow settings to be filtered before saving */
	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
	/* settings are not the same update the DB */
	if ( $saved_settings !== $custom_settings ) {
		update_option( ot_settings_id(), $custom_settings );
	}
	/* Lets OptionTree know the UI Builder is being overridden */
	global $ot_has_custom_theme_options;
	$ot_has_custom_theme_options = true;
}
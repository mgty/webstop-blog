<?php

/**
 * We print the scripts and styles in the frontend
 */


add_action( 'wp_enqueue_scripts', 'virgo_style_scripts', 500 );


/**
 *
 */
function virgo_style_scripts() {
	global $post, $virgo_class;
	//color theme in css
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'animsition', get_template_directory_uri() . '/css/animsition.min.css' );
	wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'ionicons-min', get_template_directory_uri() . '/css/ionicons.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'hover', get_template_directory_uri() . '/css/hover.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'owl-transitions', get_template_directory_uri() . '/css/owl.transitions.css' );



	wp_enqueue_style( 'virgo-main-style', get_template_directory_uri() . "/css/style.css" );


	if ( is_page() || is_single() ) {
		if ( get_page_template_slug( get_the_ID() ) == "template-frelance-dark.php" ) {
			wp_enqueue_style( 'virgo-style-dark', get_template_directory_uri() . "/css/dark.css" );
		}
		if ( get_page_template_slug( get_the_ID() ) == "template-frelance-light.php" ) {
			wp_enqueue_style( 'virgo-style-dark', get_template_directory_uri() . "/css/light.css" );
		}
		if ( get_post_type( get_the_ID() ) == "projects" ) {
			wp_enqueue_style( 'virgo-style-dark', get_template_directory_uri() . "/css/dark.css" );
		}
		if ( get_page_template_slug( get_the_ID() ) == "template-architecture.php" ) {
			wp_enqueue_style( 'virgo-architecture', get_template_directory_uri() . "/css/architecture.css" );
			wp_enqueue_style( 'virgo-fonts-Playfair', $virgo_class->virgo_google_fonts_url( 'Playfair+Display:400,400i,700,700i,900' ) );
			wp_enqueue_style( 'virgo-fonts-Monsterrat', $virgo_class->virgo_google_fonts_url( 'Montserrat:400,700' ) );
			wp_enqueue_style( 'virgo-fonts-Lora', $virgo_class->virgo_google_fonts_url( 'Lora:400,400i,700,700i&amp;subset=cyrillic' ) );
		}

		if ( get_page_template_slug( get_the_ID() ) == "template-interior.php" ) {
			wp_enqueue_style( 'virgo-style-interior', get_template_directory_uri() . "/css/interior.css" );
			wp_enqueue_style( 'virgo-fonts-Playfair', $virgo_class->virgo_google_fonts_url( 'Playfair+Display:400,400i,700,700i,900' ) );
			wp_enqueue_style( 'virgo-fonts-Monsterrat', $virgo_class->virgo_google_fonts_url( 'Montserrat:400,700' ) );
			wp_enqueue_style( 'virgo-fonts-Lora', $virgo_class->virgo_google_fonts_url( 'Lora:400,400i,700,700i&amp;subset=cyrillic' ) );

		}


	}


	if ( function_exists( 'virgo_enqueue_url_base_style' ) && virgo_enqueue_url_base_style() == true ) {
		wp_enqueue_style( 'virgo-main-style-new', virgo_enqueue_url_base_style() );
	}


	wp_enqueue_style( 'virgo-style-wp', get_stylesheet_directory_uri() . '/style.css' );


	//************************************* Fonts ***********************************************/
	wp_enqueue_style( 'virgo-fonts-google-Roboto', $virgo_class->virgo_google_fonts_url( 'Lora:400,400i,700,700i|Montserrat:400,700|Playfair+Display:400,400i,700,700i&amp;subset=cyrillic' ) );

	if ( is_customize_preview() && function_exists( 'virgo_css_generator_custumize' ) ) {
		wp_add_inline_style( 'virgo-style-wp', virgo_css_generator_custumize() );
	}


	if ( strlen( get_theme_mod( 'colors_m_D4B068' ) ) > 2 ) {
		if ( get_option( 'virgo_color' ) ) {
			wp_add_inline_style( 'virgo-style-wp', wp_kses_post( get_option( 'virgo_color' ) ) );
		}
	}


	// cat image bg
	$bg = virgo_taxonomy_image();
	if ( !isset( $bg{8} ) ) {
		$bg = get_header_image();
	}
	if ( is_single() || is_page() ) {

		$image_id = get_post_meta( $post->ID, '_virgo_image_id', true );
		//if issest id img
		if ( $image_id && get_post( $image_id ) ) {
			$image = wp_get_attachment_image_src( $image_id, 'full' );


			if ( isset( $image[0] ) ) {
				$bg = $image[0];
			}

		}

	}


	$css = '';

	if ( isset( $bg{8} ) ) {
		$css .= '.main-blog ,  .page  .main-inner {
                background: url(' . esc_url( $bg ) . ') 50%  no-repeat; 
                 
                }';
	}

	$footer_bg = get_theme_mod( 'footer_img' );
	if ( isset( $footer_bg{8} ) ) {
		$footer_bg = esc_url( $footer_bg );
		$css .= 'footer.footer{
                background: url(' . esc_url( $footer_bg ) . ') 50%  no-repeat !important; 
                background-size: cover !important; 
                }';
	}


	if ( strlen( get_theme_mod( 'colors_m_D4B068' ) ) > 2 ) {
		if ( get_option( 'virgo_color' ) ) {
			wp_add_inline_style( 'virgo-style_wp', wp_kses_post( get_option( 'virgo_color' ) ) );
		}
	}

	wp_add_inline_style( 'virgo-main-style', $css );


	/*---------------------------------------- JS --------------------------------------------------------------------------*/
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1', true );

	if ( get_theme_mod( 'virgo_performans_scroll', false ) == true ) {
		wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), '1', true );
	}
	wp_enqueue_script( 'jquery-validate-min', get_template_directory_uri() . '/js/jquery.validate.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js"', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'jquery-viewport', get_template_directory_uri() . '/js/jquery.viewport.js"', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'jQuerySimpleCounter', get_template_directory_uri() . '/js/jQuerySimpleCounter.js"', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'owl-carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'isotope-pkgd-min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'imagesloaded-pkgd', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'animsition-min', get_template_directory_uri() . '/js/animsition.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/js/jarallax.js', array( 'jquery' ), '1', true );

	wp_enqueue_script( 'virgo-interface', get_template_directory_uri() . '/js/interface.js', array( 'jquery' ), '1', true );

	if ( get_theme_mod( 'virgo_map_google_key' ) != '' ) {
		wp_enqueue_script( 'maps-google', 'http://maps.google.com/maps/api/js?key=' . get_theme_mod( 'virgo_map_google_key' ), array( 'jquery' ), '1', true );

	} else {
		wp_enqueue_script( 'maps-google', 'http://maps.google.com/maps/api/js?key=AIzaSyAQ0FBrS86laigd1gOb6NniK5MkwRZAZ5k', array( 'jquery' ), '1', true );

	}


	wp_enqueue_script( 'virgo-gmap', get_template_directory_uri() . '/js/gmap.js', array( 'jquery' ), '1', true );


	wp_enqueue_script( 'comment-reply' );
	wp_localize_script( 'virgo-interface', 'virgo_obj', array(
		'ajaxurl' => esc_url( admin_url( 'admin-ajax.php' ) ),
		'theme_url' => esc_url( get_template_directory_uri() ),


	) );


}


/**
 * init admin scripts and style
 */
function virgo_style_scripts_admin() {
	//Geocoding google

	wp_enqueue_style( 'virgo_admins', get_template_directory_uri() . '/css/admins.css' );
	wp_enqueue_style( 'virgo_ionicons', get_template_directory_uri() . '/css/ionicons.min.css' );
	wp_enqueue_script( 'virgo_admins', get_template_directory_uri() . '/js/admin/admin.js', array( 'jquery' ), '1', true );
	wp_localize_script( 'virgo_admins', 'virgo_admin_obj',
		array(
			'version' => sanitize_text_field( esc_html( get_bloginfo( "version" ) ) )
		)
	);
	$T = get_the_tags();
}

add_action( 'admin_enqueue_scripts', 'virgo_style_scripts_admin' );





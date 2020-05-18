<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div
	<?php
	if ( get_theme_mod( 'virgo_performans_preloader', true ) != false ) {
		?> class="animsition" <?php } ?>>


    <!-- Header -->

    <header class="<?php
	$class = 'navbar';
	if ( is_page() || is_single() ) {
		$virgo_type_header = sanitize_text_field( get_post_meta( get_the_ID(), '_virgo_type_header', true ) );
		if ( $virgo_type_header == 2 ) {
			$class = 'navbar affix navbar-fixed';
		}
	}
	echo esc_attr( $class );
	?>">


        <a href="<?php
		echo esc_url( home_url( '/' ) ); ?>" class="brand js-target-scroll">
			<?php
			$logo = get_theme_mod( 'virgo_logo_small' );
			$logo_text = get_theme_mod( 'logo_text' );
			$logo_stiky = get_theme_mod('logostiky');
			if ( isset( $logo{2} ) || isset( $logo_text{0} ) ) {
				if ( isset( $logo{2} ) ) {
				    $class ='';
				    if(isset($logo_stiky))
					    $class = 'enable_sticky_logo'
					?>

                    <img alt="" class="img-responsive center-block <?php  echo esc_attr($class); ?> logoheader "
                               src="<?php echo esc_url( $logo ); ?>">

                    <img alt="" class="img-responsive center-block <?php  echo esc_attr($class); ?> logostiky"
                         src="<?php echo esc_url( $logo_stiky ); ?>">
					<?php
				}
				if ( isset( $logo_text{0} ) ) {
					echo wp_kses_post( $logo_text );
				}
			} else {
				echo esc_html( get_option( 'blogname' ) );
			}
			?>
        </a>

        <!-- Navbar Collapse -->

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
            <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'virgo' ); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


        <ul class="social-list">
			<?php
			if ( strlen( get_theme_mod( 'social_networks_control_social_shortcode' ) ) > 8 ):
				echo "<li>" . do_shortcode( get_theme_mod( 'social_networks_control_social_shortcode' ) ) . "</li>";
			endif; ?>
			<?php if ( strlen( get_theme_mod( 'social_networks_control_facebook' ) ) > 8 ): ?>
                <li><a href="<?php echo esc_url( get_theme_mod( 'social_networks_control_facebook' ) ); ?>"
                       class="fa fa-facebook">

                    </a></li>
			<?php endif; ?>
			<?php if ( strlen( get_theme_mod( 'social_networks_control_twitter' ) ) > 8 ): ?>
                <li><a class="fa fa-twitter"
                       href="<?php echo esc_url( get_theme_mod( 'social_networks_control_twitter' ) ); ?>">

                    </a></li>
			<?php endif; ?>
			<?php if ( strlen( get_theme_mod( 'social_networks_control_behance' ) ) > 8 ): ?>
                <li><a class="fa fa-linkedin"
                       href="<?php echo esc_url( get_theme_mod( 'social_networks_control_behance' ) ); ?>">

                    </a></li>
			<?php endif; ?>
			<?php if ( strlen( get_theme_mod( 'social_networks_control_instagram' ) ) > 8 ): ?>
                <li><a class="fa fa-instagram"
                       href="<?php echo esc_url( get_theme_mod( 'social_networks_control_instagram' ) ); ?>">

                    </a></li>
			<?php endif; ?>
        </ul>


        <!-- Navigation Desctop -->

        <nav class="nav-desctop hidden-xs hidden-sm">

			<?php $virgo_defaults = array(
				'theme_location' => 'virgo_topmenu',
				'menu' => '',
				'container' => false,
				'container_class' => '',
				'container_id' => '',
				'menu_class' => '',
				'menu_id' => '',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'items_wrap' => '<ul id="%1$s" class="nav-desctop-list %2$s">%3$s</ul>',
				'depth' => 0
			);


			if ( has_nav_menu( 'virgo_topmenu' ) ) {
				wp_nav_menu( $virgo_defaults );


			}
			?>
        </nav>


        <!-- Navigation Mobile -->

        <nav class="nav-mobile hidden-md hidden-lg">
            <div class="collapse navbar-collapse" id="nav-collapse">

                <!-- Navbar Collapse -->
				<?php $virgo_defaults = array(
					'theme_location' => 'virgo_topmenu',
					'menu' => '',
					'container' => '',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => '',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '<ul id="%1$s" class="nav-mobile-list %2$s">%3$s</ul>',
					'depth' => 0,
					'walker' => new virgo_top_menu_walker()
				);


				if ( has_nav_menu( 'virgo_topmenu' ) ) {
					wp_nav_menu( $virgo_defaults );


				} else {

					if ( get_option( 'virgo_one_page_menu' ) == true || get_option( 'virgo_one_page_menu_right' ) ) {
						?>

                        <ul class="nav-mobile-list">
							<?php echo wp_kses_post( get_option( 'virgo_one_page_menu' ) . get_option( 'virgo_one_page_menu_right' ) ); ?>
                        </ul>

						<?php
					} else {
						$virgo_args = array(
							'depth' => 0
						,
							'show_date' => ''
						,
							'date_format' => sanitize_text_field( get_option( 'date_format' ) )
						,
							'child_of' => 0
						,
							'exclude' => ''
						,
							'exclude_tree' => ''
						,
							'title_li' => ''
						,
							'echo' => 1
						,
							'authors' => ''
						,
							'sort_column' => 'menu_order, post_title'
						,
							'sort_order' => 'ASC'
						,
							'link_before' => ''
						,
							'link_after' => ''
						,
							'meta_key' => ''
						,
							'meta_value' => ''
						,
							'number' => 5
						,
							'offset' => ''
						,
							'walker' => ''
						);

						?>
                        <ul class="nav-mobile-list">
							<?php
							wp_list_pages( $virgo_args );
							?>
                        </ul>

						<?php
					}
				}
				?>
            </div>
        </nav>
    </header>


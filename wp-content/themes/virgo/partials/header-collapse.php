<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="animsition">
<!-- Loader -->

<!-- Header -->

<header class="navbar navbar-responsive">
	<div class="container">
		<?php
		$logo_text = ( get_theme_mod( 'logo_text' ) );
		?>
        <a href="<?php $url = get_home_url( '/' );
		echo esc_url( $url ); ?>" class="brand js-target-scroll">
			<?php 
				$logo = get_theme_mod( 'virgo_logo_small' );
				$logo_text = get_theme_mod( 'logo_text' );
				if (isset( $logo{2} ) || isset( $logo_text{0})){
					if (isset( $logo{2})) {
						?>    <img alt="" class="img-responsive center-block"
                           src="<?php echo esc_url( $logo ); ?>">
						<?php
					}
					if ( isset( $logo_text{0} ) ) {
						echo wp_kses_post( $logo_text ); 
					}
				}else {
					echo esc_html(get_option( 'blogname' ));
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
		<!-- Navigation Mobile -->

	<nav class="nav-mobile">
        <div class="collapse" id="nav-collapse">

		<!-- Navbar Collapse -->
			<?php $virgo_defaults = array(
				'theme_location' => 'virgo_collapsemenu',
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


			if ( has_nav_menu( 'virgo_collapsemenu' ) ) {
				wp_nav_menu( $virgo_defaults );


			} else {

				if ( get_option( 'virgo_one_page_menu' ) == true || get_option( 'virgo_one_page_menu_right' ) ) {
					?>

					<ul class="nav-mobile-list">
						<?php echo wp_kses_post( get_option( 'virgo_one_page_menu' ) . get_option( 'virgo_one_page_menu_right' ) ); ?>
					</ul>

					<?php
				}
			}
			?>
		</div>
	</nav>
	</div>
</header>

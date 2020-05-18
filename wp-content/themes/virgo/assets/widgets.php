<?php

add_action( 'widgets_init', 'virgo_widgets_int' );


/*popular_places*/
function virgo_widgets_int() {

	//sidibar widget


	register_widget( 'virgo_Recent_posts' );
	register_widget( 'virgo_Recent_comments' );
	register_widget( 'virgo_TAG_Wigdet_class' );
	register_widget( 'virgo_footer_info' );
	register_widget( 'virgo_NEWS_LETTER_class' );
	register_widget( 'virgo_NEWS_LETTER_DARK_class' );
	register_widget( 'virgo_NEWS_LETTER_BROWN_class' );
	register_widget( 'virgo_NEWS_LETTER_GRAY_class' );
	register_widget( 'virgo_menu_Wigdet_class' );
	register_widget( 'virgo_author_class' );
	register_widget( 'virgo_footer_contact' );



	//footer widget


}

/*
 * virgo_author_Wigdet_class
 */

class virgo_author_class extends WP_Widget {

	function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo author', 'virgo' ),
			'description' => esc_html__( 'It displays information about the author', 'virgo' ),
			'classname'   => 'virgo_author_'
		);
		parent::__construct( 'virgo_author_', esc_html__( 'Virgo author', 'virgo' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'ABOUT ME', 'virgo' ), // Legacy.
				'photo' => '',
				'name'  => esc_html__( 'TOM ROBBINS', 'virgo' ),
				'prof'  => esc_html__( 'WEB DESIGNER', 'virgo' ),
				'url'   => '',
			)
		);

		extract( $instance );

		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'photo' ) ); ?>"> <?php esc_html_e( 'Author photo:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'photo' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'photo' ) ); ?>" type="text"
			       value="<?php if ( isset( $photo ) ) {
				       echo esc_attr( $photo );
			       } ?>">
		</p>

		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>"> <?php esc_html_e( 'Author photo(insert image url)', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>" type="text"
			       value="<?php if ( isset( $url ) ) {
				       echo esc_attr( $url );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"> <?php esc_html_e( 'Author name:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'name' ) ); ?>" type="text"
			       value="<?php if ( isset( $name ) ) {
				       echo esc_attr( $name );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'prof' ) ); ?>"> <?php esc_html_e( 'Author profession:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'prof' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'prof' ) ); ?>" type="text"
			       value="<?php if ( isset( $prof ) ) {
				       echo esc_attr( $prof );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		//default values
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'ABOUT ME', 'virgo' ), // Legacy.
				'photo' => '',
				'name'  => esc_html__( 'TOM ROBBINS', 'virgo' ),
				'prof'  => esc_html__( 'WEB DESIGNER', 'virgo' ),
				'url'   => '',
			)
		);

		extract( $args );
		extract( $instance );

		// Create a filter to the other plug-ins can change them
		$title = sanitize_text_field( apply_filters( 'widget_title', $title ) );

		echo wp_kses_post( $before_widget . "" );
		echo wp_kses_post( $before_title ) . esc_attr( $title ) . wp_kses_post( $after_title );


		?>


		<?php
		if ( isset( $photo{5} ) ) {

			?>
			<img alt="" src="<?php echo esc_url( $photo ) ?>">
			<?php

		} else {
			$img = get_template_directory_uri() . "/img/blog/widget-text-img.jpg"; ?>
			<img alt="" src="<?php echo esc_url( $img ) ?>">
			<?php

		} ?>

		<h4 class="widget-about-title"> <?php echo esc_html( $name ) ?></h4>
		<a href="<?php echo esc_html( $url ) ?>" class="subtitle"><?php echo esc_html( $prof ) ?></a>


		<?php
		echo wp_kses_post( $after_widget );
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}


}


class virgo_menu_Wigdet_class extends WP_Widget {

	/**
	 * Sets up a new Custom Menu widget instance.
	 *
	 * @since 3.0.0
	 * @access public
	 */
	public function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo  Menu', 'virgo' ),
			'description' => esc_html__( 'It displays Menu', 'virgo' ),
			'classname'   => 'virgo_Menu'
		);
		parent::__construct( 'nav_menu', esc_html__( 'Virgo  Menu', 'virgo' ), $args );


	}

	/**
	 * Outputs the content for the current Custom Menu widget instance.
	 *
	 * @since 3.0.0
	 * @access public
	 *
	 * @param array $args Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Custom Menu widget instance.
	 */
	public function widget( $args, $instance ) {
		// Get menu
		$nav_menu = ! empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;

		if ( ! $nav_menu ) {
			return;
		}

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );


		?>
		<div class="col-base col-sm-6 col-md-2">
			<?php
			if ( ! empty( $instance['title'] ) ) {
				echo wp_kses_post( $args['before_title'] . $instance['title'] . $args['after_title'] );
			}

			$nav_menu_args = array(
				'fallback_cb' => '',
				'menu'        => $nav_menu,
				'menu_class' => 'nav-bottom'
			);

			wp_nav_menu( apply_filters( 'widget_nav_menu_args', $nav_menu_args, $nav_menu, $args, $instance ) );

			?>
		</div>
		<?php

	}

	/**
	 * Handles updating settings for the current Custom Menu widget instance.
	 *
	 * @since 3.0.0
	 * @access public
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 *
	 * @return array Updated settings to save.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( ! empty( $new_instance['title'] ) ) {
			$instance['title'] = sanitize_text_field( stripslashes( $new_instance['title'] ) );
		}
		if ( ! empty( $new_instance['nav_menu'] ) ) {
			$instance['nav_menu'] = (int) $new_instance['nav_menu'];
		}

		return $instance;
	}

	/**
	 * Outputs the settings form for the Custom Menu widget.
	 *
	 * @since 3.0.0
	 * @access public
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		$title    = isset( $instance['title'] ) ? $instance['title'] : '';
		$nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';

		// Get menus
		$menus = wp_get_nav_menus();

		// If no menus exists, direct the user to go and create some.
		?>
		<p class="nav-menu-widget-no-menus-message" <?php if ( ! empty( $menus ) ) {

		} ?>>
			<?php
			if ( isset( $GLOBALS['wp_customize'] ) && $GLOBALS['wp_customize'] instanceof WP_Customize_Manager ) {
				$url = 'javascript: wp.customize.panel( "nav_menus" ).focus();';
			} else {
				$url = admin_url( 'nav-menus.php' );
			}
			?>
			<?php echo sprintf( esc_html__( 'No menus have been created yet.', "virgo" ) . '<a href="%s">' . esc_html__( "Create some", "virgo" ) . '</a>.', esc_url( $url ) ); ?>
		</p>
		<div class="nav-menu-widget-form-controls" <?php if ( empty( $menus ) ) {

		} ?>>
			<p>
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'virgo' ) ?></label>
				<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
				       value="<?php echo esc_attr( $title ); ?>"/>
			</p>

			<p>
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'nav_menu' ) ); ?>"><?php esc_html_e( 'Select Menu:', 'virgo' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'nav_menu' ) ); ?>"
				        name="<?php echo esc_attr( $this->get_field_name( 'nav_menu' ) ); ?>">
					<option value="0"><?php esc_html_e( '&mdash; Select &mdash;', 'virgo' ); ?></option>
					<?php foreach ( $menus as $menu ) : ?>
						<option
							value="<?php echo esc_attr( $menu->term_id ); ?>" <?php selected( $nav_menu, $menu->term_id ); ?>>
							<?php echo esc_html( $menu->name ); ?>
						</option>
					<?php endforeach; ?>
				</select>
			</p>
		</div>
		<?php
	}
}


class virgo_NEWS_LETTER_class extends WP_Widget {

	function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo NEWS LETTER', 'virgo' ),
			'description' => esc_html__( 'It displays NEWS LETTER', 'virgo' ),
			'classname'   => 'virgo_news_letter'
		);
		parent::__construct( 'virgo_NEWS_LETTER_', esc_html__( 'Virgo NEWS_LETTER', 'virgo' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title'       => esc_html__( 'Subscribe to our newsletter', 'virgo' ), // Legacy.
				'text'        => '', 
				'placeholder' => 'Email',
			)
		);

		extract( $instance );

		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'placeholder' ) ); ?>"> <?php esc_html_e( 'Text placeholder:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'placeholder' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'placeholder' ) ); ?>" type="text"
			       value="<?php if ( isset( $placeholder ) ) {
				       echo esc_attr( $placeholder );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		//default values
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title'       => esc_html__( 'Subscribe to our newsletter', 'virgo' ), // Legacy.
				'placeholder' => 'Email',
			)
		);

		extract( $args );
		extract( $instance );

		// Create a filter to the other plug-ins can change them
		$title = sanitize_text_field( apply_filters( 'widget_title', $title ) );



		?>

			<div class="col-subscribe col-base col-sm-6 col-md-3">
              <div class="subscribe-title	">
				<?php echo esc_attr( $title ); ?>
     		  </div>
              <form id="mc-form" class="subscribe-form js-subscribe-form">
                <div class="input-group">
                  <input id="mc-email" type="email" class="input-round form-control"  name="EMAIL" placeholder="<?php echo esc_attr( $placeholder ); ?>">
                  <span class="input-group-btn">
                    <button class="btn" type="submit"><span class="arrow-right"></span></button>
                  </span>
                </div>
                <label class="mc-label" for="mc-email" id="mc-notification"></label>
              </form>
            </div>
		<?php

	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}


}





class virgo_NEWS_LETTER_DARK_class extends WP_Widget {

	function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo NEWS LETTER DARK', 'virgo' ),
			'description' => esc_html__( 'It displays NEWS LETTER', 'virgo' ),
			'classname'   => 'virgo_news_letter_dark'
		);
		parent::__construct( 'virgo_NEWS_LETTER_DARK', esc_html__( 'Virgo NEWS_LETTER_DARK)', 'virgo' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title'       => esc_html__( 'Subscribe to our newsletter', 'virgo' ), // Legacy.
				'text'        => '', 
				'placeholder' => 'Email',
			)
		);

		extract( $instance );

		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'placeholder' ) ); ?>"> <?php esc_html_e( 'Text placeholder:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'placeholder' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'placeholder' ) ); ?>" type="text"
			       value="<?php if ( isset( $placeholder ) ) {
				       echo esc_attr( $placeholder );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		//default values
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title'       => esc_html__( 'Subscribe to our newsletter', 'virgo' ), // Legacy.
				'placeholder' => 'Email',
			)
		);

		extract( $args );
		extract( $instance );

		// Create a filter to the other plug-ins can change them
		$title = sanitize_text_field( apply_filters( 'widget_title', $title ) );

		

		?>

			<div class="col-subscribe col-base col-md-6 col-lg-3">
              <div class="subscribe-title">
				<?php echo esc_attr( $title ); ?>
     		  </div>
              <form id="mc-form" class="subscribe-form js-subscribe-form">
                <div class="input-group">
                  <input id="mc-email" type="email"  class="input-round form-control" name="EMAIL" placeholder="<?php echo esc_attr( $placeholder ); ?>">
                  <span class="input-group-btn">
                    <button class="btn btn-dark" type="submit"><span class="arrow-right"></span></button>
                  </span>
                </div>
                <label class="mc-label" for="mc-email" id="mc-notification"></label>
              </form>
            </div>
		<?php
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}


}



class virgo_NEWS_LETTER_BROWN_class extends WP_Widget {

	function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo NEWS LETTER BROWN', 'virgo' ),
			'description' => esc_html__( 'It displays NEWS LETTER', 'virgo' ),
			'classname'   => 'virgo_news_letter_brown'
		);
		parent::__construct( 'virgo_NEWS_LETTER_BROWN', esc_html__( 'Virgo NEWS_LETTER_BROWN)', 'virgo' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title'       => esc_html__( 'Subscribe to our newsletter', 'virgo' ), // Legacy.
				'text'        => '', 
				'placeholder' => 'Email',
			)
		);

		extract( $instance );

		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'placeholder' ) ); ?>"> <?php esc_html_e( 'Text placeholder:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'placeholder' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'placeholder' ) ); ?>" type="text"
			       value="<?php if ( isset( $placeholder ) ) {
				       echo esc_attr( $placeholder );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		//default values
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title'       => esc_html__( 'Subscribe to our newsletter', 'virgo' ), // Legacy.
				'placeholder' => 'Email',
			)
		);

		extract( $args );
		extract( $instance );

		// Create a filter to the other plug-ins can change them
		$title = sanitize_text_field( apply_filters( 'widget_title', $title ) );

		

		?>

			<div class="col-subscribe col-base col-md-6 col-lg-3">
              <div class="subscribe-title">
				<?php echo esc_attr( $title ); ?>
     		  </div>
              <form id="mc-form" class="subscribe-form js-subscribe-form">
                <div class="input-group">
                  <input id="mc-email" type="email"  class="input-round form-control" name="EMAIL" placeholder="<?php echo esc_attr( $placeholder ); ?>">
                  <span class="input-group-btn">
                    <button class="btn btn-brown" type="submit"><span class="arrow-right"></span></button>
                  </span>
                </div>
                <label class="mc-label" for="mc-email" id="mc-notification"></label>
              </form>
            </div>
		<?php
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}


}




class virgo_NEWS_LETTER_GRAY_class extends WP_Widget {

	function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo NEWS LETTER GRAY', 'virgo' ),
			'description' => esc_html__( 'It displays NEWS LETTER', 'virgo' ),
			'classname'   => 'virgo_news_letter_gray'
		);
		parent::__construct( 'virgo_NEWS_LETTER_GRAY', esc_html__( 'Virgo NEWS_LETTER_GRAY)', 'virgo' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title'       => esc_html__( 'Subscribe to our newsletter', 'virgo' ), // Legacy.
				'text'        => '', 
				'placeholder' => 'Email',
			)
		);

		extract( $instance );

		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'placeholder' ) ); ?>"> <?php esc_html_e( 'Text placeholder:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'placeholder' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'placeholder' ) ); ?>" type="text"
			       value="<?php if ( isset( $placeholder ) ) {
				       echo esc_attr( $placeholder );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		//default values
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title'       => esc_html__( 'Subscribe to our newsletter', 'virgo' ), // Legacy.
				'placeholder' => 'Email',
			)
		);

		extract( $args );
		extract( $instance );

		// Create a filter to the other plug-ins can change them
		$title = sanitize_text_field( apply_filters( 'widget_title', $title ) );

		

		?>

			<div class="col-subscribe col-base col-md-6 col-lg-3">
              <div class="subscribe-title">
				<?php echo esc_attr( $title ); ?>
     		  </div>
              <form id="mc-form" class="subscribe-form js-subscribe-form">
                <div class="input-group">
                  <input id="mc-email" type="email"  class="input-round form-control" name="EMAIL" placeholder="<?php echo esc_attr( $placeholder ); ?>">
                  <span class="input-group-btn">
                    <button class="btn btn-gray" type="submit"><span class="arrow-right"></span></button>
                  </span>
                </div>
                <label class="mc-label" for="mc-email" id="mc-notification"></label>
              </form>
            </div>
		<?php
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}


}





class virgo_footer_info extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo footer info', 'virgo' ),
			'description' => esc_html__( 'It displays footer information', 'virgo' ),
			'classname'   => 'virgo_footer_info'
		);
		parent::__construct( 'virgo_footer_info', esc_html__( 'virgo footer_info', 'virgo' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(

				'text'  => esc_html__( 'We create web products for the help and growth of your business.', 'virgo' ),
				'title' => esc_attr( 'Virgo.', 'virgo' ),


			)
		);
		extract( $instance );


		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( ' Insert title',
					'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'text' ) ) ); ?>"> <?php esc_html_e( ' Insert text:',
					'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'text' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'text' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $text ) ) {
				       echo esc_attr( $text );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {

		extract( $args );
		$instance         = wp_parse_args(
			(array) $instance,
			array(
				'text'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at purus varius odio tempus cursus. Donec quis nibh luctus, posuere velit vitae, commodo dui. Nullam eu blandit orci. Pellentesque sit amet enim sapien. Fusce nec mauris pellentesque, lacinia quam eu, molestie elit.', 'virgo' ),
				'title' => esc_attr( '', 'virgo' ),


			)
		);

		$arr               = explode( ' ', $instance['title'] );
		$arr_h             = implode( " ", array_splice( $arr, 0, 2 ) );
		$instance['title'] = str_replace( $arr_h, '' . $arr_h . '', $instance['title'] );


		// Create a filter to the other plug-ins can change them

		$before_widget = str_replace( 'class="', 'class=" widget  column col-sm-6 col-md-4" ', $before_widget );



		?>
		<div class="brand-info col-base col-sm-6 col-md-4">
			<a href="<?php echo esc_url( get_home_url( '/' ) . '/#home' ) ?> " class="brand js-target-scroll">
				<?php echo wp_kses_post( $instance['title'] ); ?>
			</a>
			<p><?php echo wp_kses_post( $instance['text'] ); ?></p>
		</div>


		<?php


	}
}




class virgo_footer_contact extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo footer contact', 'virgo' ),
			'description' => esc_html__( 'It displays footer contacts', 'virgo' ),
			'classname'   => 'virgo_footer_contact'
		);
		parent::__construct( 'virgo_footer_contact', esc_html__( 'virgo footer_contact', 'virgo' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(

				'phone'  => esc_html__( '+8 800 555 35 35 ', 'virgo' ),
				'email' => esc_attr( 'info@virgo.com', 'virgo' ),


			)
		);
		extract( $instance );


		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'phone' ) ) ); ?>"> <?php esc_html_e( ' Insert phone',
					'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'phone' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'phone' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $phone ) ) {
				       echo esc_attr( $phone );
			       } ?>">
		</p>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'email' ) ) ); ?>"> <?php esc_html_e( ' Insert email:',
					'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'email' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'email' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $email ) ) {
				       echo esc_attr( $email );
			       } ?>">
		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {

		extract( $args );
		$instance         = wp_parse_args(
			(array) $instance,
			array(
				'email'  => esc_html__( '', 'virgo' ),
				'phone' => esc_attr( '', 'virgo' ),


			)
		);

		$arr               = explode( ' ', $instance['phone'] );
		$arr_h             = implode( " ", array_splice( $arr, 0, 2 ) );
		$instance['phone'] = str_replace( $arr_h, '' . $arr_h . '', $instance['phone'] );


		// Create a filter to the other plug-ins can change them



		?>
		<div class="col-contacts col-base col-sm-6 col-md-3">
              <a href="#" class="phone">
               	<?php echo wp_kses_post( $instance['phone'] ); ?>
              </a><br>
              <a href="mailto:<?php echo wp_kses_post( $instance['email'] ); ?>" class="email">
                <?php echo wp_kses_post( $instance['email'] ); ?>
                </a>
            </div>

		<?php



	}
}





class virgo_Recent_posts extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo  Recent posts', 'virgo' ),
			'description' => esc_html__( 'It displays a list of tweets', 'virgo' ),
			'classname'   => 'virgo_Recent_posts'
		);
		parent::__construct( 'virgo_Recent_posts', esc_html__( 'Virgo Tweets2', 'virgo' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'Recent posts', 'virgo' ), // Legacy.
				'text'  => 3


			)
		);
		extract( $instance );


		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:',
					'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"> <?php esc_html_e( 'How many show post?',
					'virgo' ); ?></label>

			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text"
			       value="<?php
			       if ( isset( $text ) ) {
				       echo esc_attr( $text );
			       }
			       ?>">

		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );


		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'Recent posts', 'virgo' ), // Legacy.
				'Name'  => '',
				'text'  => 3


			)
		);
		extract( $instance );
		// Create a filter to the other plug-ins can change them
		$title         = sanitize_text_field( apply_filters( 'widget_title', $title ) );
		$before_widget = str_replace( 'class="', 'class=" widget shadow widget-twitter ', $before_widget );
		echo wp_kses_post( $before_widget . "" );

		echo wp_kses_post( $before_title ) . esc_attr( $title ) . wp_kses_post( $after_title );

		$args = array(
			'post_type'           => 'post',
			'orderby'             => 'date',
			'post_status'         => 'publish',
			'posts_per_page'      => $text,
			'ignore_sticky_posts' => true,
			'meta_query'          => array( array( 'key' => '_thumbnail_id' ) )

		);

		global $Virgo_class;

		?>


		<?php
		$rent_blog_query = new WP_Query( $args );
		if ( $rent_blog_query->have_posts() ):
			while ( $rent_blog_query->have_posts() ) {
				$rent_blog_query->the_post();
				?>
				<article class="post-item">
					<div class="post-thumb">
						<a href="<?php echo esc_url( get_the_permalink() ); ?>">
							<img alt="<?php the_title(); ?>"
							     src="<?php $Virgo_class->get_post_thumbnail( get_the_ID(), 100, 90 ); ?>"
							     width="100" height="90">
						</a>
					</div>
					<div class="post-body">
						<h4>
							<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
						</h4>

						<div class="post-time"><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?> </div>
						<a href="" class="subtitle">
							<?php $category = get_the_category();
							if ( isset( $category[0]->cat_name ) ) {
								echo esc_html( $category[0]->cat_name );
							} ?></a>
					</div>
				</article>
				<?php

			}
			wp_reset_postdata();
		endif; ?>


		<?php

		echo wp_kses_post( $after_widget );
	}

	function update( $new_instance, $old_instance ) {
		$new_instance['title'] = ! empty( $new_instance['title'] ) ? esc_attr( $new_instance['title'] ) :
			esc_html__( 'Recent posts', 'virgo' );
		$new_instance['text']  = ( (int) $new_instance['text'] ) ? $new_instance['text'] : 3;

		return $new_instance;
	}


}

class virgo_Recent_comments extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo Recent comments', 'virgo' ),
			'description' => esc_html__( 'It displays a list of tweets', 'virgo' ),
			'classname'   => 'virgo_Recent_comments_noppp'
		);
		parent::__construct( 'virgo_Recent_comments', esc_html__( 'Virgo Tweets2', 'virgo' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'Recent comments', 'virgo' ), // Legacy.
				'text'  => 4


			)
		);
		extract( $instance );


		?>
		<p>
			<label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:',
					'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>" type="text"
			       value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
		</p>


		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"> <?php esc_html_e( 'How many show post?',
					'virgo' ); ?></label>

			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text"
			       value="<?php
			       if ( isset( $text ) ) {
				       echo esc_attr( $text );
			       }
			       ?>">

		</p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );


		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'Recent comments', 'virgo' ), // Legacy.
				'Name'  => '',
				'text'  => 4


			)
		);
		extract( $instance );
		// Create a filter to the other plug-ins can change them
		$title = sanitize_text_field( apply_filters( 'widget_title', $title ) );
		echo wp_kses_post( $before_widget . "" );

		echo wp_kses_post( $before_title ) . esc_attr( $title ) . wp_kses_post( $after_title );


		$comments = get_comments( apply_filters( 'widget_comments_args', array(
			'number'      => $text,
			'status'      => 'approve',
			'post_status' => 'publish'
		) ) );
		if ( is_array( $comments ) && $comments ) {


			?>

			<ul class="widget-comment-list widget-list">
				<?php

				foreach ( (array) $comments as $comment ) {


					?>

					<li>
						<span class="media-left"><i class="icon icon-chat"></i></span>
                        <span class="media-body"><?php echo esc_html( $comment->comment_author ); ?> <a
		                        href="<?php echo esc_url( get_permalink( $comment->comment_post_ID ) ); ?>"><?php echo esc_html( get_the_title( $comment->comment_post_ID ) ); ?></a></span>
					</li>
					<?php

				}

				?>
			</ul>

			<?php
		}


		echo wp_kses_post( $after_widget );
	}

	function update( $new_instance, $old_instance ) {
		$new_instance['title'] = ! empty( $new_instance['title'] ) ? esc_attr( $new_instance['title'] ) :
			esc_html__( 'Recent comments', 'virgo' );
		$new_instance['text']  = ( (int) $new_instance['text'] ) ? $new_instance['text'] : 4;

		return $new_instance;
	}


}


class virgo_TAG_Wigdet_class extends WP_Widget {
	function __construct() {
		$args = array(
			'name'        => esc_html__( 'Virgo TAG', 'virgo' ),
			'description' => esc_html__( 'It displays a list of TAG', 'virgo' ),
			'classname'   => 'widget-tag-cloud'
		);
		parent::__construct( 'widget-tag-cloud', esc_html__( 'Virgo TAG', 'virgo' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance,
			array(
				'title'    => '',
				'type_tag' => '0',
				'number'   => 20
			) );
		extract( $instance );
		$title = sanitize_text_field( $instance['title'] );
		?>
		<p><label
				for="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"><?php esc_html_e( 'Title:', 'virgo' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( esc_attr( $this->get_field_id( 'title' ) ) ); ?>"
			       name="<?php echo esc_attr( esc_attr( $this->get_field_name( 'title' ) ) ); ?>"
			       type="text" value="<?php echo esc_attr( esc_attr( $title ) ); ?>"/></p>
		<p>

		<?php

	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	public function widget( $args, $instance ) {

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		extract( $args );
		extract( $instance );
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? esc_html__( 'Tags', 'virgo' ) : $instance['title'], $instance, $this->id_base );
		echo wp_kses_post( $before_widget );

		echo wp_kses_post( $before_title ) . esc_attr( $title ) . wp_kses_post( $after_title );
		?>
		<div class="blog-tags">
			<?php
			$posttags = get_tags();
			if ( $posttags ) {
				foreach ( $posttags as $tag ) {
					?>

					<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
					><?php echo esc_html( $tag->name ); ?></a>

					<?php
				}
			}

			?>
		</div>
		<?php

		echo wp_kses_post( $after_widget );
	}

	public function update( $new_instance, $old_instance ) {
		$instance             = $old_instance;
		$new_instance         = wp_parse_args( (array) $new_instance, array(
			'title'    => '',
			'count'    => 0,
			'dropdown' => ''
		) );
		$instance['title']    = sanitize_text_field( $new_instance['title'] );
		$instance['number']   = $new_instance['number'] ? (int) sanitize_title( $new_instance['number'] ) : 20;
		$instance['type_tag'] = $new_instance['type_tag'] ? (int) sanitize_title( $new_instance['type_tag'] ) : '0';

		return $instance;
	}


}







<?php
/*
Plugin Name: Virgo
Plugin URI:
Description:  extends the capabilities of theme virgo
Version: 1.0.1
Author: VK
Author URI:
License:
*/


add_action( 'vc_before_init', 'virgo_name_integrateWithVC' );

function virgo_name_integrateWithVC() {
	require plugin_dir_path( __FILE__ ) . '/shortcodes/shortcodes.php';
	require plugin_dir_path( __FILE__ ) . '/VC_custum-data.php';
}


require plugin_dir_path( __FILE__ ) . '/import_demo.php';
require plugin_dir_path( __FILE__ ) . '/css_generator.php';
require plugin_dir_path( __FILE__ ) . '/function.php';
require plugin_dir_path( __FILE__ ) . '/sendmail.php';
require plugin_dir_path( __FILE__ ) . '/custom-style.php';
require plugin_dir_path( __FILE__ ) . '/mailchamp.php';


/**
 *Create the desired tables for theme
 */


add_action( 'init', 'virgo_projects_init' );
/**
 * great projects custom type post
 */
function virgo_projects_init() {
	$args = array(
		'label' => esc_html__( 'Projects', 'virgo' ),
		'labels' => array(
			'edit_item' => esc_html__( 'Edit', 'virgo' ),
			'add_new_item' => esc_html__( 'Add', 'virgo' ),
			'view_item' => esc_html__( 'View', 'virgo' ),
		),
		'singular_label' => esc_html__( 'Event', 'virgo' ),
		'has_archive' => true,
		'public' => true,
		'show_ui' => true,
		'_builtin' => false,
		'_edit_link' => 'post.php?post=%d',
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon' => 'dashicons-groups'
	);

	$args['label'] = esc_html__( 'Projects', 'virgo' );
	$args['singular_label'] = esc_html__( 'Item', 'virgo' );
	register_post_type( 'projects', $args );
	register_taxonomy(
		'projects_categories',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'projects',         //post type name
		array(
			'hierarchical' => true,
			'label' => esc_html__( 'Category', 'virgo' ),  //Display name
			'query_var' => true,
			'rewrite' => array( 'slug' => 'project' )

		)
	);

}


/**
 *Create the desired tables for theme
 */


add_action( 'init', 'virgo_portfolio_init' );
/**
 * great portfolio custom type post
 */
function virgo_portfolio_init() {
	$args = array(
		'label' => esc_html__( 'Events', 'virgo' ),
		'labels' => array(
			'edit_item' => esc_html__( 'Edit', 'virgo' ),
			'add_new_item' => esc_html__( 'Add', 'virgo' ),
			'view_item' => esc_html__( 'View', 'virgo' ),
		),
		'singular_label' => esc_html__( 'Event', 'virgo' ),
		'has_archive' => true,
		'public' => true,
		'show_ui' => true,
		'_builtin' => false,
		'_edit_link' => 'post.php?post=%d',
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon' => 'dashicons-groups'
	);

	$args['label'] = esc_html__( 'Portfolio', 'virgo' );
	$args['singular_label'] = esc_html__( 'Item', 'virgo' );
	register_post_type( 'portfolio', $args );
	register_taxonomy(
		'portfolio_categories',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'portfolio',         //post type name
		array(
			'hierarchical' => true,
			'label' => esc_html__( 'Category', 'virgo' ),  //Display name
			'query_var' => true,
			'rewrite' => array( 'slug' => 'portfolio' )

		)
	);

}

//add_action( 'wp_footer', 'virgo_modal_boddy' );
function virgo_modal_boddy() {
	?>
    <!-- Modals -->

    <div id="request" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal"
                          aria-label="<?php echo esc_html__( 'Close', 'virgo' ); ?>">&times;</span>
                    <h2 class="modal-title">
						<?php echo wp_kses_post( get_theme_mod( 'virgo_c_form_s_modal_title', esc_html__( 'Get start', 'virgo' ) ) );

						?>  </h2>
                    <p class="modal-info"><?php echo wp_kses_post( get_theme_mod( "virgo_c_form_s_modal_description", "virgo" ) ); ?></p>
                </div>
                <div class="modal-body">
					<?php
						$virgo_type_sidebar = sanitize_text_field( get_post_meta( get_the_ID(), '_virgo_type_sidebar', true ) );
					  if ( $virgo_type_sidebar == 2  ) {

		                if ( function_exists( 'virgo_contact_form_architecture_func' ) ) {

						echo str_replace( 'col-md-10 col-md-offset-1', '', do_shortcode( get_theme_mod( 'virgo_c_form_s_architecture_val', '[virgo_contact_form_architecture]' ) ) );

					} else {

						$atts = array(
							'items' => '',
							'name' => esc_html__( 'Name ', 'virgo' ),
							'Email' => esc_html__( 'Email *', 'virgo' ),
							'sm' => esc_html__( 'Get start', 'virgo' ),
							'message' => esc_html__( 'Message', 'virgo' ),
							'smh' => esc_html__( 'Get start', 'virgo' ),

						);
						extract( $atts );
						?>
                        <form class="form-request js-ajax-form">
                            <div class="form-group">
                                <input type="text" name="name" required
                                       placeholder="<?php echo esc_attr( $name ); ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" required
                                       placeholder="<?php echo esc_attr( $Email ); ?>">
                            </div>
                            <div class="form-group">
                            <textarea rows="3" name="message"
                                      placeholder="<?php echo esc_attr( $message ); ?>"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-block"
                                        data-text-hover="<?php echo esc_attr( $smh ); ?>">
                                    <span class="btn-text"><?php echo esc_html( $sm ); ?></span>
                                    <span class="line-top">
                            <span class="line-square-l-t line-square"></span>
                            <span class="line-square-r-t line-square"></span>
                          </span>
                                    <span class="line-bottom">
                            <span class="line-square-l-b line-square"></span>
                            <span class="line-square-r-b line-square"></span>
                          </span>
                                </button>
                            </div>
                        </form>
						<?php
					}
		               } elseif ( $virgo_type_sidebar == 3 ) {
		                if ( function_exists( 'virgo_contact_form_interior_func' ) ) {

						echo str_replace( 'col-md-10 col-md-offset-1', '', do_shortcode( get_theme_mod( 'virgo_c_form_s_interior_val', '[virgo_contact_form_interior]' ) ) );

					} else {

						$atts = array(
							'items' => '',
							'name' => esc_html__( 'Name ', 'virgo' ),
							'Email' => esc_html__( 'Email *', 'virgo' ),
							'sm' => esc_html__( 'Get start', 'virgo' ),
							'message' => esc_html__( 'Message', 'virgo' ),
							'smh' => esc_html__( 'Get start', 'virgo' ),

						);
						extract( $atts );
						?>
                        <form class="form-request js-ajax-form">
                            <div class="form-group">
                                <input type="text" name="name" required
                                       placeholder="<?php echo esc_attr( $name ); ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" required
                                       placeholder="<?php echo esc_attr( $Email ); ?>">
                            </div>
                            <div class="form-group">
                            <textarea rows="3" name="message"
                                      placeholder="<?php echo esc_attr( $message ); ?>"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-block"
                                        data-text-hover="<?php echo esc_attr( $smh ); ?>">
                                    <span class="btn-text"><?php echo esc_html( $sm ); ?></span>
                                    <span class="line-top">
                            <span class="line-square-l-t line-square"></span>
                            <span class="line-square-r-t line-square"></span>
                          </span>
                                    <span class="line-bottom">
                            <span class="line-square-l-b line-square"></span>
                            <span class="line-square-r-b line-square"></span>
                          </span>
                                </button>
                            </div>
                        </form>
						<?php
					}
		               } else {
		                if ( function_exists( 'virgo_contact_form_func' ) ) {

						echo str_replace( 'col-md-10 col-md-offset-1', '', do_shortcode( get_theme_mod( 'virgo_c_form_s_val', '[virgo_contact_form]' ) ) );

					} else {

						$atts = array(
							'items' => '',
							'name' => esc_html__( 'Name ', 'virgo' ),
							'Email' => esc_html__( 'Email *', 'virgo' ),
							'sm' => esc_html__( 'Get start', 'virgo' ),
							'message' => esc_html__( 'Message', 'virgo' ),
							'smh' => esc_html__( 'Get start', 'virgo' ),

						);
						extract( $atts );
						?>
                        <form class="form-request js-ajax-form">
                            <div class="form-group">
                                <input type="text" name="name" required
                                       placeholder="<?php echo esc_attr( $name ); ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" required
                                       placeholder="<?php echo esc_attr( $Email ); ?>">
                            </div>
                            <div class="form-group">
                            <textarea rows="3" name="message"
                                      placeholder="<?php echo esc_attr( $message ); ?>"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-block"
                                        data-text-hover="<?php echo esc_attr( $smh ); ?>">
                                    <span class="btn-text"><?php echo esc_html( $sm ); ?></span>
                                    <span class="line-top">
                            <span class="line-square-l-t line-square"></span>
                            <span class="line-square-r-t line-square"></span>
                          </span>
                                    <span class="line-bottom">
                            <span class="line-square-l-b line-square"></span>
                            <span class="line-square-r-b line-square"></span>
                          </span>
                                </button>
                            </div>
                        </form>
						<?php
					}
		               }
					?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals success -->
	<?php
}
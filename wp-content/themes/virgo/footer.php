<footer id="footer" class="<?php
$class = 'footer bg-dark';
if ( is_page() || is_single() ) {
	$virgo_type_footer = sanitize_text_field( get_post_meta( get_the_ID(), '_virgo_type_footer', true ) );
	if ( $virgo_type_footer == 2 ) {
		$class = 'footer footer-2 bg-light';
	}
}
echo esc_html($class);
?>
">
    <div class="container">
        <div class="row-base row">
			<?php
               $virgo_type_sidebar = sanitize_text_field( get_post_meta( get_the_ID(), '_virgo_type_sidebar', true ) );
               if ( $virgo_type_sidebar == 1 ) {
                dynamic_sidebar( 'virgo_footer_sidebar' );
               } elseif ( $virgo_type_sidebar == 2 ) {
                dynamic_sidebar( 'virgo_footer_sidebar_dark' );
               } elseif ( $virgo_type_sidebar == 3 ) {
                dynamic_sidebar( 'virgo_footer_sidebar_brown' );
               } elseif ( $virgo_type_sidebar == 4 ) {
                dynamic_sidebar( 'virgo_footer_sidebar_gray' );
               } else {
                dynamic_sidebar( 'virgo_footer_sidebar' );
               }
           ?>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyrights">
				<?php
				echo wp_kses_post(
					do_shortcode( ( get_theme_mod( 'footer_copyright', ' &copy; ' . esc_html__( 'Virgo ', 'virgo' ) . date( 'Y' ) . esc_html__( '. All rights reserved ', 'virgo' ) . ' ' ) ) ) ); ?>
            </div>
            <ul class="social-list">
				<?php
				if ( strlen( get_theme_mod( 'social_networks_control_social_shortcode' ) ) > 8 ):
					echo "<li>".do_shortcode( get_theme_mod( 'social_networks_control_social_shortcode' ) )."</li>";
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
        </div>
    </div>
</footer>


<!-- Modals -->

<div id="request" class="modal fade " role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="<?php echo esc_html__( 'Close', 'virgo' ); ?>">&times;</span>
                <h2 class="modal-title">
					<?php echo wp_kses_post( get_theme_mod( 'virgo_c_form_s_modal_title', esc_html__( 'Get start', 'virgo' ) ) );

					?>  </h2>
                <p class="modal-info"><?php echo wp_kses_post( get_theme_mod( "virgo_c_form_s_modal_description", wp_kses_post( "Leave your contacts and our managers<br> will contact you soon.", "virgo" ) ) );

					?></p>
            </div>
            <div class="modal-body">
				<?php
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
				?>
            </div>
        </div>
    </div>
</div>

<!-- Modals success -->

<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="<?php echo esc_html__( 'Close', 'virgo' ); ?>"><span
                            aria-hidden="true">&times;</span></span>
                <h2 class="modal-title text-primary"> <?php
					echo esc_html( get_theme_mod( 'virgo_c_form_s_susses_title', esc_html__( 'Thank you', 'virgo' ) ) ); ?>
                </h2>
                <p class="modal-subtitle">
					<?php echo esc_html( get_theme_mod( 'virgo_c_form_s_susses_sub_title', esc_html__( 'Your message is successfully sent...', 'virgo' ) ) ); ?>
                </p>

            </div>
        </div>
    </div>
</div>

<!-- Modals error -->

<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="<?php echo esc_html__( 'Close', 'virgo' ); ?>"><span
                            aria-hidden="true">&times;</span></span>
                <h2 class="modal-title text-primary">
					<?php echo esc_html( get_theme_mod( 'virgo_c_form_s_error_title', esc_html__( 'Sorry', 'virgo' ) ) ); ?>
                </h2>
                <p class="modal-subtitle">
					<?php echo esc_html( get_theme_mod( 'virgo_c_form_s_error_sub_title', esc_html__( 'Something went wrong', 'virgo' ) ) ); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->

<?php wp_footer(); ?>
</div>
</body>
</html>
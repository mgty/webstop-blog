<?php get_header();

$virgo_cat = 0;
$virgo_category = get_category( get_query_var( 'cat' ) );
if ( isset( $virgo_category->cat_ID ) ) {
	$virgo_cat = $virgo_category->cat_ID;
} else {
	$virgo_cat = 0;
}

?>

    <!-- Home -->

    <main class="main main-inner main-blog jarallax" data-jarallax='{"speed": 0.6}'>
        <div class="container">
            <div class="opener">
                <h1><?php
					the_archive_title();
					?></h1>
                <p class="lead">
					<?php

					if ( is_home() ) {
						bloginfo( 'description' );
					} elseif ( isset( $category_id ) ) {
						echo wp_kses_post( str_replace( array( '<p>', '</p>' ), array(
							'',
							''
						), category_description( $category_id ) ) );

					}


					?>
                </p>
            </div>
        </div>
    </main>


<?php $type = virgo_get_blog_type();

if ( $type == 'col2' || $type == 'col3' || $type == 'col1' ) { ?>
	<?php if ( $type == 'col2' ) { ?>
		<?php

		$positin_sidebar = "";

		if ( get_theme_mod( 'virgo_sidebar_position', 's2' ) == 's1' ) {
			$positin_sidebar = 'left';
		} else {
			$positin_sidebar = 'right';
		}

		if ( isset( $_GET['showas'] ) && $_GET['showas'] == 'left' ) {
			$positin_sidebar = 'left';
		} elseif ( isset( $_GET['showas'] ) && $_GET['showas'] == 'right' ) {
			$positin_sidebar = 'right';
		}

		if ( $positin_sidebar == 'left' ) {
			get_sidebar();
		}
		?>
        <div class="blog-list bg-light section">
            <div class="container">
                <div class="row">
                    <div class="primary col-md-8 ">
                        <div class="row-blog row b-grid">
							<?php if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) : the_post(); ?>
                                    <div class="col-blog col-sm-6">
										<?php get_template_part( 'partials/col2content' ); ?>
                                    </div>
								<?php endwhile;
								wp_reset_postdata();
								?>


							<?php else :
								// If no content, include the "No posts found" template.
								get_template_part( 'content', 'none' );
							endif; ?>
                        </div>
                        <div class="clearfix text-center">
                            <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="btn btn-white load-more">
                               	<?php 
	                               	$text = get_theme_mod( 'virgo_blog_list_text' );
	                               	if ( isset( $text{0} ) ) {
										echo wp_kses_post( $text ); 
									}
                               	?>
                            </a>
                        </div>
                    </div>
					<?php
					if ( $positin_sidebar == 'right' ) {
						get_sidebar();
					}
					?>
                </div>
            </div>
        </div>
	<?php } ?>
	<?php if ( $type == 'col3' ) { ?>

        <div class="blog-list bg-light section">
            <div class="container">
                <div class="primary">
                    <div class="row-blog row b-grid">
						<?php if ( have_posts() ) : ?>
							<?php
							while ( have_posts() ) : the_post(); ?>
                                <div class="col-blog col-sm-6 col-md-4">
									<?php get_template_part( 'partials/col2content' ); ?>
                                </div>
							<?php endwhile;
							wp_reset_postdata();
							?>


						<?php else :
							// If no content, include the "No posts found" template.
							get_template_part( 'content', 'none' );
						endif; ?>
                    </div>
                    <div class="clearfix text-center">
                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                           class="btn btn-white load-more"> <?php esc_html_e( 'More posts', 'virgo' ) ?></a>
                    </div>
                </div>
            </div>
        </div>

	<?php } ?>

	<?php if ( $type == 'col1' ) { ?>
		<?php

		$positin_sidebar = "";

		if ( get_theme_mod( 'virgo_sidebar_position', 's2' ) == 's1' ) {
			$positin_sidebar = 'left';
		} else {
			$positin_sidebar = 'right';
		}

		if ( isset( $_GET['showas'] ) && $_GET['showas'] == 'left' ) {
			$positin_sidebar = 'left';
		} elseif ( isset( $_GET['showas'] ) && $_GET['showas'] == 'right' ) {
			$positin_sidebar = 'right';
		}

		if ( $positin_sidebar == 'left' ) {
			get_sidebar();
		}
		?>
        <div class="blog-list bg-light section">
            <div class="container">
                <div class="row">
                    <div class="primary col-md-8 ">
                        <div class="b-grid">
							<?php if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) : the_post(); ?>
									<?php get_template_part( 'partials/col3content' ); ?>
								<?php endwhile;
								wp_reset_postdata();
								?>


							<?php else :
								// If no content, include the "No posts found" template.
								get_template_part( 'content', 'none' );
							endif; ?>
                        </div>
                        <div class="clearfix text-center">
                            <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                               class="btn btn-white load-more"> <?php esc_html_e( 'More posts', 'virgo' ) ?></a>
                        </div>
                    </div>
					<?php
					if ( $positin_sidebar == 'right' ) {
						get_sidebar();
					}
					?>
                </div>
            </div>
        </div>
	<?php } ?>

<?php } else { ?>

    <div class="blog-list bg-light section">

        <div class="container">

            <div class="b-grid">
				<?php if ( have_posts() ) { ?>
					<?php
					// Start the Loop.
					while ( have_posts() ) {
						the_post();
						get_template_part( 'partials/content', get_post_format() );

					}
				}

				wp_reset_postdata();
				?>

            </div>
            <div class="text-center">
                <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                   class="btn btn-white load-more"> <?php esc_html_e( 'More posts', 'virgo' ) ?></a>
            </div>
        </div>
    </div>

<?php } ?>

    <!--virgo_infinite_scroll-->

<?php
$cats_arr = array();
global $wp_query;
// is archive page
if ( isset( $wp_query->query['year'] ) && !empty( $wp_query->query['year'] ) ) {
	$cats_arr['year'] = ( $wp_query->query['year'] );
}

if ( isset( $wp_query->query['monthnum'] ) && !empty( $wp_query->query['monthnum'] ) ) {
	$cats_arr['monthnum'] = ( $wp_query->query['monthnum'] );
}

if ( isset( $wp_query->query['day'] ) && !empty( $wp_query->query['day'] ) ) {
	$cats_arr['day'] = ( $wp_query->query['day'] );
}


$searh = get_search_query();
if ( isset( $searh{0} ) ) {
	$cats_arr['s'] = sanitize_text_field( get_search_query() );
}

$ne_url = http_build_query( $cats_arr );
?>
    <script>


        function initialize_map() {
        }

        jQuery(document).ready(function ($) {


            var total =  <?php echo esc_html( $wp_query->max_num_pages );?>;
            var ajax = true;
            var count = 2;

            $('.load-more').click(function () {

                jQuery(this).addClass('active2');
                if (ajax) {
                    if (count > total + count) {
                        return false;
                    } else {
                        if ($("div").is(".no_posts_1")) return;
                        loadArticle(count);
                        count++;

                    }
                    ajax = false;
                }
                return false;

            });


            function loadArticle(pageNumber) {

                var ofset = $(".blog-list ").length;
                var posttype = "<?php
					if ( isset( $wp_query->query['post_type'] ) ) {
						echo esc_attr( sanitize_text_field( $wp_query->query['post_type'] ) );
					}
					?>";
                var cat = "<?php
					if ( is_front_page() ) { // is the index page cat = 0
						echo 0;
					} else {
						if ( get_the_category() ) {
							echo esc_html( $virgo_cat );
						}

					} ?>";
                var is_sticky = "";
                var tag = '<?php
					if ( isset( $wp_query->query['tag'] ) && !empty( $wp_query->query['tag'] ) ) {
						echo esc_html( $wp_query->query['tag'] );
					}
					?>';

                jQuery('.load-more').attr('disabled', true);

                $.ajax({
					<?php $type = virgo_get_blog_type(); ?>
                    url: "<?php echo esc_url( site_url() ); ?>/wp-admin/admin-ajax.php",
                    type: 'POST',
                    data: "action=virgo_infinite_scroll&page_no=" + pageNumber + "&ofset=" + ofset +
                    "&cat=" + cat + '&tag=' + tag + "&is_sticky=" + is_sticky + '&type=<?php echo esc_attr( $type ); ?>',
                    success: function (html) {

                        var $moreBlocks = jQuery(html).filter('.post-item');
                        jQuery(".b-grid").append(html);
                        ajax = true;
                        jQuery('.load-more').attr('disabled', false);

                    }
                });
                return false;
            }


        });
    </script>


<?php
get_template_part( 'partials/footer','blog' );

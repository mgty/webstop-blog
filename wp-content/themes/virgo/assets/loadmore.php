<?php


/**
 * @return categorias
 */
function virgo_wp_infinitepaginate()
{


	$paged = (int)sanitize_text_field($_POST['page_no']);
	$posts_per_page = (int)sanitize_text_field(get_option('posts_per_page'));

	if (isset($_POST['s']{0})) {
		$args = array(
			'paged' => $paged,
			'showposts' => $posts_per_page,
			'post_status' => 'publish',
			's' => sanitize_text_field($_POST['s'])
		);


	} else {
		$args = array(
			'paged' => $paged,
			'showposts' => $posts_per_page,
			'cat' => sanitize_text_field($_POST['cat']),
			'post_status' => 'publish',
			'post_type' => sanitize_text_field($_POST['posttype'])
		);
	}

	if (isset($_POST['year']) && !empty($_POST['year']))
		$args['year'] = ($_POST['year']);

	if (isset($_POST['monthnum']) && !empty($_POST['monthnum']))
		$args['monthnum'] = ($_POST['monthnum']);

	if (isset($_POST['day']) && !empty($_POST['day']))
		$args['day'] = ($_POST['day']);

	$query = new WP_Query($args);

	$n = 0;
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			switch ($_POST['type']) {
				case 'col2':
					echo "<div class='col-blog col-sm-6'>";
					get_template_part('partials/col2content', get_post_format());
					echo "</div>";
					break;
				case 'col3':
					echo "<div class='col-blog col-sm-6 col-md-4'>";
					get_template_part('partials/col2content', get_post_format());
					echo "</div>";
					break;
				case 'col1':
					get_template_part('partials/col3content', get_post_format());
					break;				
				default:
					get_template_part('partials/content', get_post_format());
					break;
			}
		}
	}
	wp_reset_postdata();

	exit;
	die();
}

add_action('wp_ajax_virgo_infinite_scroll', 'virgo_wp_infinitepaginate'); // for logged in user
add_action('wp_ajax_nopriv_virgo_infinite_scroll', 'virgo_wp_infinitepaginate'); // if user not logged in


function virgo_wp_infinitepaginate_projects()
{


	$paged = (int)sanitize_text_field($_POST['page_no']);
	$posts_per_page = (int)sanitize_text_field($_POST['post_per_page']);


	if (isset($_POST['s']{0})) {
		$args = array(
			'paged' => $paged,
			'showposts' => $posts_per_page,
			'post_status' => 'publish',
			'post_type' => 'projects',
			's' => sanitize_text_field($_POST['s'])
		);


	} else {
		$args = array(
			'paged' => $paged,
			'showposts' => $posts_per_page,
			'cat' => sanitize_text_field($_POST['cat']),
			'post_status' => 'publish',
			'post_type' => 'projects',
		);


	}
	if (isset($_POST['term']{0}) && ($_POST['term']!="all")) {
		$args['tax_query'] = array(array(
			'taxonomy' => 'projects_categories',
			'terms' => explode(',' , $_POST['term'] ),
			'field' => 'slug'));
	}
	if (isset($_POST['year']) && !empty($_POST['year']))
		$args['year'] = sanitize_text_field($_POST['year']);

	if (isset($_POST['monthnum']) && !empty($_POST['monthnum']))
		$args['monthnum'] = sanitize_text_field($_POST['monthnum']);

	if (isset($_POST['day']) && !empty($_POST['day']))
		$args['day'] = sanitize_text_field($_POST['day']);

	if (isset($_POST['tag']) && !empty($_POST['tag']))
		$args['tag'] = sanitize_text_field($_POST['tag']);



	$query = new WP_Query($args);

	$j = 1;

	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();

			$main_class = '';
			if ($j % 2 == 0) {
				$main_class = ' project-light';
			}
			$j++;

			?>

			<div class="project project_item <?php echo esc_attr($main_class); ?> col-sm-6 col-md-4 col-lg-3">
				<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
				<a href="<?php echo esc_url($image_url[0]); ?>" title="project 3">
					<figure>
						<?php the_post_thumbnail('virgo-image-480x880-croped'); ?>


						<figcaption>
							<h3 class="project-title">
								<?php echo the_title(); ?>
							</h3>
							<?php $terms = get_the_terms(get_the_ID(), 'projects_categories');

							foreach ($terms as $term) {
								?>
								<h4 class="project-category">
									<?php echo esc_html($term->name); ?>

								</h4>
								<?php
							}
							?>
							<div class="project-zoom"></div>
						</figcaption>
					</figure>
				</a>
			</div>

			<?php

		}


	}

	wp_reset_postdata();

	exit;
	die();
}

add_action('wp_ajax_virgo_infinite_projects_scroll', 'virgo_wp_infinitepaginate_projects'); // for logged in user
add_action('wp_ajax_nopriv_virgo_infinite_projects_scroll', 'virgo_wp_infinitepaginate_projects'); // if user not logged in


?>
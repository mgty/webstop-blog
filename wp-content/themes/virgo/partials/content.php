<?php
$virgo_class = virgo_get_global_class();
if ( !is_single() && ( !is_page() ) ) { 


$virgo_cat = 0;
$virgo_category = get_category( get_query_var( 'cat' ) );
if ( isset( $virgo_category->cat_ID ) ) {
	$virgo_cat = $virgo_category->cat_ID;
} else {
	$virgo_cat = 0;
}


?>

	<article <?php post_class( 'blog post blog_item  post-item ' ); ?>>
		<div class="row">
			<?php

			if ( has_post_thumbnail() ) {
				?>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="blog-thumbnail col-md-8">
					<a href="<?php echo esc_url( get_the_permalink() ); ?>">
						<div class="blog-thumbnail-bg col-md-8 visible-md visible-lg"
						     style="background-image: url(<?php the_post_thumbnail_url("virgo-image-700x430-croped"); ?>);">
						</div>
					</a>
					
					<a href="<?php echo esc_url( get_the_permalink() ); ?>">
						<div class="blog-thumbnail-img visible-xs visible-sm">
							<img src="<?php the_post_thumbnail_url("virgo-image-700x430-croped"); ?>" alt="" class="img-responsive">
						</div>
					</a>
				</div>
				<?php endif; ?>
				<div class="blog-info col-md-4">
					<?php  virgo_get_list_cats_blog(); ?>
					<h3 class="blog-title">
						<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
					</h3>
					<p class="text-muted"><?php echo virgo_limit_excerpt( virgo_words_limit() ); ?></p>
					<div class="blog-meta">
						<div class="pull-left">
							<?php esc_html_e( 'by ', 'virgo' ); ?><a
								href="<?php echo esc_url( get_the_author_link() ); ?>" class="author"><?php echo esc_html( get_the_author() ); ?></a>
						</div>
						<div class="pull-right">
		                    <div class="time"><?php echo esc_html( get_the_date() ); ?></div>
		                </div>
					</div>
				</div>
				<?php
			} else { ?>
				<div class="blog-info col-md-12">
					<?php  virgo_get_list_cats_blog(); ?>
					<h3 class="blog-title">
						<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
					</h3>
					<p class="text-muted"><?php echo virgo_limit_excerpt( virgo_words_limit() ); ?></p>
					<div class="blog-meta">
						<div class="pull-left">
							<?php esc_html_e( 'by ', 'virgo' ); ?><a
								href="<?php echo esc_url( get_the_author_link() ); ?>" class="author"><?php echo esc_html( get_the_author() ); ?></a>
						</div>
						<div class="pull-right">
		                    <div class="time"><?php echo esc_html( get_the_date() ); ?></div>
		                </div>
					</div>
				</div>
				<?php

			}
			?>


		</div>
	</article>

<?php } else { ?>

	<article class="post">
		<?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
			 <img src="<?php the_post_thumbnail_url("virgo-image-750x460-croped"); ?>" alt="" class="img-responsive">
        </div>
       	<?php endif; ?>
        <div class="post-meta <?php  $categories = get_the_category( $post->ID ); if (isset( $categories[0]->term_id)) { echo 'has-rubric'; }?>">
         	<?php virgo_get_list_cats(); ?>
          <div class="post-date">
            <div class="time"><?php echo esc_html( get_the_date() ); ?></div>
          </div>
          <div class="post-author">
             <?php esc_html_e( 'by ', 'virgo' ); ?>
					<a href="<?php echo esc_url( get_the_author_link() ); ?>" class="author"><?php echo esc_html( get_the_author() ); ?></a>
          </div>
        </div>
        
        <div class="text-muted">
          <?php the_content(); ?>
        </div>
		  <div class="post_pagination">
		   <?php
		   	echo virgo_link_pages();
		   ?>
		  </div>

        <footer class="post-footer">
          <div class="widget widget_tags">
            <h3 class="widget-title">
            	<?php if ( has_tag() ) : ?>
					<?php esc_html_e( 'Tags ', 'virgo' ); ?>
				<?php endif; ?>
           	</h3>
            <div class="tagcloud">
             	<?php the_tags( '', '' ); ?>
            </div>
          </div>
        </footer>
      </article>

<?php } ?>
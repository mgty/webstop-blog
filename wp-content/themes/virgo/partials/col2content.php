<?php
$virgo_class = virgo_get_global_class();


$virgo_cat = 0;
$virgo_category = get_category( get_query_var( 'cat' ) );
if ( isset( $virgo_category->cat_ID ) ) {
	$virgo_cat = $virgo_category->cat_ID;
} else {
	$virgo_cat = 0;
}
 ?>
    <article class="blog">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="blog-thumbnail">
        <a href="<?php echo esc_url( get_the_permalink() ); ?>">
          <div class="blog-thumbnail-img">
            <img src="<?php the_post_thumbnail_url("virgo-image-330x230-croped"); ?>" alt="" class="img-responsive">
          </div>
        </a>
      </div>
      <?php endif; ?>
      <div class="blog-info">
        <?php  virgo_get_list_cats_blog(); ?>
        <h3 class="blog-title">
          <a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
        </h3>
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
    </article>
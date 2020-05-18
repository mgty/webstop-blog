<div <?php post_class('post'); ?>>
    <header class="post-header">
        <h2><?php esc_html_e( 'Nothing Found', 'virgo' ); ?></h2>

    </header>

    <div class="post-entry text-left">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'virgo' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

        <?php elseif ( is_search() ) : ?>

            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'virgo' ); ?></p>
            <?php get_search_form(); ?>

        <?php else : ?>

        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'virgo' ); ?></p>
        <?php get_search_form(); ?>

<?php endif; ?>

</div>

</div>

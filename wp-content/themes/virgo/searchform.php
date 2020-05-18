<form class="search-form" action=" <?php echo esc_url(get_home_url('/')); ?>" method="get">
  <div class="input-group">
    <input type="search" class="input-round form-control" placeholder="<?php  esc_html_e('Search','virgo'); ?>" name="s" title="<?php  esc_html_e('Search for:','virgo'); ?>">
    <span class="input-group-btn">
      <button class="btn" type="submit"><span class="arrow-right"></span></button>
    </span>
  </div>
</form>

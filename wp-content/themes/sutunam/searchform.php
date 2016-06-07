<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 19/10/2015
 * Time: 17:48
 */
?>
<form role="search" method="get" id="searchform" class="searchform"
      action="<?php echo esc_url(home_url('/')); ?>">
    <div class="search-item">
        <input placeholder="<?php echo __('Search', 'sutunam') ?>" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"/>
        <label class="screen-reader-text fa fa-search" for="s"><?php _x('Search for:', 'label'); ?></label>
    </div>
</form>
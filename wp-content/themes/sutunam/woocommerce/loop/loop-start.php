<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
?>
<button class="btn-filter" type="button"><?php echo __('Filter','sutunam') ?></button>
<button class="btn-close" type="button"><?php echo __('Close','sutunam') ?></button>

<div id="placeHolder"></div>
<div id="legend" style="display:none;"></div>
<div class="reset-filter" title="<?php echo __('Reset filter','sutunam') ?>" style="display:none;"><i class="fa fa-times" aria-hidden="true"></i><span><?php echo __('Clear','sutunam') ?></span></div>
</div><!-- End filter bar -->

<ul class="products" id="product-category">

<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
</div>
<div class="product-info-detail">
	<div class="product-description contain-1">
        <div class="desc-img">
            <?php echo types_render_field("product-image-description-1", array()); ?>
        </div>
        <div class="desc-detail">
            <?php echo types_render_field("product-description-1", array()); ?>
        </div>
	</div>
	<div class="product-description contain-2">
        <div class="desc-img">
            <?php echo types_render_field("product-image-description-2", array()); ?>
        </div>
        <div class="desc-detail">
            <?php echo types_render_field("product-description-2", array()); ?>
        </div>
	</div>
	<div class="product-description contain-3">
        <div class="desc-img">
            <?php echo types_render_field("product-image-description-3", array()); ?>
        </div>
        <div class="desc-detail">
            <?php echo types_render_field("product-description-3", array()); ?>
        </div>
	</div>
</div>

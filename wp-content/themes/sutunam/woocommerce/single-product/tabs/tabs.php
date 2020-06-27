<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
    </div><!-- End product container -->
</div><!-- End product content detail -->

<div class="product-info-detail">
	<div class="product-description contain-1">
        <?php if(types_render_field("product-image-description-1", array())) { ?>
        <div class="desc-img" style="background-image: url(<?php echo types_render_field("product-image-description-1", array('url'=>true)); ?>)">
            <?php echo types_render_field("product-image-description-1", array()); ?>
        </div>
        <?php } ?>
        <?php if(types_render_field("product-description-1", array())) { ?>
        <div class="desc-detail">
            <div class="desc-content">
                <?php echo types_render_field("product-description-1", array()); ?>
            </div>
        </div>
        <?php } ?>
    </div>
    
	<div class="product-description contain-2">
        <?php if(types_render_field("product-image-description-2", array())) { ?>
        <div class="desc-img" style="background-image: url(<?php echo types_render_field("product-image-description-2", array('url'=>true)); ?>)">
            <?php echo types_render_field("product-image-description-2", array()); ?>
        </div>
        <?php } ?>
        <?php if(types_render_field("product-description-2", array())) { ?>
        <div class="desc-detail">
            <div class="desc-content">
                <?php echo types_render_field("product-description-2", array()); ?>
            </div>
        </div>
        <?php } ?>
    </div>
    
	<div class="product-description contain-3">
        <?php if(types_render_field("product-image-description-3", array())) { ?>
        <div class="desc-img" style="background-image: url(<?php echo types_render_field("product-image-description-3", array('url'=>true)); ?>)">
            <?php echo types_render_field("product-image-description-3", array()); ?>
        </div>
        <?php } ?>
        <?php if(types_render_field("product-description-3", array())) { ?>
        <div class="desc-detail">
            <div class="desc-content">
                <?php echo types_render_field("product-description-3", array()); ?>
            </div>
        </div>
        <?php } ?>
	</div>
</div>

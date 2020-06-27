<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<?php include (TEMPLATEPATH . '/left-content.php'); ?>
<div class="right-content">

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
        <div class="cat-header">
            <?php
            global $wp_query;
            $cat = $wp_query->get_queried_object();
			WC()->session->set('category_id' , $cat->term_id );
            ?>
            <?php

            // Display sub-category
            echo '<div class="cat-sub-list"><div class="container"><div class="row">';

            $parent = get_ancestors($cat->term_id, 'product_cat');
            $parent = array_reverse($parent);
            $ancestor = get_term_by('id', $parent[0], 'product_cat');
            $slides_id = $ancestor->slug . '_top_slides';
            
            if (isset($jk_options[$slides_id]) && !empty($jk_options[$slides_id])) {
                $slides = $jk_options[$slides_id];
                echo '<div class="cat-list swiper-container"><div class="swiper-wrapper">';
                foreach($slides as $slide) {
                    $slide_title = $slide['title'];
                    $slide_thumb = $slide['thumb'];
                    $slide_link = $slide['url'];
                    $slide_des = $slide['description'];

                    if($slide_des == $cat->slug)
                        echo '<div class="swiper-slide active"><a href="'. $slide_link .'"><figure><img src="'. $slide_thumb .'" /></figure><span>'. $slide_title .'</span></a></div>';
                    else
                        echo '<div class="swiper-slide"><a href="'. $slide_link .'"><figure><img src="'. $slide_thumb .'" /></figure><span>'. $slide_title .'</span></a></div>';
                }
                echo '</div></div></div></div></div>';
            }
            ?>
            <div class="cat-info">
                <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

                    <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

                <?php endif; ?>
                <?php
                /**
                 * woocommerce_archive_description hook.
                 *
                 * @hooked woocommerce_taxonomy_archive_description - 10
                 * @hooked woocommerce_product_archive_description - 10
                 */
                do_action( 'woocommerce_archive_description' );
                ?>

                <?php if ( have_posts() ) : ?>
            </div>

			<?php
			// Display category image
            $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
            $image = wp_get_attachment_url( $thumbnail_id );
            if($image):
                ?>
                <div class="cat-image">
                    <img src="<?php echo $image;?>" />
                </div>
            <?php endif;?>
        </div><!-- End cat header -->

        <!-- Filter bar -->
        <div class="filter-bar"><div class="container"><div class="row">

			<?php
				/**
                 * Hook: woocommerce_before_shop_loop.
                 *
                 * @hooked woocommerce_output_all_notices - 10
                 * @hooked woocommerce_result_count - 20
                 * @hooked woocommerce_catalog_ordering - 30
                 */
                do_action( 'woocommerce_before_shop_loop' );
			?>

            <?php woocommerce_product_loop_start(); ?>

            <?php
                if ( wc_get_loop_prop( 'total' ) ) {
                    while ( have_posts() ) {
                        the_post();

                        /**
                         * Hook: woocommerce_shop_loop.
                         */
                        do_action( 'woocommerce_shop_loop' );

                        wc_get_template_part( 'content', 'product' );
                    }
                } 
            ?>

            <?php woocommerce_product_loop_end(); ?>
            
			<?php
				/**
                 * Hook: woocommerce_after_shop_loop.
                 *
                 * @hooked woocommerce_pagination - 10
                 */
                do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php else : ?>
            <?php
                /**
                * Hook: woocommerce_no_products_found.
                *
                * @hooked wc_no_products_found - 10
                */
                do_action( 'woocommerce_no_products_found' );
            ?>
		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

    <?php get_footer( 'shop' ); ?>
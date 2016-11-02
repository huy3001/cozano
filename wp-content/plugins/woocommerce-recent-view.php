<?php
/*
Plugin Name: WooCommerce - Recently Viewed Products
Author: Phucct
*/

function rc_woocommerce_recently_viewed_products( $atts, $content = null ) {

    extract(shortcode_atts(array(
        "per_page" => '5'
    ), $atts));

    global $woocommerce;

    $viewed_products = ! empty( $_COOKIE['woocommerce_recently_viewed'] ) ? (array) explode( '|', $_COOKIE['woocommerce_recently_viewed'] ) : array();
    $viewed_products = array_filter( array_map( 'absint', $viewed_products ) );

    if ( empty( $viewed_products ) )
        return __( 'You have not viewed any product yet!', 'rc_wc_rvp' );

    ob_start();

    if( !isset( $per_page ) ? $number = 5 : $number = $per_page )

        $query_args = array(
            'posts_per_page' => $number,
            'no_found_rows'  => 1,
            'post_status'    => 'publish',
            'post_type'      => 'product',
            'post__in'       => $viewed_products,
            'orderby'        => 'rand'
        );

    $query_args['meta_query'] = array();
    $query_args['meta_query'][] = $woocommerce->query->stock_status_meta_query();
    $r = new WP_Query($query_args);

    if ( $r->have_posts() ) {

        $content = '<ul class="rc_wc_rvp_product_list_widget">';
        $content .='<h1>Alo picaso</h1>';
        while ( $r->have_posts()) {
            $r->the_post();
            global $product;

            $content .= '<li>
				<a href="' . get_permalink() . '">
					' . ( has_post_thumbnail() ? get_the_post_thumbnail( $r->post->ID, 'shop_thumbnail' ) : woocommerce_placeholder_img( 'shop_thumbnail' ) ) . ' ' . get_the_title() . '
				</a> ' . $product->get_price_html() . '
			</li>';
        }

        $content .= '</ul>';

    }

    $content .= ob_get_clean();
    return $content;
}

add_shortcode("woocommerce_recently_viewed_products", "rc_woocommerce_recently_viewed_products");
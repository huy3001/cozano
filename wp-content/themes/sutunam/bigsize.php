<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 23/09/2015
 * Time: 10:47
 * Template Name: Big Size Page
 */
get_header(); ?>
<?php
$jk_options = get_option('redux_demo');
?>
<?php include (TEMPLATEPATH . '/left-content.php'); ?>
<div class="right-content">
    <?php
    global $wp_query;
    echo '<div class="cat-sub-list"><div class="container"><div class="row">';
    $cat = get_term_by('slug','men','product_cat');
    $args = array(
        'hierarchical' => 1,
        'show_option_none' => '',
        'hide_empty' => 0,
        'parent' => $cat->term_id,
        'taxonomy' => 'product_cat'
    );
    $categories = get_categories( $args );
    echo '<div class="cat-list swiper-container"><div class="swiper-wrapper">';
    foreach($categories as $category){
        $link = get_term_link( $category->slug, $category->taxonomy );
        $thumbnail = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
        $image_sub = wp_get_attachment_url( $thumbnail );
        if($category->term_id == $cat->term_id)
            echo '<div class="swiper-slide active"><a href="'. $link .'"><figure><img src="'. $image_sub .'" /></figure><span>'. $category->name .'</span></a></div>';
        else
            echo '<div class="swiper-slide"><a href="'. $link .'"><figure><img src="'. $image_sub .'" /></figure><span>'. $category->name .'</span></a></div>';
    }
    echo '</div></div></div></div></div>';
    ?>

	<div class="container">
		<div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_cat' =>'bigsize',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
			<div class="bigsize-option-1 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
                <?php
                if ($loop->have_posts()) :?>
                    <div class="feature-product">
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            $product = new WC_product($loop->post->ID);
                            ?>
                            <?php echo '<a href="'.get_permalink($loop->post->ID).'">';?>
                            <span class="info">
                                    <span class="name"><?php echo $product->get_title();?></span>
                                    <span class="price"><?php echo $product->get_price_html();?></span>
                                    <span class="shop">Shop</span>
                                </span>
                            <?php echo $product->get_image('image');?>
                            <?php echo '</a>';?>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
                <div class="content-block-img">
				    <img src="<?php echo $jk_options['bigsize_img_option_1']['url'] ?>" alt="" />
                </div>
				<div class="content-block-body">
					<?php echo $jk_options['bigsize_desc_option_1']?>
					<a href="<?php echo $jk_options['bigsize_url_option_1']?>" target="_self">
						<span>shopping</span>
					</a>
				</div>
			</div>
		</div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_cat' =>'bigsize',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="bigsize-option-2 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
                <?php
                if ($loop->have_posts()) :?>
                    <div class="feature-product">
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            $product = new WC_product($loop->post->ID);
                            ?>
                            <?php echo '<a href="'.get_permalink($loop->post->ID).'">';?>
                            <span class="info">
                                    <span class="name"><?php echo $product->get_title();?></span>
                                    <span class="price"><?php echo $product->get_price_html();?></span>
                                    <span class="shop">Shop</span>
                                </span>
                            <?php echo $product->get_image('image');?>
                            <?php echo '</a>';?>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
                <div class="content-block-img">
                    <img src="<?php echo $jk_options['bigsize_img_option_2']['url'] ?>" alt="" />
                </div>
                <div class="content-block-body">
                    <?php echo $jk_options['bigsize_desc_option_2']?>
                    <a href="<?php echo $jk_options['bigsize_url_option_2']?>" target="_self">
                        <span>shopping</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_cat' =>'bigsize',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="bigsize-option-3 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
                <?php
                if ($loop->have_posts()) :?>
                    <div class="feature-product">
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            $product = new WC_product($loop->post->ID);
                            ?>
                            <?php echo '<a href="'.get_permalink($loop->post->ID).'">';?>
                            <span class="info">
                                    <span class="name"><?php echo $product->get_title();?></span>
                                    <span class="price"><?php echo $product->get_price_html();?></span>
                                    <span class="shop">Shop</span>
                                </span>
                            <?php echo $product->get_image('image');?>
                            <?php echo '</a>';?>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
                <div class="content-block-img">
                    <img src="<?php echo $jk_options['bigsize_img_option_3']['url'] ?>" alt="" />
                </div>
                <div class="content-block-body">
                    <?php echo $jk_options['bigsize_desc_option_3']?>
                    <a href="<?php echo $jk_options['bigsize_url_option_3']?>" target="_self">
                        <span>shopping</span>
                    </a>
                </div>
            </div>
        </div>
	</div>
    <?php get_footer(); ?>

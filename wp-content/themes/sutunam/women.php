<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 23/09/2015
 * Time: 10:47
 * Template Name: Women Page
 */
get_header(); ?>
<?php
$jk_options = get_option('redux_demo');
?>
<?php include (TEMPLATEPATH . '/left-content.php'); ?>
<div class="right-content">
	<div class="container">
		<div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_cat' =>'hoodies',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            if ($loop->have_posts()) :?>
                <div class="feature-product">
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $product = new WC_product($loop->post->ID);
                        ?>
                        <?php echo $product->get_image('image');?>
                    <?php endwhile;?>
                </div>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
			<div class="women-option content-block">
				<img src="<?php echo $jk_options['women_img_option_1']['url'] ?>" alt="" />
				<div class="content-block-body">
					<?php echo $jk_options['women_desc_option_1']?>
					<a href="<?php echo $jk_options['women_url_option_1']?>" target="_self">
						<span>shopping</span>
					</a>
				</div>
			</div>
		</div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_cat' =>'hoodies',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            if ($loop->have_posts()) :?>
                <div class="feature-product">
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $product = new WC_product($loop->post->ID);
                        ?>
                        <?php echo $product->get_image('image');?>
                    <?php endwhile;?>
                </div>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
            <div class="women-option content-block">
                <img src="<?php echo $jk_options['women_img_option_2']['url'] ?>" alt="" />
                <div class="content-block-body">
                    <?php echo $jk_options['women_desc_option_2']?>
                    <a href="<?php echo $jk_options['women_url_option_2']?>" target="_self">
                        <span>shopping</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_cat' =>'hoodies',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            if ($loop->have_posts()) :?>
                <div class="feature-product">
                    <?php while ($loop->have_posts()) : $loop->the_post();
                        $product = new WC_product($loop->post->ID);
                        ?>
                        <?php echo $product->get_image('image');?>
                    <?php endwhile;?>
                </div>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
            <div class="women-option content-block">
                <img src="<?php echo $jk_options['women_img_option_3']['url'] ?>" alt="" />
                <div class="content-block-body">
                    <?php echo $jk_options['women_desc_option_3']?>
                    <a href="<?php echo $jk_options['women_url_option_3']?>" target="_self">
                        <span>shopping</span>
                    </a>
                </div>
            </div>
        </div>
	</div>
    <?php get_footer(); ?>

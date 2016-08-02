<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 23/09/2015
 * Time: 10:47
 * Template Name: Men Page
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
            if($jk_options['men_category_1']):
            $args = array(
                'post_type' => 'product',
                'product_cat' => $jk_options['men_category_1'],
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="men-option-1 content-block <?php if(!$loop->have_posts()) echo 'no-feature'; ?>">
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
            <?php else: ?>
            <div class="men-option-1 content-block <?php if(!$jk_options['men_des_option_1']) echo 'no-feature'; ?>">
            <?php endif;?>
                <?php if($jk_options['men_des_option_1']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['men_des_option_1']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['men_img_option_1']['url']): ?>
                    <img class="hidden-xs" src="<?php echo $jk_options['men_img_option_1']['url'] ?>" alt="" />
                    <?php
                        $men_img_option_1_mobile = wp_get_attachment_image_src($jk_options['men_img_option_1']['id'],array(600,600))[0];
                    ?>
                    <img class="visible-xs" src="<?php echo $men_img_option_1_mobile ?>" alt="" />
                    <?php endif; ?>
                </div>
				<div class="content-block-body <?php echo $jk_options['men_button_option_1'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['men_content_option_1']?>
	                    <?php if($jk_options['men_url_option_1']): ?>
		                    <a href="<?php echo $jk_options['men_url_option_1']?>" target="_self">
			                    <span>shopping</span>
		                    </a>
	                    <?php endif; ?>
                    </div>
				</div>
			</div>
		</div>
        <div class="row">
            <?php
            if($jk_options['men_category_2']):
            $args = array(
                'post_type' => 'product',
                'product_cat' => $jk_options['men_category_2'],
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="men-option-2 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
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
            <?php else: ?>
            <div class="men-option-2 content-block <?php if(!$jk_options['men_des_option_2']) echo 'no-feature'; ?>">
            <?php endif;?>
                <?php if($jk_options['men_des_option_2']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['men_des_option_2']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['men_img_option_2']['url']): ?>
                    <img class="hidden-xs" src="<?php echo $jk_options['men_img_option_2']['url'] ?>" alt="" />
                    <?php
                    $men_img_option_2_mobile = wp_get_attachment_image_src($jk_options['men_img_option_2']['id'],array(600,600))[0];
                    ?>
                    <img class="visible-xs" src="<?php echo $men_img_option_2_mobile ?>" alt="" />
                    <?php endif; ?>
                </div>
                <div class="content-block-body <?php echo $jk_options['men_button_option_2'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['men_content_option_2']?>
	                    <?php if($jk_options['men_url_option_2']): ?>
		                    <a href="<?php echo $jk_options['men_url_option_2']?>" target="_self">
			                    <span>shopping</span>
		                    </a>
	                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if($jk_options['men_category_3']):
            $args = array(
                'post_type' => 'product',
                'product_cat' => $jk_options['men_category_3'],
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="men-option-3 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
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
            <?php else: ?>
            <div class="men-option-3 content-block <?php if(!$jk_options['men_des_option_3']) echo 'no-feature'; ?>">
            <?php endif;?>
                <?php if($jk_options['men_des_option_3']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['men_des_option_3']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['men_img_option_3']['url']): ?>
                    <img class="hidden-xs" src="<?php echo $jk_options['men_img_option_3']['url'] ?>" alt="" />
                    <?php
                    $men_img_option_3_mobile = wp_get_attachment_image_src($jk_options['men_img_option_3']['id'],array(600,600))[0];
                    ?>
                    <img class="visible-xs" src="<?php echo $men_img_option_3_mobile ?>" alt="" />
                    <?php endif; ?>
                </div>
                <div class="content-block-body <?php echo $jk_options['men_button_option_3'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['men_content_option_3']?>
	                    <?php if($jk_options['men_url_option_3']): ?>
		                    <a href="<?php echo $jk_options['men_url_option_3']?>" target="_self">
			                    <span>shopping</span>
		                    </a>
	                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if($jk_options['men_category_4']):
            $args = array(
                'post_type' => 'product',
                'product_cat' => $jk_options['men_category_4'],
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="men-option-4 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
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
            <?php else: ?>
            <div class="men-option-4 content-block <?php if(!$jk_options['men_des_option_4']) echo 'no-feature'; ?>">
            <?php endif;?>
                <?php if($jk_options['men_des_option_4']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['men_des_option_4']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['men_img_option_4']['url']): ?>
                    <img class="hidden-xs" src="<?php echo $jk_options['men_img_option_4']['url'] ?>" alt="" />
                    <?php
                    $men_img_option_4_mobile = wp_get_attachment_image_src($jk_options['men_img_option_4']['id'],array(600,600))[0];
                    ?>
                    <img class="visible-xs" src="<?php echo $men_img_option_4_mobile ?>" alt="" />
                    <?php endif; ?>
                </div>
                <div class="content-block-body <?php echo $jk_options['men_button_option_4'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['men_content_option_4']?>
	                    <?php if($jk_options['men_url_option_4']): ?>
		                    <a href="<?php echo $jk_options['men_url_option_4']?>" target="_self">
			                    <span>shopping</span>
		                    </a>
	                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if($jk_options['men_category_5']):
            $args = array(
                'post_type' => 'product',
                'product_cat' => $jk_options['men_category_5'],
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="men-option-5 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
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
            <?php else: ?>
            <div class="men-option-5 content-block <?php if(!$jk_options['men_des_option_5']) echo 'no-feature'; ?>">
            <?php endif;?>
                <?php if($jk_options['men_des_option_5']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['men_des_option_5']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['men_img_option_5']['url']): ?>
                    <img class="hidden-xs" src="<?php echo $jk_options['men_img_option_5']['url'] ?>" alt="" />
                    <?php
                    $men_img_option_5_mobile = wp_get_attachment_image_src($jk_options['men_img_option_5']['id'],array(600,600))[0];
                    ?>
                    <img class="visible-xs" src="<?php echo $men_img_option_5_mobile ?>" alt="" />
                    <?php endif; ?>
                </div>
                <div class="content-block-body <?php echo $jk_options['men_button_option_5'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['men_content_option_5']?>
	                    <?php if($jk_options['men_url_option_5']): ?>
		                    <a href="<?php echo $jk_options['men_url_option_5']?>" target="_self">
			                    <span>shopping</span>
		                    </a>
	                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <?php get_footer(); ?>

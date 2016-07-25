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
                'product_cat' =>'women-jeans',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
			<div class="women-option-1 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
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
                <?php if($jk_options['women_desc_option_1']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['women_desc_option_1']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['women_img_option_1']['url']): ?>
				    <img src="<?php echo $jk_options['women_img_option_1']['url'] ?>" alt="" />
                    <?php endif; ?>
                </div>
				<div class="content-block-body">
                    <?php if($jk_options['women_url_option_1']): ?>
					<a href="<?php echo $jk_options['women_url_option_1']?>" target="_self">
						<span>shopping</span>
					</a>
                    <?php endif; ?>
				</div>
			</div>
		</div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_cat' =>'women-shirts',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="women-option-2 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
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
                <?php if($jk_options['women_desc_option_2']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['women_desc_option_2']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['women_img_option_2']['url']): ?>
                    <img src="<?php echo $jk_options['women_img_option_2']['url'] ?>" alt="" />
                    <?php endif; ?>
                </div>
                <div class="content-block-body">
                    <?php if($jk_options['women_url_option_2']): ?>
                    <a href="<?php echo $jk_options['women_url_option_2']?>" target="_self">
                        <span>shopping</span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_cat' =>'women-shorts',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="women-option-3 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
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
                <?php if($jk_options['women_desc_option_3']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['women_desc_option_3']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['women_img_option_3']['url']): ?>
                    <img src="<?php echo $jk_options['women_img_option_3']['url'] ?>" alt="" />
                    <?php endif; ?>
                </div>
                <div class="content-block-body">
                    <?php if($jk_options['women_url_option_3']): ?>
                    <a href="<?php echo $jk_options['women_url_option_3']?>" target="_self">
                        <span>shopping</span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_cat' =>'women-jeans',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="women-option-4 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
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
                <?php if($jk_options['women_desc_option_4']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['women_desc_option_4']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['women_img_option_4']['url']): ?>
                    <img src="<?php echo $jk_options['women_img_option_4']['url'] ?>" alt="" />
                    <?php endif; ?>
                </div>
                <div class="content-block-body">
                    <?php if($jk_options['women_url_option_4']): ?>
                    <a href="<?php echo $jk_options['women_url_option_4']?>" target="_self">
                        <span>shopping</span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_cat' =>'women-jeans',
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="women-option-5 content-block <?php if (!$loop->have_posts()) echo 'no-feature'?>">
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
                <?php if($jk_options['women_desc_option_5']): ?>
                    <div class="content-block-desc">
                        <?php echo $jk_options['women_desc_option_5']?>
                    </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['women_img_option_5']['url']): ?>
                    <img src="<?php echo $jk_options['women_img_option_5']['url'] ?>" alt="" />
                    <?php endif; ?>
                </div>
                <div class="content-block-body">
                    <?php if($jk_options['women_url_option_5']): ?>
                    <a href="<?php echo $jk_options['women_url_option_5']?>" target="_self">
                        <span>shopping</span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
	</div>
    <?php get_footer(); ?>

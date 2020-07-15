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
$base64_image = 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==';
?>
<?php include (TEMPLATEPATH . '/left-content.php'); ?>
<div class="right-content">
    <?php
    global $wp_query;
    echo '<div class="cat-sub-list"><div class="container"><div class="row">';
    $cat = get_term_by('slug','women','product_cat');
    $args = array(
        'hierarchical' => 1,
        'show_option_none' => '',
        'hide_empty' => 0,
        'parent' => $cat->term_id,
        'taxonomy' => 'product_cat'
    );
    if (isset($jk_options['women_top_slides']) && !empty($jk_options['women_top_slides'])) {
        $slides = $jk_options['women_top_slides'];
        echo '<div class="cat-list swiper-container"><div class="swiper-wrapper">';
        foreach($slides as $slide) {
            $slide_title = $slide['title'];
            $slide_thumb = $slide['thumb'];
            $slide_link = $slide['url'];

            if($slide_title == $cat->name)
                echo '<div class="swiper-slide active"><a href="'. $slide_link .'"><figure><img class="lazyload" src="'. $base64_image .'" data-src="'. $slide_thumb .'" /></figure><span>'. $slide_title .'</span></a></div>';
            else
                echo '<div class="swiper-slide"><a href="'. $slide_link .'"><figure><img class="lazyload" src="'. $base64_image .'" data-src="'. $slide_thumb .'" /></figure><span>'. $slide_title .'</span></a></div>';
        }
        echo '</div></div></div></div></div>';
    }
    ?>
	<div class="container">
		<div class="row">
            <?php
            if($jk_options['women_category_1']):
            $args = array(
                'post_type' => 'product',
                'product_cat' => $jk_options['women_category_1'],
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="women-option-1 content-block <?php if ($loop->have_posts()) echo 'has-feature'; ?>">
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
            <div class="women-option-1 content-block <?php if ($jk_options['women_des_option_1']) echo 'has-feature'; ?>">
            <?php endif;?>
                <?php if($jk_options['women_des_option_1']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['women_des_option_1']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['women_url_option_1']): ?>
                    <a href="<?php echo $jk_options['women_url_option_1']?>" target="_self">
                    <?php endif; ?>
                        <?php if($jk_options['women_img_option_1']['url']): ?>
                        <?php
                        $women_img_option_1_tablet = wp_get_attachment_image_src($jk_options['women_img_option_1']['id'],'medium')[0];
                        $women_img_option_1_mobile = wp_get_attachment_image_src($jk_options['women_img_option_1']['id'],'thumbnail')[0];
                        ?>
                        <picture>
                            <source media="(min-width:992px)" data-srcset="<?php echo $jk_options['women_img_option_1']['url'] ?>">
                            <source media="(min-width:480px)" data-srcset="<?php echo $women_img_option_1_tablet ?>">
                            <img class="lazyload" src="<?php echo $base64_image ?>" data-src="<?php echo $women_img_option_1_mobile ?>" alt="">
                        </picture>
                        <?php endif; ?>
                    <?php if($jk_options['women_url_option_1']): ?>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="content-block-body <?php echo $jk_options['women_button_option_1'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['women_content_option_1']?>
                    </div>
				</div>
			</div>
		</div>
        <div class="row">
            <?php
            if($jk_options['women_category_2']):
            $args = array(
                'post_type' => 'product',
                'product_cat' => $jk_options['women_category_2'],
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="women-option-2 content-block <?php if ($loop->have_posts()) echo 'has-feature'; ?>">
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
            <div class="women-option-2 content-block <?php if ($jk_options['women_des_option_2']) echo 'has-feature'; ?>">
            <?php endif;?>
                <?php if($jk_options['women_des_option_2']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['women_des_option_2']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['women_url_option_2']): ?>
                    <a href="<?php echo $jk_options['women_url_option_2']?>" target="_self">
                    <?php endif; ?>
                        <?php if($jk_options['women_img_option_2']['url']): ?>
                        <?php
                        $women_img_option_2_tablet = wp_get_attachment_image_src($jk_options['women_img_option_2']['id'],'medium')[0];
                        $women_img_option_2_mobile = wp_get_attachment_image_src($jk_options['women_img_option_2']['id'],'thumbnail')[0];
                        ?>
                        <picture>
                            <source media="(min-width:992px)" data-srcset="<?php echo $jk_options['women_img_option_2']['url'] ?>">
                            <source media="(min-width:480px)" data-srcset="<?php echo $women_img_option_2_tablet ?>">
                            <img class="lazyload" src="<?php echo $base64_image ?>" data-src="<?php echo $women_img_option_2_mobile ?>" alt="">
                        </picture>
                        <?php endif; ?>
                    <?php if($jk_options['women_url_option_2']): ?>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="content-block-body <?php echo $jk_options['women_button_option_2'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['women_content_option_2']?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if($jk_options['women_category_3']):
            $args = array(
                'post_type' => 'product',
                'product_cat' => $jk_options['women_category_3'],
                'meta_key' => '_featured',
                'meta_value' => 'yes',
                'posts_per_page' => 1
            );
            $loop = new WP_Query( $args );
            ?>
            <div class="women-option-3 content-block <?php if ($loop->have_posts()) echo 'has-feature'; ?>">
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
            <div class="women-option-3 content-block <?php if ($jk_options['women_des_option_3']) echo 'has-feature'; ?>">
            <?php endif;?>
                <?php if($jk_options['women_des_option_3']): ?>
                <div class="content-block-desc">
                    <?php echo $jk_options['women_des_option_3']?>
                </div>
                <?php endif;?>
                <div class="content-block-img">
                    <?php if($jk_options['women_url_option_3']): ?>
                    <a href="<?php echo $jk_options['women_url_option_3']?>" target="_self">
                    <?php endif; ?>
                        <?php if($jk_options['women_img_option_3']['url']): ?>
                        <?php
                        $women_img_option_3_tablet = wp_get_attachment_image_src($jk_options['women_img_option_3']['id'],'medium')[0];
                        $women_img_option_3_mobile = wp_get_attachment_image_src($jk_options['women_img_option_3']['id'],'thumbnail')[0];
                        ?>
                        <picture>
                            <source media="(min-width:992px)" data-srcset="<?php echo $jk_options['women_img_option_3']['url'] ?>">
                            <source media="(min-width:480px)" data-srcset="<?php echo $women_img_option_3_tablet ?>">
                            <img class="lazyload" src="<?php echo $base64_image ?>" data-src="<?php echo $women_img_option_3_mobile ?>" alt="">
                        </picture>
                        <?php endif; ?>
                    <?php if($jk_options['women_url_option_3']): ?>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="content-block-body <?php echo $jk_options['women_button_option_3'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['women_content_option_3']?>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <?php get_footer(); ?>

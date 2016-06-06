<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 23/09/2015
 * Time: 10:47
 * Template Name: Homepage
 */
get_header(); ?>
<?php
$jk_options = get_option('redux_demo');
?>
<div class="left-menu"></div>
<div class="right-content"></div>
<div class="overview-homepage">
    <div class="container">
        <div class="overview-title">
            <h1><?php echo $jk_options['overview_title'] ?></h1>
        </div>
        <div class="overview-content">
            <div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-6">
                <div class="overview-left"><img
                        src="<?php echo $jk_options['overview_img_1']['url'] ?>"
                        alt="<?php echo strip_tags($jk_options['overview_content_1']) ?>"
                        width="60" height="74"/></div>
                <div
                    class="overview-right"><?php echo $jk_options['overview_content_1'] ?></div>
            </div>
            <div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-1 col-sm-6 col-xs-6">
                <div class="overview-left"><img
                        src="<?php echo $jk_options['overview_img_2']['url'] ?>"
                        alt="<?php echo strip_tags($jk_options['overview_content_2']) ?>"
                        width="42" height="81"/></div>
                <div
                    class="overview-right"><?php echo $jk_options['overview_content_2'] ?></div>
            </div>
            <div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-6">
                <div class="overview-left"><img
                        src="<?php echo $jk_options['overview_img_3']['url'] ?>"
                        alt="<?php echo strip_tags($jk_options['overview_content_3']) ?>"
                        width="50" height="65"/></div>
                <div
                    class="overview-right"><?php echo $jk_options['overview_content_3'] ?></div>
            </div>
            <div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-1 col-sm-6 col-xs-6">
                <div class="overview-left"><img
                        src="<?php echo $jk_options['overview_img_4']['url'] ?>"
                        alt="<?php echo strip_tags($jk_options['overview_content_4']) ?>"
                        width="88" height="69"/></div>
                <div
                    class="overview-right"><?php echo $jk_options['overview_content_4'] ?></div>
            </div>
        </div>
    </div>
</div>
<div class="ingredient-homepage">
    <div class="container">
        <div class="ingredient-content col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <h2 class="ingredient-title txt-heading">
                <?php echo __($jk_options['ingredient_title']); ?>
            </h2>

            <div class="ingredient-desc">
                <?php echo __($jk_options['ingredient_desc']); ?>
            </div>
            <div class="carousel-container featured-carousel-block">
                <div id="home-ingredient-carousel">
                    <?php foreach ($jk_options['ingredient_slides'] as $ingredient_slide): ?>
                        <div class="carousel-feature">
                            <div class="carousel-image">
                                <img class=" img-circle"
                                     src="<?php echo $ingredient_slide['thumb'] ?>"
                                alt="<?php echo strip_tags($ingredient_slide['title']) ?>"
                                width="100%"
                                />
                            </div>
                            <div class="slide-title">
                                <a href="<?php echo esc_url($ingredient_slide['url']) ?>"><?php echo $ingredient_slide['title'] ?></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div id="i-carousel-left" class="slider-prev"></div>
                <div id="i-carousel-right" class="slider-next"></div>
            </div>
        </div>
        <div class="ingredient-img">
            <div class="wrapper">
                <img
                    src="<?php echo esc_url($jk_options['ingredient_img']['url']) ?>"
                    alt="<?php echo __(strip_tags($jk_options['ingredient_title'])) ?>"/>
                <a href="<?php echo get_site_url() ?><?php echo __('/ingredients','sutunam')?>">
                    <button
                        class="ingredient-more-btn btn btn-large btn-more"><?php echo __('more on ingredients','sutunam') ?></button>
                </a>
            </div>
        </div>
        <div class="ingredient-more col-lg-6">

        </div>
    </div>
</div>

<div class="food-homepage jarallax"
     style="background-image: url('<?php echo esc_url($jk_options['food_background']['url']) ?>')">
    <div class="container">
        <div class="wrapper col-lg-10 col-lg-pull-2 col-md-12 col-sm-12 col-xs-12">
            <div class="food-img col-lg-6">
                <img src="<?php echo esc_url($jk_options['food_img']['url']) ?>"
                     alt=""
                     width="100%"/>
            </div>
            <div class="food-content col-lg-6 clearfix">
                <div class="food-title txt-heading">
                    <?php echo __($jk_options['food_title']); ?>
                </div>
                <div class="food-desc">
                    <?php echo __($jk_options['food_desc']); ?>
                </div>
                <div class="carousel-container featured-carousel-block">
                    <div id="home-food-service">
                        <?php foreach ($jk_options['food_slides'] as $food_slide): ?>
                            <div class="carousel-feature">
                                <div class="carousel-image">
                                    <img class="img-circle"
                                         src="<?php echo $food_slide['thumb'] ?>"
                                         alt="<?php echo $food_slide['title'] ?>"
                                         width="100%"
                                        />
                                </div>
                                <div class="slide-title">
                                    <a href="<?php echo esc_url($food_slide['url']) ?>"><?php echo $food_slide['title'] ?></a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div id="f-carousel-left" class="slider-prev">
                    </div>
                    <div id="f-carousel-right" class="slider-next">
                    </div>
                </div>
                <div class="row shop-online">
                    <a href="<?php echo get_site_url() ?><?php echo __('/food-service','sutunam') ?>">
                        <button
                            class="food-more-btn btn btn-large btn-more"><?php echo __('more on hospitality','sutunam') ?></button>
                    </a>
                </div>
                <ul id="food-slider">
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 5
                    );
                    query_posts($args);
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            $product_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), FALSE);
                            ?>
                            <li class="slide-item">
                                <div class="slide-title">
                                    <?php echo get_the_title(); ?>
                                </div>
                                <div class="slide-url">
                                    <a href="<?php echo esc_url(get_the_permalink()) ?>"></a>
                                </div>
                                <div class="slide-image">
                                    <img class="lazyOwl"
                                         data-src="<?php echo esc_url($product_img[0]) ?>"
                                         alt="<?php echo get_the_title(); ?>"
                                         width="100%"/>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="retailer-homepage retailer-carousel-block jarallax"
     style="background-image: url('<?php echo esc_url($jk_options['retailer_background']['url']) ?>')">
    <div class="container">
        <div class="retailer-content">
            <div class="retailer-title txt-heading">
                <?php echo __($jk_options['retailer_title']); ?>
            </div>
            <div class="retailer-desc">
                <?php echo __($jk_options['retailer_desc']); ?>
            </div>
            <ul id="home-retailer-slider" class="owl-carousel">
                <?php
                $args = array(
                    'post_type' => 'retailer',
                    'posts_per_page' => 9,
                    'order' => 'ASC'
                );
                query_posts($args);
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        $product_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), FALSE);
                        ?>
                        <li class="slide-item">
                            <div class="slide-title">
                                <?php echo get_the_title(); ?>
                            </div>
                            <div class="slide-image">
                                <div class="flip-container"
                                     ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper">
                                        <a class="front" href="<?php echo esc_url(get_site_url()).__('/retailers-supply','sutunam')?>/#<?php echo strtolower(get_the_title()) ?>">
                                            <img class="lazyOwl"
                                                 data-src="<?php echo esc_url($product_img[0]) ?>"
                                                 alt="<?php echo get_the_title(); ?>"
                                                 width="180px"/>
                                        </a>
                                        <div class="back">
                                            <img
                                                src="<?php echo esc_url(types_render_field("retailer-image", array('output' => 'raw'))) ?>"
                                                alt="<?php echo get_the_title(); ?>"
                                                width="180px"/>

                                            <div class="view-detail"><a
                                                    href="<?php echo esc_url(get_site_url()).__('/retailers-supply','sutunam')?>/#<?php echo strtolower(get_the_title()) ?>"><?php echo __('View details') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="slider-nav">
                <span class="slider-prev"></span>
                <span class="slider-next"></span>
            </div>
        </div>
        <div class="row more-brand">
            <a href="<?php echo get_site_url() . __('/retailers-supply','sutunam') ?>">
                <button
                    class="retailer-more-btn btn btn-large btn-more"><?php echo __('more on brands','sutunam') ?></button>
            </a>
        </div>
    </div>
</div>
<div class="shop-homepage">
    <div class="container">
        <div class="col-lg-6 shop-img">
            <div><img src="<?php echo $jk_options['shop_img']['url'] ?>"
                      alt="<?php echo strip_tags($jk_options['shop_desc']) ?>"
                      width="100%"/></div>
        </div>
        <div class="col-lg-6"><h2
                class="shop-title txt-heading"><?php echo $jk_options['shop_title'] ?></h2>
            <div
                class="shop-content"><?php echo $jk_options['shop_desc'] ?></div>
            <div class="row shop-online">
                <a href="http://www.newvietshop.com/" target="_blank">
                    <button
                        class="retailer-more-btn btn btn-large btn-more"><?php echo __('shop online','sutunam') ?></button>
                    </a>
            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>

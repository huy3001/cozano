<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 22/04/2015
 * Time: 17:45
 */
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), false);
        ?>
        <section class="news-wrapper news-detail-wrapper">
            <div id="breadcrumbs" class="breadcrumbs">
                <div class="container">
                    <span xmlns:v="http://rdf.data-vocabulary.org/#">
                    <span typeof="v:Breadcrumb">
                        <a
                            href="<?php echo get_site_url(); ?>" rel="v:url"
                            property="v:title">
                            <i class="fa fa-home"></i>
                        </a> / <a
                            class="breadcrumb_parent"
                            href="<?php echo get_site_url() . __('/news','sutunam')?>">
                            <span><?php echo __('News','sutunam') ?></span>
                        </a>
                        </span> /
                        <span
                            class="breadcrumb_last"><?php echo get_the_title() ?>
                        </span>
                    </span>
                </div>
            </div>

            <div class="news-heading">
                <div class="container">
                    <h1 class="txt-title news-title">
                        <?php echo __('Latest News','sutunam') ?>
                    </h1>

                    <div class="txt-description news-desc text-center">
                        <?php echo types_render_field("news-description", array()); ?>
                    </div>
                </div>
            </div>

            <div class="news-list news-detail">
                <div class="container">
                    <div class="row">
                        <div class="news-item col-xs-12 col-sm-12">
                            <div class="news-image">
                                <img src="<?php echo esc_url($image[0]) ?>" alt="<?php echo get_the_title() ?>"/>
                            </div>
                            <div class="news-content">
                                <div class="timestamp">
                                    <div class="date"><?php echo get_the_date('d') ?></div>
                                    <div class="month"><?php echo get_the_date('M') ?></div>
                                </div>
                                <div class="news-title">
                                    <h3><a href="<?php echo get_permalink(); ?>"><?php echo __(get_the_title()); ?></a></h3>
                                </div>
                                <div class="category-list">
                                    <?php echo get_the_category_list('<span>|</span>'); ?>
                                </div>
                                <div class="entry-content">
                                    <?php sutunam_entry_content();?>
                                </div>
                                <div class="social-share">
                                    <span class='st_facebook_large' displayText='Facebook'></span>
                                    <span class='st_twitter_large' displayText='Tweet'></span>
                                    <span class='st_googleplus_large' displayText='Google +'></span>
                                </div>
                                <?php /*
                                <div class="fb-comment">
                                    <?php echo do_shortcode('[fbcomments  width="100%" count="off" num="3" countmsg="wonderful comments!"]');?>
                                </div>
                                */ ?>
                                <ul class="page-selection">
                                    <li class="page-next"><?php next_post_link('%link', __('Next &rarr;')); ?></li>
                                    <li class="page-prev"><?php previous_post_link('%link', __('&larr; Prev')); ?></li>
                                    <li class="clearfix"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="right-sidebar col-lg-3 col-md-3 col-xs-12 col-sm-12">
                            <?php dynamic_sidebar('right-sidebar') ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="related-news">
                <div class="container">
                    <h4><?php echo __('Related posts') ?></h4>
                    <div class="row">
                        <?php
                        $args = array(
                            'showposts'	=> 6,
                            'post_type' => 'post',
                            'post__not_in' => array($post->ID)
                        );

                        $my_query = null;
                        $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) :
                            while ($my_query->have_posts()) : $my_query->the_post();
                                $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), false);
                                ?>
                                <div class="col-lg-4 col-sm-6 col-xs-12 related-item">
                                    <a href="<?php echo get_the_permalink()?>">
                                        <div class="related-img">
                                            <img src="<?php echo esc_url($img[0])?>"/>
                                        </div>
                                        <div class="related-info">
                                            <div class="related-title">
                                                <?php echo get_the_title()?>
                                            </div>
                                            <div class="related-date">
                                                <?php echo get_the_date();?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php
endwhile;
endif;
?>

<?php
get_footer();
?>
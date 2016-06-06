<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 22/04/2015
 * Time: 17:45
 */
get_header();
while ( have_posts() ) : the_post();
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), FALSE);
?>
    <section class="page-top-img parallax-window" style="background-image: url('<?php echo $image[0] ?>')">
        <img src="<?php echo $image[0] ?>" alt=""/>
    </section>
    <section class="page-wrapper">
        <div class="container">
            <?php if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumbs">', '</p>');
            } ?>
        </div>
        <div class="container">
            <h1 class="row txt-title page-title">
                <?php echo get_the_title() ?>
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="page-content col-xs-12 col-sm-9">
                    <?php echo get_the_content();?>
                </div>
                <div class="right-sidebar col-xs-12 col-sm-3">
                    <?php dynamic_sidebar('right-sidebar')?>
                </div>
            </div>
        </div>
    </section>
<?php
endwhile;
get_footer();
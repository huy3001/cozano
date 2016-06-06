<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section id="primary" class="search-result-wrapper">
    <div class="container">
        <div class="search-result-heading">
            <h1 class="txt-title"><?php echo __('Search result','sutunam') ?></h1>
            <?php if (have_posts()) : ?>
                <h2><?php printf(__('Results for: %s','sutunam'), get_search_query()); ?></h2>
            <?php else: ?>
                <h2><?php echo __("There's no matched result for ",'sutunam') . get_search_query() ?></h2>
            <?php endif ?>
        </div><!-- search-result-heading -->
    </div>
    <div class="container">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'search'); ?>
                <?php endwhile; ?>

                <?php
                the_posts_pagination(array(
                    'prev_text' => __('Previous page', 'twentyfifteen'),
                    'next_text' => __('Next page', 'twentyfifteen'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyfifteen') . ' </span>',
                ));
                ?>
            <?php endif ?>
        </div>
        <div class="right-sidebar col-xs-12 col-sm-3 col-lg-3 col-md-3">
            <?php dynamic_sidebar('right-sidebar') ?>
        </div>
    </div>
</section><!-- .content-area -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<?php include(TEMPLATEPATH . '/left-content.php'); ?>
<div class="right-content">
    <div class="container">
        <section id="primary" class="search-result-wrapper">
            <div class="row">
                <div class="search-result-heading">
                    <!--<h1 class="txt-title"><?php echo __('Search result', 'sutunam') ?></h1>-->
                    <?php if (have_posts()) : ?>
                        <h1><?php printf(__('Results for: %s', 'sutunam'), get_search_query()); ?></h1>
                    <?php else: ?>
                        <h1><?php echo __("There's no matched result for ", 'sutunam') . get_search_query() ?></h1>
                    <?php endif ?>
                </div>
                <!-- search-result-heading -->
            </div>

            <div class="row">
                <div class="search-result-content">
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
            </div>
        </section><!-- .content-area -->
    </div>
</div>
<?php get_footer(); ?>

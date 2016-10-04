<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="archive tax-product_cat term-t-shirts term-14 woocommerce woocommerce-page">
    <?php include(TEMPLATEPATH . '/left-content.php'); ?>
    <div class="right-content">
        <div id="container">
            <section id="primary" class="search-result-wrapper">
                <div class="row">
                    <div class="search-result-heading">
                        <h1 class="txt-title"><?php echo __('Search result', 'sutunam') ?></h1>                        
                        <?php if (have_posts()) : ?>
                            <h2><?php printf(__('Results for: %s', 'sutunam'), get_search_query()); ?></h2>
                            <div class="search-count">
                                <?php
                                global $wp_query;
                                echo $wp_query->found_posts.' results found.';
                                ?>
                            </div>
                        <?php else: ?>
                            <h2><?php echo __("There's no matched result for ", 'sutunam') . get_search_query() ?></h2>
                        <?php endif ?>
                    </div>
                    <!-- search-result-heading -->
                </div>

            </section><!-- .content-area -->

            <div id="content" role="main" class="search-result-content">
                <?php if (have_posts()) : ?>
                    <ul id="product-category" class="products">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('content', 'search'); ?>
                        <?php endwhile; ?>
                    </ul>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

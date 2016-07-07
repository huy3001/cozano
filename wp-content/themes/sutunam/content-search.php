<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="result-block">
    <header class="entry-header">
        <div class="img-wrapper">
            <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"
                 width="100%"/>
        </div>
        <?php the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>
    </header><!-- .entry-header -->
</article><!-- #post-## -->

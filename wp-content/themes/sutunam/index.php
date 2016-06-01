<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 22/04/2015
 * Time: 17:44
 * This theme was developed by Phucct, Sutunam
 */
?>
<?php get_header(); ?>

    <div class="content">
        <section id="main-content">
            <?php if (have_posts()) : while (have_posts()) :the_post(); ?>
                <?php get_template_part('content', get_post_format())?>
            <?php endwhile; ?>
            <?php sutunam_pagination(); ?>
            <?php else: ?>
                <?php get_template_part('content','none'); ?>
            <?php endif; ?>
        </section>
        <section id="sidebar">
            <?php get_sidebar()?>
        </section>
    </div>

<?php get_footer(); ?>
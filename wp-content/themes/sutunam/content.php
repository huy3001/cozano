<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 22/04/2015
 * Time: 17:46
 */?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
    <?php if(!is_single() && has_post_thumbnail()): ?>
    <h1><?php get_the_title()?></h1>
    <div class="entry-thumbnail">
        <?php sutunam_thumbnail('thumbnail')?>
        <div class="timestamp">
            <div class="date"><?php echo get_the_date('d') ?></div>
            <div class="month"><?php echo get_the_date('M') ?></div>
        </div>
        <div class="year"><?php echo get_the_date('Y') ?></div>
    </div>
    <?php endif; ?>
    <header class="entry-header">
        <?php sutunam_entry_header();?>
        <?php sutunam_entry_meta();?>
    </header>
    <div class="entry-content">
        <?php sutunam_entry_content(); ?>
    </div>
</article>
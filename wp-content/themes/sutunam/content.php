<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 22/04/2015
 * Time: 17:46
 */?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
    <?php if(!is_single() && has_post_thumbnail()): ?>
    <div class="entry-thumbnail">
        <?php sutunam_thumbnail('thumbnail')?>
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
<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 22/04/2015
 * Time: 17:45
 * This template to display footer
 */
?>
<?php $jk_options = get_option('redux_demo');
if (!isset($jk_options['copy_text'])) {
    $copy_text = '© Copyright 2015 by Phucct. All rights reserved.';
} else
    $copy_text = $jk_options['copy_text'];
?>
<div class="newsletter-footer col-lg-3 col-md-12">
    <div class="newsletter">
        <?php echo  do_shortcode('[contact-form-7 id="845" title="new-contact-us-footer" html_class="use-floating-validation-tip"]') ?>
    </div>
</div>
<footer id="footer">
    <div class="container">
        <div class="footer-menu">
            <?php dynamic_sidebar('footer-sidebar');?>
        </div>
    </div>
    <div class="container social-block">
        <?php if($jk_options['face_link']):?>
            <a href="<?php echo $jk_options['face_link']?>">
                <i class="facebook"></i>
            </a>
        <?php endif;?>
        <?php if($jk_options['twit_link']):?>
            <a href="<?php echo $jk_options['twit_link']?>">
                <i class="twitter"></i>
            </a>
        <?php endif;?>
        <?php if($jk_options['youtube_link']):?>
            <a href="<?php echo $jk_options['youtube_link']?>">
                <i class="youtube"></i>
            </a>
        <?php endif;?>
        <?php if($jk_options['gmail_link']):?>
            <a href="<?php echo $jk_options['gmail_link']?>">
                <i class="gmail"></i>
            </a>
        <?php endif;?>
        <?php if($jk_options['instagram_link']):?>
            <a href="<?php echo $jk_options['instagram_link']?>">
                <i class="instergram"></i>
            </a>
        <?php endif;?>
        <?php if($jk_options['pinterest_link']):?>
            <a href="<?php echo $jk_options['pinterest_link']?>">
                <i class="pinterest"></i>
            </a>
        <?php endif;?>
        <?php if($jk_options['google_link']):?>
            <a href="<?php echo $jk_options['google_link']?>">
                <i class="google"></i>
            </a>
        <?php endif;?>
        <?php if($jk_options['linkin_link']):?>
            <a href="<?php echo $jk_options['linkin_link']?>">
                <i class="linkin"></i>
            </a>
        <?php endif;?>
        <?php if($jk_options['tumblr_link']):?>
            <a href="<?php echo $jk_options['tumblr_link']?>">
                <i class="tumblr"></i>
            </a>
        <?php endif;?>
    </div>
    <div class="container payment-block">
        <a class="payment-method mastercard" href="">Mastercard</a>
        <a class="payment-method visa" href="">Visa</a>
        <a class="payment-method paypal" href="">Paypal</a>
    </div>
    <div class="copyright container">
        <div class="copy-title"><?php echo $copy_text;?></div>
    </div>
</footer>
</div> <!-- end right-content -->
</div> <!-- end #container -->
</div> <!-- end #wrapper -->
<a href="#" class="cd-top cd-is-visible">Top</a>
<?php wp_footer(); ?>
</body> <!-- end body -->
</html> <!-- end html -->


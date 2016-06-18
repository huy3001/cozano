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
<div class="newsletter-footer">
	<div class="container">
		<div class="newsletter">
			<p><?php echo __('Receive our newsletter', 'sutunam') ?></p>
			<?php echo  do_shortcode('[contact-form-7 id="286" title="new-contact-us-footer" html_class="use-floating-validation-tip"]') ?>
		</div>
	</div>
</div>
<footer id="footer">
	<div class="container">
		<div class="footer-menu">
			<?php dynamic_sidebar('footer-sidebar');?>
		</div>
		<div class="social-block">
			<?php if($jk_options['face_link']):?>
				<a href="<?php echo $jk_options['face_link']?>">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
			<?php endif;?>
			<?php if($jk_options['twit_link']):?>
				<a href="<?php echo $jk_options['twit_link']?>">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
			<?php endif;?>
			<?php if($jk_options['youtube_link']):?>
				<a href="<?php echo $jk_options['youtube_link']?>">
					<i class="fa fa-youtube" aria-hidden="true"></i>
				</a>
			<?php endif;?>
			<?php if($jk_options['gmail_link']):?>
				<a href="<?php echo $jk_options['gmail_link']?>">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</a>
			<?php endif;?>
			<?php if($jk_options['instagram_link']):?>
				<a href="<?php echo $jk_options['instagram_link']?>">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			<?php endif;?>
			<?php if($jk_options['pinterest_link']):?>
				<a href="<?php echo $jk_options['pinterest_link']?>">
					<i class="fa fa-pinterest" aria-hidden="true"></i>
				</a>
			<?php endif;?>
			<?php if($jk_options['google_link']):?>
				<a href="<?php echo $jk_options['google_link']?>">
					<i class="fa fa-google-plus-official" aria-hidden="true"></i>
				</a>
			<?php endif;?>
			<?php if($jk_options['linkin_link']):?>
				<a href="<?php echo $jk_options['linkin_link']?>">
					<i class="fa fa-linkedin" aria-hidden="true"></i>
				</a>
			<?php endif;?>
			<?php if($jk_options['tumblr_link']):?>
				<a href="<?php echo $jk_options['tumblr_link']?>">
					<i class="fa fa-tumblr" aria-hidden="true"></i>
				</a>
			<?php endif;?>
		</div>
		<div class="payment-block">
			<a class="payment-method mastercard" href="">Mastercard</a>
			<a class="payment-method visa" href="">Visa</a>
			<a class="payment-method paypal" href="">Paypal</a>
		</div>
		<div class="copyright">
			<div class="copy-title"><?php echo $copy_text;?></div>
		</div>
	</div>
</footer>
</div> <!-- end right-content -->
</div> <!-- end #container -->
</div> <!-- end #wrapper -->
<a href="#" class="back-top"><?php echo __('Back top', 'sutunam') ?></a>
<?php wp_footer(); ?>
</body> <!-- end body -->
</html> <!-- end html -->


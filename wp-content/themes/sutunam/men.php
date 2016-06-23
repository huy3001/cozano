<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 23/09/2015
 * Time: 10:47
 * Template Name: Men Page
 */
get_header(); ?>
<?php
$jk_options = get_option('redux_demo');
?>
<div class="left-content">
    <?php sutunam_menu('left-menu'); ?>
    <div class="login">
        <?php if (is_user_logged_in()) { ?>
            <a class="login-button" href="<?php echo wp_logout_url(home_url()); ?>">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span><?php echo __('logout', 'sutunam') ?></span>
            </a>
        <?php } else { ?>
            <a class="login-button show-login" id="show-login" href="#">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span><?php echo __('login', 'sutunam') ?></span>
            </a>
        <?php } ?>
    </div>
</div>
<div class="right-content">
	<div class="container">
		<div class="row">
			<div class="men-option content-block">
				<img src="<?php echo $jk_options['men_img_option_1']['url'] ?>" alt="" />
				<div class="content-block-body">
					<?php echo $jk_options['men_desc_option_1']?>
					<a href="<?php echo $jk_options['men_url_option_1']?>" target="_self">
						<span>shopping</span>
					</a>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="men-option content-block">
                <img src="<?php echo $jk_options['men_img_option_2']['url'] ?>" alt="" />
                <div class="content-block-body">
                    <?php echo $jk_options['men_desc_option_2']?>
                    <a href="<?php echo $jk_options['men_url_option_2']?>" target="_self">
                        <span>shopping</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="men-option content-block">
                <img src="<?php echo $jk_options['men_img_option_3']['url'] ?>" alt="" />
                <div class="content-block-body">
                    <?php echo $jk_options['men_desc_option_3']?>
                    <a href="<?php echo $jk_options['men_url_option_3']?>" target="_self">
                        <span>shopping</span>
                    </a>
                </div>
            </div>
        </div>
	</div>
    <?php get_footer(); ?>

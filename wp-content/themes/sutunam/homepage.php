<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 23/09/2015
 * Time: 10:47
 * Template Name: Homepage
 */
get_header(); ?>
<?php
$jk_options = get_option('redux_demo');
?>
<?php include (TEMPLATEPATH . '/left-content.php'); ?>
<div class="right-content">
	<div class="container">
		<div class="row">
			<aside class="upsbar">
				<ul class="upsbar-list">
					<?php if($jk_options['overview_content']):?>
						<li class="upsbar-item">
							<a class="upsbar-link" href="<?php echo $jk_options['overview_url'] ?>" target="_self">
								<?php echo $jk_options['overview_content'] ?>
							</a>
						</li>
					<?php endif;?>
					<?php if($jk_options['overview_content_2']):?>
						<li class="upsbar-item">
							<a class="upsbar-link" href="<?php echo $jk_options['overview_url_2'] ?>" target="_self">
								<?php echo $jk_options['overview_content_2'] ?>
							</a>
						</li>
					<?php endif;?>
					<?php if($jk_options['overview_content_3']):?>
						<li class="upsbar-item">
							<a class="upsbar-link" href="<?php echo $jk_options['overview_url_3'] ?>" target="_self">
								<?php echo $jk_options['overview_content_3'] ?>
							</a>
						</li>
					<?php endif;?>
				</ul>
                <?php sutunam_menu('top-menu'); ?>
			</aside>
		</div>
		<div class="row">
            <?php if($jk_options['men_img']['url']): ?>
			<div class="men-block content-block">
                <div class="content-block-img">
                    <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['men_img']['url'] ?>" alt="" />
                    <?php
                    $men_img_tablet = wp_get_attachment_image_src($jk_options['men_img']['id'],'medium')[0];
                    $men_img_mobile = wp_get_attachment_image_src($jk_options['men_img']['id'],'thumbnail')[0];
                    ?>
                    <img class="visible-sm" src="<?php echo $men_img_tablet ?>" alt="" />
                    <img class="visible-xs" src="<?php echo $men_img_mobile ?>" alt="" />
                </div>
				<div class="content-block-body <?php echo $jk_options['men_button_position'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['men_desc']?>
                    </div>
                    <?php if($jk_options['men_url'] && $jk_options['men_button_title']): ?>
					<a href="<?php echo $jk_options['men_url']?>" target="_self">
						<span><?php echo $jk_options['men_button_title']?></span>
					</a>
                    <?php endif; ?>
				</div>
			</div>
            <?php endif; ?>
		</div>
		<div class="row">
            <?php if($jk_options['women_img']['url']): ?>
			<div class="women-block content-block">
                <div class="content-block-img">
                    <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['women_img']['url'] ?>" alt="" />
                    <?php
                    $women_img_tablet = wp_get_attachment_image_src($jk_options['women_img']['id'],'medium')[0];
                    $women_img_mobile = wp_get_attachment_image_src($jk_options['women_img']['id'],'thumbnail')[0];
                    ?>
                    <img class="visible-sm" src="<?php echo $women_img_tablet ?>" alt="" />
                    <img class="visible-xs" src="<?php echo $women_img_mobile ?>" alt="" />
                </div>
				<div class="content-block-body <?php echo $jk_options['women_button_position'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['women_desc']?>
                    </div>
                    <?php if($jk_options['women_url'] && $jk_options['women_button_title']): ?>
					<a href="<?php echo $jk_options['women_url']?>" target="_self">
						<span><?php echo $jk_options['women_button_title']?></span>
					</a>
                    <?php endif; ?>
				</div>
			</div>
            <?php endif; ?>
		</div>
		<div class="row">
            <?php if($jk_options['shoes_img']['url']): ?>
			<div class="shoes-block content-block">
                <div class="content-block-img">
				    <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['shoes_img']['url'] ?>" alt="" />
                    <?php
                    $shoes_img_tablet = wp_get_attachment_image_src($jk_options['shoes_img']['id'],'medium')[0];
                    $shoes_img_mobile = wp_get_attachment_image_src($jk_options['shoes_img']['id'],'thumbnail')[0];
                    ?>
                    <img class="visible-sm" src="<?php echo $shoes_img_tablet ?>" alt="" />
                    <img class="visible-xs" src="<?php echo $shoes_img_mobile ?>" alt="" />
                </div>
				<div class="content-block-body <?php echo $jk_options['shoes_button_position'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['shoes_desc']?>
                    </div>
                    <?php if($jk_options['shoes_url'] && $jk_options['shoes_button_title']): ?>
					<a href="<?php echo $jk_options['shoes_url']?>" target="_self">
						<span><?php echo $jk_options['shoes_button_title']?></span>
					</a>
                    <?php endif; ?>
				</div>
			</div>
            <?php endif; ?>
		</div>
		<div class="row">
            <?php if($jk_options['bigsize_img']['url']): ?>
			<div class="bigsize-block content-block">
                <div class="content-block-img">
				    <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['bigsize_img']['url'] ?>" alt="" />
                    <?php
                    $bigsize_img_tablet = wp_get_attachment_image_src($jk_options['bigsize_img']['id'],'medium')[0];
                    $bigsize_img_mobile = wp_get_attachment_image_src($jk_options['bigsize_img']['id'],'thumbnail')[0];
                    ?>
                    <img class="visible-sm" src="<?php echo $bigsize_img_tablet ?>" alt="" />
                    <img class="visible-xs" src="<?php echo $bigsize_img_mobile ?>" alt="" />
				</div>
                <div class="content-block-body <?php echo $jk_options['bigsize_button_position'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['bigsize_desc']?>
                    </div>
                    <?php if($jk_options['bigsize_url'] && $jk_options['bigsize_button_title']): ?>
					<a href="<?php echo $jk_options['bigsize_url']?>" target="_self">
						<span><?php echo $jk_options['bigsize_button_title']?></span>
					</a>
                    <?php endif; ?>
				</div>
			</div>
            <?php endif; ?>
		</div>
		<div class="row">
            <?php if($jk_options['touch_img']['url']): ?>
			<div class="touch-block content-block">
                <div class="content-block-img">
                    <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['touch_img']['url'] ?>" alt="" />
                    <?php
                    $touch_img_tablet = wp_get_attachment_image_src($jk_options['touch_img']['id'],'medium')[0];
                    $touch_img_mobile = wp_get_attachment_image_src($jk_options['touch_img']['id'],'thumbnail')[0];
                    ?>
                    <img class="visible-sm" src="<?php echo $touch_img_tablet ?>" alt="" />
                    <img class="visible-xs" src="<?php echo $touch_img_mobile ?>" alt="" />
                </div>
				<div class="content-block-body <?php echo $jk_options['touch_button_position'];?>">
                    <div class="content-block-info">
                        <?php echo $jk_options['touch_desc']?>
                    </div>
                    <?php if($jk_options['touch_url'] && $jk_options['touch_button_title']): ?>
					<a href="<?php echo $jk_options['touch_url']?>" target="_self">
						<span><?php echo $jk_options['touch_button_title']?></span>
					</a>
                    <?php endif; ?>
				</div>
			</div>
            <?php endif; ?>
		</div>

        <!-- Promotion block -->
        <div class="row">
            <div class="promotion-block content-block">
                <?php if($jk_options['promotion_img_1']['url'] && $jk_options['promotion_url_1']): ?>
                    <a href="<?php echo $jk_options['promotion_url_1']?>" target="_self">
                        <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['promotion_img_1']['url'] ?>" alt="" />
                        <?php
                        $promotion_img_tablet_1 = wp_get_attachment_image_src($jk_options['promotion_img_1']['id'],'medium')[0];
                        $promotion_img_mobile_1 = wp_get_attachment_image_src($jk_options['promotion_img_1']['id'],'thumbnail')[0];
                        ?>
                        <img class="visible-sm" src="<?php echo $promotion_img_tablet_1 ?>" alt="" />
                        <img class="visible-xs" src="<?php echo $promotion_img_mobile_1 ?>" alt="" />
                    </a>
                <?php endif; ?>
                <?php if($jk_options['promotion_img_2']['url'] && $jk_options['promotion_url_2']): ?>
                    <a href="<?php echo $jk_options['promotion_url_2']?>" target="_self">
                        <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['promotion_img_2']['url'] ?>" alt="" />
                        <?php
                        $promotion_img_tablet_2 = wp_get_attachment_image_src($jk_options['promotion_img_2']['id'],'medium')[0];
                        $promotion_img_mobile_2 = wp_get_attachment_image_src($jk_options['promotion_img_2']['id'],'thumbnail')[0];
                        ?>
                        <img class="visible-sm" src="<?php echo $promotion_img_tablet_2 ?>" alt="" />
                        <img class="visible-xs" src="<?php echo $promotion_img_mobile_2 ?>" alt="" />
                    </a>
                <?php endif; ?>
                <?php if($jk_options['promotion_img_3']['url'] && $jk_options['promotion_url_3']): ?>
                    <a href="<?php echo $jk_options['promotion_url_3']?>" target="_self">
                        <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['promotion_img_3']['url'] ?>" alt="" />
                        <?php
                        $promotion_img_tablet_3 = wp_get_attachment_image_src($jk_options['promotion_img_3']['id'],'medium')[0];
                        $promotion_img_mobile_3 = wp_get_attachment_image_src($jk_options['promotion_img_3']['id'],'thumbnail')[0];
                        ?>
                        <img class="visible-sm" src="<?php echo $promotion_img_tablet_3 ?>" alt="" />
                        <img class="visible-xs" src="<?php echo $promotion_img_mobile_3 ?>" alt="" />
                    </a>
                <?php endif; ?>
                <?php if($jk_options['promotion_img_4']['url'] && $jk_options['promotion_url_4']): ?>
                    <a href="<?php echo $jk_options['promotion_url_4']?>" target="_self">
                        <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['promotion_img_4']['url'] ?>" alt="" />
                        <?php
                        $promotion_img_tablet_4 = wp_get_attachment_image_src($jk_options['promotion_img_4']['id'],'medium')[0];
                        $promotion_img_mobile_4 = wp_get_attachment_image_src($jk_options['promotion_img_4']['id'],'thumbnail')[0];
                        ?>
                        <img class="visible-sm" src="<?php echo $promotion_img_tablet_4 ?>" alt="" />
                        <img class="visible-xs" src="<?php echo $promotion_img_mobile_4 ?>" alt="" />
                    </a>
                <?php endif; ?>
                <?php if($jk_options['promotion_img_5']['url'] && $jk_options['promotion_url_5']): ?>
                    <a href="<?php echo $jk_options['promotion_url_5']?>" target="_self">
                        <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['promotion_img_5']['url'] ?>" alt="" />
                        <?php
                        $promotion_img_tablet_5 = wp_get_attachment_image_src($jk_options['promotion_img_5']['id'],'medium')[0];
                        $promotion_img_mobile_5 = wp_get_attachment_image_src($jk_options['promotion_img_5']['id'],'thumbnail')[0];
                        ?>
                        <img class="visible-sm" src="<?php echo $promotion_img_tablet_5 ?>" alt="" />
                        <img class="visible-xs" src="<?php echo $promotion_img_mobile_5 ?>" alt="" />
                    </a>
                <?php endif; ?>
                <?php if($jk_options['promotion_img_6']['url'] && $jk_options['promotion_url_6']): ?>
                    <a href="<?php echo $jk_options['promotion_url_6']?>" target="_self">
                        <img class="hidden-sm hidden-xs" src="<?php echo $jk_options['promotion_img_6']['url'] ?>" alt="" />
                        <?php
                        $promotion_img_tablet_6 = wp_get_attachment_image_src($jk_options['promotion_img_6']['id'],'medium')[0];
                        $promotion_img_mobile_6 = wp_get_attachment_image_src($jk_options['promotion_img_6']['id'],'thumbnail')[0];
                        ?>
                        <img class="visible-sm" src="<?php echo $promotion_img_tablet_6 ?>" alt="" />
                        <img class="visible-xs" src="<?php echo $promotion_img_mobile_6 ?>" alt="" />
                    </a>
                <?php endif; ?>
            </div>
        </div>
	</div>
	<?php get_footer(); ?>

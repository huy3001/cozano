<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 23/09/2015
 * Time: 10:47
 * Template Name: Women Page
 */
get_header(); ?>
<?php
$jk_options = get_option('redux_demo');
?>
<div class="left-content">
    <?php sutunam_menu('left-menu'); ?>
</div>
<div class="right-content">
	<div class="container">
		<div class="row">
			<div class="women-option content-block">
				<img src="<?php echo $jk_options['women_img_option_1']['url'] ?>" alt="" />
				<div class="content-block-body">
					<?php echo $jk_options['women_desc_option_1']?>
					<a href="<?php echo $jk_options['women_url_option_1']?>" target="_self">
						<span>shopping</span>
					</a>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="women-option content-block">
                <img src="<?php echo $jk_options['women_img_option_2']['url'] ?>" alt="" />
                <div class="content-block-body">
                    <?php echo $jk_options['women_desc_option_2']?>
                    <a href="<?php echo $jk_options['women_url_option_2']?>" target="_self">
                        <span>shopping</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="women-option content-block">
                <img src="<?php echo $jk_options['women_img_option_3']['url'] ?>" alt="" />
                <div class="content-block-body">
                    <?php echo $jk_options['women_desc_option_3']?>
                    <a href="<?php echo $jk_options['women_url_option_3']?>" target="_self">
                        <span>shopping</span>
                    </a>
                </div>
            </div>
        </div>
	</div>
    <?php get_footer(); ?>

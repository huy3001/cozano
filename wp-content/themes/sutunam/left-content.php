<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 30/06/2016
 * Time: 16:51
 */
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
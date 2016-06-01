<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 22/04/2015
 * Time: 17:45
 * This template to display footer
 */
?>
<footer id="footer">
    <div class="copyright">
        © <?php echo date('Y'); ?> <?php bloginfo( 'sitename' ); ?>. <?php _e('All rights reserved', 'sutunam'); ?>. <?php _e('This theme is developed by Phucct', 'sutunam'); ?>
    </div>
</footer>
</div> <!-- end #container -->
<?php wp_footer(); ?>
</body> <!-- end body -->
</html> <!-- end html -->

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
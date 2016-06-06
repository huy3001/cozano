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
    $copy_text = '© Copyright 2015 by Sutunam. All rights reserved.';
} else
    $copy_text = $jk_options['copy_text'];
?>
<footer id="footer" style="background: url(<?php echo $jk_options['footer_background']['url'] ?>) no-repeat">
    <div class="container">
        <div class="logo-footer col-lg-3">
            <h2><a href="<?php echo home_url(); ?>"> <img src="<?php echo esc_url($jk_options['logo_img']['url']); ?>" width="200" height="60" alt="<?php echo get_site_url()?>" /><?php echo __('About us') ?></a></h2>
        </div>
        <div class="col-lg-3 col-md-6">
        <?php dynamic_sidebar('footer-sidebar');?>
        </div>
        <div class="contact-footer col-lg-3 col-md-6">
            <h3><?php echo __('Contact us','sutunam')?></h3>
            <h4><?php echo __('New Viet Dairy - Head Office:', 'sutunam')?></h4>
            <p><i class="fa fa-map-marker"></i><?php echo $jk_options['address']?></p>
            <p><i class="fa fa-phone"></i><?php echo $jk_options['telephone']?></p>
            <p><i class="fa fa-envelope"></i><?php echo $jk_options['e_add']?></p>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
            <script>
                var map;
                function initialize() {
                    var mapOptions = {
                        zoom: 13,
                        center: new google.maps.LatLng(<?php echo $jk_options['g_lat']?>, <?php echo $jk_options['g_long']?>),
                        map: map
                    };
                    var map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);
                    var contentString = '<div id="marker-content"><?php echo $jk_options['address'];?></div>';

                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var iconBase = '<?php echo get_template_directory_uri(); ?>/images/';
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(<?php echo $jk_options['g_lat']?>, <?php echo $jk_options['g_long']?>),
                        map: map,
                        icon: iconBase + 'maker.png'
                    });
                    infowindow.open(map, marker);

                }

                google.maps.event.addDomListener(window, 'load', setTimeout(initialize, 300));
            </script>
                    <div id="map-canvas">
                    </div>

        </div>
        <div class="newsletter-footer col-lg-3 col-md-12">
            <div class="newsletter">
                <?php if(get_locale() == 'en_US'):?>
                    <?php echo  do_shortcode('[contact-form-7 id="845" title="new-contact-us-footer" html_class="use-floating-validation-tip"]') ?>
                <?php else: ?>
                    <?php echo do_shortcode('[contact-form-7 id="17" title="contact-us-footer" html_class="use-floating-validation-tip"]')?>
                <?php endif; ?>
            </div>
            <div class="latest-news">
                <h3><?php echo __('Latest news','sutunam') ?></h3>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );
                query_posts($args);
                if ( have_posts() ) :
                    while (have_posts()) : the_post();
                ?>
                        <h4><a href="<?php echo esc_url(get_permalink());?>"><?php echo get_the_title()?></a></h4>
                        <div class="date-post"><?php echo get_the_date()?></div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
    <div class="copyright container">
        <div class="copy-title"><?php echo $copy_text;?></div>
        <div class="copy-desc"><?php echo $jk_options['copy_desc'];?></div>
    </div>
</footer>
</div> <!-- end #container -->
</div> <!-- End #wrapper -->
<a href="#0" class="cd-top cd-is-visible">Top</a>
<?php wp_footer(); ?>
</body> <!-- end body -->
</html> <!-- end html -->


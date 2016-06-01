<?php

/*-----------------------------------------------------------------------------------*/
/* Shortcodes
/*-----------------------------------------------------------------------------------*/

add_action('media_buttons','add_sc_select',11);
function add_sc_select(){
    //global $shortcode_tags;
    /* ------------------------------------- */
    /* enter names of shortcode to exclude bellow */
    /* ------------------------------------- */
    $quote = '[Statistics classes="" awards="" trainers="" members=""][/Statistics]';
    $exclude = array("wp_caption", "embed");
    echo '&nbsp;<select id="sc_select"><option>Shortcode</option>';

    $shortcodes_list .= '<option value="[Alert type=\'\' ]content[/Alert]">Alert</option>';
    $shortcodes_list .= '<option value="[Columns col=\'\' ]content[/Columns]">Columns</option>';
    $shortcodes_list .= '<option value="[Button title=\'\' url=\'\'][/Button]">Button</option>';
    $shortcodes_list .= '<option value="[CustomButton title=\'\' url=\'\' size=\'\' type=\'\' colortype=\'\' ][/CustomButton]">CustomButton</option>';
    $shortcodes_list .= '<option value="[LatestTweet username=\'\'][/LatestTweet]">Latest Tweet</option>';
    $shortcodes_list .= '<option value="[Separator title=\'\' id=\'\']content[/Separator]">Separator</option>';
    $shortcodes_list .= '<option value="[Classes][/Classes]">Classes</option>';
    $shortcodes_list .= '<option value="[Application][/Application]">Application</option>';
    $shortcodes_list .= '<option value="[Timetable][/Timetable]">Timetable</option>';
    $shortcodes_list .= '<option value="[Parallexblock main_title=\'\' sub_title= \'\' button1=\'\' button1_link=\'\'][/Parallexblock]">ParallexBlock With one button</option>';
    $shortcodes_list .= '<option value="[Parallexblock main_title=\'\' sub_title= \'\' button1=\'\' button1_link=\'\' button2=\'\' button2_link=\'\'][/Parallexblock]">ParallexBlock With two button</option>';
    $shortcodes_list .= '<option value="[contact][/contact]">Contact</option>';
    $shortcodes_list .= '<option value="[Trainers][/Trainers]">Trainers</option>';
    $shortcodes_list .= '<option value="[Testimonials][/Testimonials]">Testimonials</option>';
    $shortcodes_list .= '<option value="[Slider][/Slider]">Slider</option>';
    $shortcodes_list .= '<option value="[Statistics classes=\'\' awards=\'\' trainers=\'\' members=\'\'][/Statistics]">Statistics</option>';
    $shortcodes_list .= '<option value="[Pricetable title=\'\'][/Pricetable]">Pricetable</option>';


    echo $shortcodes_list;
    echo '</select>';
}
add_action('admin_head', 'button_js');
function button_js() {
    echo '<script type="text/javascript">
        jQuery(document).ready(function(){
           jQuery("#sc_select").change(function() {
                          send_to_editor(jQuery("#sc_select :selected").val());
                          return false;
                });
        });
        </script>';
}



/*-----------------------------------------------------------------------------------*/
/* slider
/*-----------------------------------------------------------------------------------*/

function jk_slider_info( $atts, $content = null ) {
    $jk_options = get_option('redux_demo');
    $hurcules_opt = $jk_options;
    $slides = $hurcules_opt['main-slides'];
//print_r($hurcules_opt);
    $jk_att = shortcode_atts(array(
        'btntitle' => 'read more',
    ), $atts);
    $sliderhtml = '  <!-- SLIDER -->
        <div class="slider" data-tesla-plugin="slider" data-tesla-item=".slide" data-tesla-next=".slide-right" data-tesla-prev=".slide-left" data-tesla-container=".slide-wrapper">
            <ul class="slide-wrapper">';
    foreach ($slides as $slide) {

	$sliderhtml .= '<li class="slide">
                    <div class="slide-text">';
        
        if (!empty($slide['description'])) {
            $sliderhtml .= '<h2>' . __($slide['description']) . '</h2>';
        }
        $sliderhtml .= '<a href="' . esc_url(!empty($slide['url']) ? $slide['url'] : "#") . '" class="link-to-content">' . __($slide['btntitle']);
        $sliderhtml .= '</div>
                    <img data-bttrlazyloading-xs-src="' . esc_url($slide['image']) . '" alt="slide"  class="bttrlazyloading" data-bttrlazyloading-animation="fadeIn"></a>
                </li>';

    }
    $sliderhtml .= '</ul>

            <ul class="counting" data-tesla-plugin="bullets">';
    foreach ($slides as $slide) {
        $sliderhtml .= '<li class=""></li>';
    }
    $sliderhtml .= '</ul>
        </div>
        <!-- SLIDER -->';
    return $sliderhtml;
}
add_shortcode( 'Slider', 'jk_slider_info' );

/*-----------------------------------------------------------------------------------*/
/* slider
/*-----------------------------------------------------------------------------------*/

function jk_small_slider_info( $atts, $content = null ) {
    $jk_options = get_option('redux_demo');
    $hurcules_opt = $jk_options;
    $slides = $hurcules_opt['small-slides'];
    $sliderhtml = ' <div class="container">
        <div class="below_slider">
            <div class="zoom_img">
            <img />
            </div>
            <ul class="gallery">';
    foreach ($slides as $slide) {
        $sliderhtml .= '<li class="thumb">';
        $sliderhtml .= '
                    <div class="img-wrapper"><img data-bttrlazyloading-xs-src="' . esc_url($slide['image']) . '"  class="bttrlazyloading" data-bttrlazyloading-animation="fadeIn" data-bttrlazyloading-xs-width="auto"
    data-bttrlazyloading-xs-height="105"><p></p></div>
                </li>';
    }
    $sliderhtml .= '</ul>
        </div>
        </div>';
    return $sliderhtml;
}
add_shortcode( 'Small Slider', 'jk_small_slider_info' );

/*-----------------------------------------------------------------------------------*/
/* Schedule
/*-----------------------------------------------------------------------------------*/

function jk_Schedule_info( $atts, $content = null ) {
    $jk_options = get_option('redux_demo');
    $hurcules_opt = $jk_options;
    if (!isset($hurcules_opt['icon_1']) || empty($hurcules_opt['icon_1'])) {
        $hurcules_opt['icon_1'] = 'fa-asterisk';
    }
    if (!isset($hurcules_opt['icon_2']) || empty($hurcules_opt['icon_2'])) {
        $hurcules_opt['icon_2'] = 'fa-group';
    }
    if (!isset($hurcules_opt['icon_3']) || empty($hurcules_opt['icon_3'])) {
        $hurcules_opt['icon_3'] = 'fa-credit-card';
    }
    if (!isset($hurcules_opt['icon_4']) || empty($hurcules_opt['icon_4'])) {
        $hurcules_opt['icon_4'] = 'fa-calendar';
    }


    $Schedulehtml = '<!-- TIME -->
			        <div class="container" id="schedule">
			            <div class="place-info d-bg-c">
			                <div class="row">
			                    <div class="col-md-3">
			                        <div class="place-info-box">
			                        <div class="place-info-icon"><i class="fa '.$hurcules_opt['icon_1'].'"></i></div>
			                            <h5>'.__($hurcules_opt['title_1']).'</h5>
			                            <h6>'.__($hurcules_opt['sub_title_1']).'</h6>
			                            <p>'.__($hurcules_opt['desc_1']).'</p>
			                        </div>
			                    </div>
			                    <div class="col-md-3">
			                        <div class="place-info-box">
			                        <div class="place-info-icon"><i class="fa '.$hurcules_opt['icon_2'].'"></i></div>
			                            <h5>'.__($hurcules_opt['title_2']).'</h5>
			                            <h6>'.__($hurcules_opt['sub_title_2']).'</h6>
			                            <p>'.__($hurcules_opt['desc_2']).'</p>
			                        </div>
			                    </div>
			                    <div class="col-md-3">
			                        <div class="place-info-box">
			                        <div class="place-info-icon"><i class="fa '.$hurcules_opt['icon_3'].'"></i></div>
			                            <h5>'.__($hurcules_opt['title_3']).'</h5>
			                            <h6>'.__($hurcules_opt['sub_title_3']).'</h6>
			                            <p>'.__($hurcules_opt['desc_3']).'</p>
			                        </div>
			                    </div>
			                    <div class="col-md-3">
			                        <div class="place-info-box place-info-box-last">
			                        <div class="place-info-icon"><i class="fa '.$hurcules_opt['icon_4'].'"></i></div>
			                            <h5>'.__($hurcules_opt['title_4']).'</h5>
			                            <h6>'.__($hurcules_opt['sub_title_4']).'</h6>
			                            '.__($hurcules_opt['desc_4']).'
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
        	<!-- TIME -->';
    return $Schedulehtml;
}
add_shortcode( 'Schedule', 'jk_Schedule_info' );

/*-----------------------------------------------------------------------------------*/
/* Program
/*-----------------------------------------------------------------------------------*/

function jk_program_info($atts, $content = NULL) {
    $jk_options = get_option('redux_demo');
    $hurcules_opt = $jk_options;

    $Schedulehtml = '  <!-- PROGRAM -->
        <div class="program">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                    <img src="'.esc_attr( $hurcules_opt['pro_img']['url']).'" alt="program" />
                    </div>
                    <div class="col-md-5">
                    <h4>'. $hurcules_opt['class_title'].'</h4>
                    <p>'. $hurcules_opt['class_desc'].'</p>
                    <br/>';
    if (!empty($hurcules_opt['pro_days']) && !empty($hurcules_opt['pro_timing'])) {
        $Schedulehtml .= '            <h4>' . __('Program') . '</h4>
                    <ul>';
        if (!empty($hurcules_opt['pro_days'])) {
            $Schedulehtml .= ' <li><i class="d-text-c fa fa-calendar"></i>' . __($hurcules_opt['pro_days']) . '</li>';
        }
        if (!empty($hurcules_opt['pro_timing']))
            $Schedulehtml .= ' <li><i class="d-text-c fa fa-clock-o"></i> ' . __($hurcules_opt['pro_timing']) . '</li>
                    </ul>
                    <br/>';
    }
    if (!empty($hurcules_opt['trainer_name'])) {
        $Schedulehtml .= '<h4>' . __('Trainer') . '</h4>
                    <ul>
                        <li><i class="d-text-c fa fa-calendar"></i>'. __($hurcules_opt['trainer_name']).'</li>
                    </ul>
                    <br/><br/>';
    }
    if (!empty($hurcules_opt['timetable_link'])) {
        $Schedulehtml .= '<a href="' . esc_url($hurcules_opt['timetable_link']) . '" class="button-1 d-bg-c d-text-c-h d-border-c bold">timetable</a> &nbsp; &nbsp; &nbsp;';
    }
    if (!empty($hurcules_opt['class_link'])) {
        $Schedulehtml .= '<a href="' . $hurcules_opt['class_link'] . '" class="button-2 d-border-c bold">classes</a>';
    }
    $Schedulehtml .= '</div>
                </div>
            </div>
        </div>
        <!-- PROGRAM -->';
    return $Schedulehtml;
}
add_shortcode( 'Program', 'jk_program_info' );



/*-----------------------------------------------------------------------------------*/
/* seprator
/*-----------------------------------------------------------------------------------*/

function jk_seprator_info($atts, $content = NULL) {
    $jk_att = shortcode_atts(array(
        'title' => 'Get in touch',
        'id' => 'contact',
        'link' => '#'
    ), $atts);
    if (empty($jk_att['id'])) $jk_att['id'] = 'id';
    $html = ' <!-- SEPARATOR INFO -->
		        <div class="separator-info" id="'.esc_attr($jk_att['id']).'">
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-6">';
    if ($jk_att['link'] != '#') {
        $html .= '<a href="' . esc_url($jk_att['link']) . '"><h3 class="d-border-c">' . __($jk_att['title']) . '</h3></a>';
    }
    else {
        if ($jk_att['id'] == 'contact') {
            $html .= '<h1 class="d-border-c" id="h1-contact">' . __($jk_att['title']) . '</h1>';
        }
        else {
            $html .= '<h3 class="d-border-c">' . __($jk_att['title']) . '</h3>';
        }
    }
    $html .= '</div>
		                    <div class="col-md-4">
		                        <p>'.__($content).'</p>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!-- SEPARATOR INFO -->';

    return $html;
}
add_shortcode( 'Separator', 'jk_seprator_info' );




/*-----------------------------------------------------------------------------------*/
/* trainer
/*-----------------------------------------------------------------------------------*/

function jk_trainer_info( $atts, $content = null ) {


    $trainers = '<div class="lessons trainers">
		            <div class="container">
                <div class="owl-carousel" id="trainers-carousel">';


    $args = array(
        'post_type' => 'trainer',
        'posts_per_page' => 9
    );
    $query = new WP_Query($args);
    // The Query
    $the_query = new WP_Query($args);
    $trainer_data = '';

    // The Loop
    if ($the_query->have_posts()) {

        while ($the_query->have_posts()) {
            $the_query->the_post();
            $post_id = get_the_ID();
            $url = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), FALSE);

            $trainer_data .= '<div class="item">
		                        <div class="trainer">
		                            <div class="trainer-class d-border-c d-text-c">'.__(get_the_title( )).'</div>
		                            <div class="trainer-hover">
		                                <h5 class="d-text-c">'.__(get_post_meta( $post_id, 'trainer_name',true)).'</h5>
		                                <ul>
		                                    <li><i class="d-text-c fa fa-trophy"></i>'.__(get_post_meta( $post_id, 'trainer_awards',true)).'</li>
		                                    <li><i class="d-text-c fa fa-bolt"></i>'.__(get_post_meta( $post_id, 'trainer_exp',true)).'</li>
		                                </ul>                                
		                            </div>
		                            <img src="'.esc_url($url['0']).'" alt="'.esc_attr(get_the_title( )).'" />
		                        </div>
		                    </div>';

        }
    }
    /* Restore original Post Data */
    wp_reset_postdata();

    return $trainers . $trainer_data . ' </div>
            </div>
        </div>';
}
add_shortcode( 'Trainers', 'jk_trainer_info' );


/*-----------------------------------------------------------------------------------*/
/* class
/*-----------------------------------------------------------------------------------*/
function jk_class_info($atts, $content = NULL) {


    $trainers = '<div class="lessons" data-tesla-plugin="carousel" data-tesla-container=".tesla-carousel-items" data-tesla-item=">div" data-tesla-rotate="false" data-tesla-autoplay="false" data-tesla-hide-effect="false">
		            <div class="lessons-arrows">
		                <span class="next"><i class="fa fa-chevron-right"></i></span>
		                <span class="prev disabled"><i class="fa fa-chevron-left"></i></span>
		            </div>
		            <div class="container">
		            <div class="row tesla-carousel-items">';
    $args = array(
        'post_type' => 'class'
    );
    $query = new WP_Query($args);
    // The Query
    $the_query = new WP_Query($args);
    $trainer_data = '';

    // The Loop
    if ($the_query->have_posts()) {

        while ($the_query->have_posts()) {
            $the_query->the_post();
            $post_id = get_the_ID();
            $url = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), FALSE);

            $trainer_data .= '
                    <div class="col-md-4 col-xs-12 ">
                        <div class="lesson d-bg-c-h">
                        <img src="'.esc_url($url['0']).'" alt="'.esc_attr(get_the_title()).'"/>
		                            <h4>'.__(get_the_title( )).'</h4>
		                            
		                                <p>'.__(get_post_meta( $post_id, 'class_time',true)).'</p>
		                                
		                            
		                        </div>
		                    </div>';

        }
    }
    /* Restore original Post Data */
    wp_reset_postdata();

    return $trainers . $trainer_data . ' </div>
            </div>
        </div>';
}
add_shortcode( 'Classes', 'jk_class_info' );


/*-----------------------------------------------------------------------------------*/
/* timetable
/*-----------------------------------------------------------------------------------*/
function jk_timetable_info($atts, $content = NULL) {


    $timetablerow1 = '
			<!-- TIMETABLE -->
			<div class="timetable">
	            <div class="container">

	                <ul class="timetable-head">
	                    <li>&nbsp;</li>
	                    <li>'.__('Monday').'</li>
                        <li>'.__('Tuesday').'</li>
                        <li>'.__('Wednesday').'</li>
                        <li>'.__('Thursday').'</li>
                        <li>'.__('Friday').'</li>
                        <li>'.__('Saturday').'</li>
                        <li>'.__('Sunday').'</li>
	                </ul>';
    $args = array(
        'post_type' => 'timetable',
        'order' => 'ASC'
    );
    $query = new WP_Query($args);
    // The Query
    $the_query = new WP_Query($args);
    $trainer_data = '';
    $count = 1;
    // The Loop
    if ($the_query->have_posts()) {

        while ($the_query->have_posts()) {
            $the_query->the_post();
            $post_id = get_the_ID();
            //$url = wp_get_attachment_image_src( get_post_thumbnail_id($post_id) ,false);
            $monday = get_post_meta($post_id, 'monday', TRUE);
            $tuesday = get_post_meta($post_id, 'tuesday', TRUE);
            $wednesday = get_post_meta($post_id, 'wednesday', TRUE);
            $thursday = get_post_meta($post_id, 'thursday', TRUE);
            $friday = get_post_meta($post_id, 'friday', TRUE);
            $saturday = get_post_meta($post_id, 'saturday', TRUE);
            $sunday = get_post_meta($post_id, 'sunday', TRUE);

            if (empty($monday)) {
                $cssclass1 = '';
            }
            else {
                $cssclass1 = 'd-bg-c timetable-text';
            }
            if (empty($tuesday)) {
                $cssclass2 = '';
            }
            else {
                $cssclass2 = 'd-bg-c timetable-text';
            }
            if (empty($wednesday)) {
                $cssclass3 = '';
            }
            else {
                $cssclass3 = 'd-bg-c timetable-text';
            }
            if (empty($thursday)) {
                $cssclass4 = '';
            }
            else {
                $cssclass4 = 'd-bg-c timetable-text';
            }
            if (empty($friday)) {
                $cssclass5 = '';
            }
            else {
                $cssclass5 = 'd-bg-c timetable-text';
            }
            if (empty($saturday)) {
                $cssclass6 = '';
            }
            else {
                $cssclass6 = 'd-bg-c timetable-text';
            }
            if (empty($sunday)) {
                $cssclass7 = '';
            }
            else {
                $cssclass7 = 'd-bg-c timetable-text';
            }

            if ($count % 2 != 0)
                $timetablerow1 .= '
                    <ul class="timetable-1">
                    <li>'.get_the_title( ).'</li>

                    <li class="'.esc_attr($cssclass1).'">'.__(get_post_meta( $post_id, 'monday',true)).'</li>
                    <li class="'.esc_attr($cssclass2).'">'.__(get_post_meta( $post_id, 'tuesday',true)).'</li>
                    <li class="'.esc_attr($cssclass3).'">'.__(get_post_meta( $post_id, 'wednesday',true)).'</li>
                    <li class="'.esc_attr($cssclass4).'">'.__(get_post_meta( $post_id, 'thursday',true)).'</li>
                    <li class="'.esc_attr($cssclass5).'">'.__(get_post_meta( $post_id, 'friday',true)).'</li>
                    <li class="'.esc_attr($cssclass6).'">'.__(get_post_meta( $post_id, 'saturday',true)).'</li>
                    <li class="'.esc_attr($cssclass7).'">'.__(get_post_meta( $post_id, 'sunday',true)).'</li>
                </ul>';
            else
                $timetablerow1 .= '
                    <ul class="timetable-2">
                    <li>'.get_the_title( ).'</li>

                    <li class="'.esc_attr($cssclass1).'">'.__(get_post_meta( $post_id, 'monday',true)).'</li>
                    <li class="'.esc_attr($cssclass2).'">'.__(get_post_meta( $post_id, 'tuesday',true)).'</li>
                    <li class="'.esc_attr($cssclass3).'">'.__(get_post_meta( $post_id, 'wednesday',true)).'</li>
                    <li class="'.esc_attr($cssclass4).'">'.__(get_post_meta( $post_id, 'thursday',true)).'</li>
                    <li class="'.esc_attr($cssclass5).'">'.__(get_post_meta( $post_id, 'friday',true)).'</li>
                    <li class="'.esc_attr($cssclass6).'">'.__(get_post_meta( $post_id, 'saturday',true)).'</li>
                    <li class="' . esc_attr($cssclass7) . '">' . __(get_post_meta($post_id, 'sunday', TRUE)) . '</li>
                </ul>';

            $count++;
        }
    }
    /* Restore original Post Data */
    wp_reset_postdata();

    return $timetablerow1 . '   </div>
        </div>
        <!-- TIMETABLE -->';
}
add_shortcode( 'Timetable', 'jk_timetable_info' );



/*-----------------------------------------------------------------------------------*/
/* statistic
/*-----------------------------------------------------------------------------------*/
function jk_statistic_info($atts, $content = NULL) {
    $jk_att = shortcode_atts(array(
        'classes' => '25',
        'awards' => '14',
        'trainers' => '17',
        'members' => '56'
    ), $atts);
    return ' <!-- STATISTICS -->
        <div class="statistics">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="statistic d-border-c">
                            <i class="fa fa-th"></i>
                            <h5><span class="d-text-c">'.__($jk_att['classes']).'</span>classes</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="statistic d-border-c">
                            <i class="fa fa-trophy"></i>
                            <h5><span class="d-text-c">'.__($jk_att['awards']).'</span>awards</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="statistic d-border-c">
                            <i class="fa fa-group"></i>
                            <h5><span class="d-text-c">'.__($jk_att['trainers']).'</span>trainers</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="statistic d-border-c">
                            <i class="fa fa-user"></i>
                            <h5><span class="d-text-c">'.__($jk_att['members']).'</span>members</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- STATISTICS -->';
}
add_shortcode( 'Statistics', 'jk_statistic_info' );

/*-----------------------------------------------------------------------------------*/
/* Application
/*-----------------------------------------------------------------------------------*/
function jk_app_info($atts, $content = NULL) {
    $jk_options = get_option('redux_demo');
    $hurcules_opt = $jk_options;

    $apphtml = '  <!-- APPLICATION -->
        <div class="parallax parallax-3 application">
            <div class="black-bg padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>'.$hurcules_opt['app_title_text'].'</h2>
                            
                            <ul>
                                <li><i class="d-text-c fa fa-bolt"></i>'.$hurcules_opt['app_desc_1'].'</li>
                                <li><i class="d-text-c fa fa-gift"></i>'.$hurcules_opt['app_desc_2'].'</li>
                                <li><i class="d-text-c fa fa-bell-o"></i>'.$hurcules_opt['app_desc_3'].'</li>
                                <li><i class="d-text-c fa fa-calendar"></i>'.$hurcules_opt['app_desc_4'].'</li>
                            </ul>
                            <br/><br/>';
    if (!empty($hurcules_opt['down_btn_link'])) {
        $apphtml .= '  <a href="' . esc_url($hurcules_opt['down_btn_link']) . '" class="button-1 d-bg-c d-border-c bold">' . __(($hurcules_opt['app_btn_text'])) . '</a>';
    }
    $apphtml .= '</div>
                        <div class="col-md-8"><img src="'.esc_url($hurcules_opt['app_img']['url']).'" alt="aplication" /></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- APPLICATION -->';
    return $apphtml;
}
add_shortcode( 'Application', 'jk_app_info' );

/*-----------------------------------------------------------------------------------*/
/* Parallexblock
/*-----------------------------------------------------------------------------------*/
function jk_pb_info($atts, $content = NULL) {
    $jk_att = shortcode_atts(array(
        'main_title' => 'NEW CARDIO CLASSES THIS SUMMER. PAY NOW AND GET 25% DISCOUNT',
        'sub_title' => 'If you like our theme don’t forget to rate it with 5 stars',
        'button1' => 'read more',
        'button2' => '',
        'button1_link' => '#',
        'button2_link' => '#'
    ), $atts);
    $button;

    if (!empty($jk_att['button1'])) {
        $button = '<a href="' . esc_url($jk_att['button1_link']) . '" class="button-1 d-bg-c d-text-c-h d-border-c bold">' . __($jk_att['button1']) . '</a>';
    }
    if (!empty($jk_att['button2'])) {
        $button .= '&nbsp; &nbsp; &nbsp; <a href="' . esc_url($jk_att['button2_link']) . '" class="button-3 d-bg-c-h d-border-c-h bold">' . __($jk_att['button2']) . '</a>';
    }
    return '  <!-- PARALLAX -->
		        <div class="parallax parallax-4">
		            <div class="black-bg padding">
		                <div class="container">
		                    <h2>'.__($jk_att['main_title']).'</h2>
		                    <h4>'.__($jk_att['sub_title']).'</h4>
		                    <br/>'.$button.'

		    
		                </div>
		            </div>
		        </div>
		        <!-- PARALLAX -->';
}
add_shortcode( 'Parallexblock', 'jk_pb_info' );

/*-----------------------------------------------------------------------------------*/
/* Blog
/*-----------------------------------------------------------------------------------*/
function jk_blog_info($atts, $content = NULL) {
    $posts = '';
    $posts = ' <!-- BLOG xxxx-->
	        <div class="lessons blog-section">
	            <div class="lessons-arrows">
	                <span class="next"><i class="fa fa-chevron-right"></i></span>
	                <span class="prev disabled"><i class="fa fa-chevron-left"></i></span>
	            </div>
	            <div class="container">
	        <div class="owl-carousel" id="lessons-carousel">';


    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9
    );

    // The Query
    $the_query = new WP_Query($args);


    // The Loop
    if ($the_query->have_posts()) {

        while ($the_query->have_posts()) {
            $the_query->the_post();
            $post_id = get_the_ID();
            $url = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'thumbnail', false);
            if(esc_url($url['0'] == ''))
                $img = '<img class="' . 'lazyOwl' . '" data-src="' . get_template_directory_uri() . '/images/nshape-logo-square.png' . '" alt="' . get_the_title() . '" style="opacity: 0.5; height:165px"/>';
            else
                $img = '<img class="' . 'lazyOwl' . '" data-src="' . esc_url($url['0']) . '" alt="' . get_the_title() . '"/>';
            if(get_the_author() != 'admin')
                $author = '<li>'.__('by').' <a href="'.esc_url(get_permalink()).'">'.__(get_the_author( )).'</a></li>';
            else
                $author = '';
            $posts .= '	<div class="item">
	                        <div class="blog-entry">
	                            <div class="entry-cover">
	                                <div class="postImage">'.$img.'</div>
	                                <div class="timestams">
                                        <div class="date">'.get_the_date("d").'</div>
                                        <div class="month">'.get_the_date("m").'</div>
                                    </div>
	                            </div>
	                            <div class="entry-header">
	                                <h2><a class="d-text-c-h" href="'.esc_url(get_permalink()).'">'.__(get_the_title( )).'</a></h2>
	                                <ul>
	                                    '.$author.'
	                                    <li>'.get_the_date( ).'</li>
	                                </ul>
	                            </div>
	                            <div class="entry-content">
                                                <p>'.__(get_the_excerpt()).'</p>
                                            </div>
                                            <a href="'.get_the_permalink().'">'.__('Read More >>').'</a>
	                        </div>
	                    </div>';

        }
    }
    wp_reset_postdata();
    return $posts .= '</div>
            </div>
        </div>
        <!-- blog -->';

}
add_shortcode( 'Blogposts', 'jk_blog_info' );

/*-----------------------------------------------------------------------------------*/
/* contact
/*-----------------------------------------------------------------------------------*/
function jk_contact_info($atts, $content = NULL) {
    //response generation function
    $jk_options = get_option('redux_demo');
    $hurcules_opt = $jk_options;
    wp_enqueue_script('gmap', 'http://maps.google.com/maps/api/js?sensor=false&amp;language=en');
    wp_enqueue_script('gmap3', get_template_directory_uri() . '/js/gmap3.js', array('jquery'), '3.1.1', TRUE);

    $url = get_template_directory_uri();

    if(get_locale() == 'en_US')
        $contact = do_shortcode("[contact-form-7 id='3875' title='Contact map']");
    else
        $contact = do_shortcode("[contact-form-7 id='3611' title='Contact map']");
    $form = '';
    $form .= '  <!-- contact -->
		        <div class="map-location">
		            <div class="g-contact">
                        <div class="row">
                             <div class="container">'
        . $contact .
        '</div>
                        </div>
		            </div>
				<div id="g-map"></div>
           
        		</div>
		        <!-- contact --><p>
		        ';


    return $form;
}
add_shortcode( 'contact', 'jk_contact_info' );



/*-----------------------------------------------------------------------------------*/
/* Testimonials
/*-----------------------------------------------------------------------------------*/
function jk_testimonials_info($atts, $content = NULL) {
    $args = array(
        'post_type' => 'tesstimonial',
        'order' => 'ASC'
    );
    $query = new WP_Query($args);
    // The Query
    $the_query = new WP_Query($args);
    $trainer_data = '';
    $count = 1;
    // The Loop
    $testimonials = '';
    $testimonials .= '<!-- TESTIMONIALS -->
			        <div class="parallax parallax-5 testimonials">
			            <div class="black-bg padding">
			                <div class="container">
			                    <div class="testimonials-icon"><i class="d-bg-c fa fa-quote-right"></i></div>
			                    <div class="slider" data-tesla-plugin="slider" data-tesla-item=".slide" data-tesla-next=".slide-right" data-tesla-prev=".slide-left" data-tesla-container=".slide-wrapper">
			                        <ul class="slide-wrapper">';
    if ($the_query->have_posts()) {

        while ($the_query->have_posts()) {
            $the_query->the_post();
            $post_id = get_the_ID();

            $testimonials .= '
                            <li class="slide">
                                <p>'.__(get_the_content( )).'</p>
                                <h5>'.get_the_title(  ).'<span class="d-text-c">'.__(get_post_meta( $post_id, 'class_dur',true)).'</span></h5>
                            </li>';
            $count++;
        }
    }

    $testimonials .= '</ul><ul class="counting" data-tesla-plugin="bullets">';

    for ($i = 1; $i < $count; $i++) {
        # code... '
        $testimonials .= '<li class=""></li>';

    }
    $testimonials .= '
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- TESTIMONIALS -->';

    return $testimonials;

}
add_shortcode( 'Testimonials', 'jk_testimonials_info' );

/*-----------------------------------------------------------------------------------*/
/*tweet*/
/*-----------------------------------------------------------------------------------*/
function jk_tweet_info($atts, $content = NULL) {

    $jk_att = shortcode_atts(array(
        'username' => 'jkthemes'
    ), $atts);
    $url = "https://twitter.com/" . $jk_att['username'];
    return '  <!-- PARALLAX -->

        <div class="parallax parallax-2">
            <div class="black-bg padding">
                <div class="container">
                    <h4>LATEST TWEETS</h4>

                    <div class="twitter_widget" data-user="'.esc_attr($jk_att['username']).'" data-posts="1"></div>

                    <a href='.esc_url( $url).' class="button-1 d-bg-c d-text-c-h d-border-c bold">follow us</a>
                </div>
            </div>
        </div>
        <!-- PARALLAX -->';
}
add_shortcode( 'LatestTweet', 'jk_tweet_info' );


/*-----------------------------------------------------------------------------------*/
/*columns*/
/*-----------------------------------------------------------------------------------*/
function jk_col_info($atts, $content = NULL) {
    $jk_att = shortcode_atts(array(
        'col' => '2',

    ), $atts);
    return '<!-- columns-->
        		<div class="col-md-'.esc_attr($jk_att['col']).'">'.do_shortcode( $content ).'
           
        		</div>
        	<!-- columns -->';
}
add_shortcode( 'Columns', 'jk_col_info' );
/*-----------------------------------------------------------------------------------*/
/*button*/
/*-----------------------------------------------------------------------------------*/
function jk_button_info($atts, $content = NULL) {
    $jk_att = shortcode_atts(array(
        'title' => 'button',
        'url' => '#'
    ), $atts);
    return '<!-- Button -->
       			<a href="'.esc_url($jk_att['url']).'" class="button-1 d-bg-c d-text-c-h d-border-c bold">'.__($jk_att['title']).'</a>
        	<!-- Button -->';
}
add_shortcode( 'Button', 'jk_button_info' );

/*-----------------------------------------------------------------------------------*/
/*custom button*/
/*-----------------------------------------------------------------------------------*/
function jk_cbutton_info($atts, $content = NULL) {
    $jk_att = shortcode_atts(array(
        'title' => 'button',
        'url' => '#',
        'size' => 'small',
        'type' => '',
        'colortype' => ''
    ), $atts);
    if (isset($jk_att['type'])) {
        $button_type = 'button-type' . $jk_att['type'];
    }
    return '<!-- Button -->
       			<a href="'.esc_url($jk_att['url']).'" class="button button-'.$jk_att['size'].' '.$button_type.' button-m'.$jk_att['colortype'].'">'.__($jk_att['title']).'</a>
        	<!-- Button -->';
}
add_shortcode( 'CustomButton', 'jk_cbutton_info' );

/*-----------------------------------------------------------------------------------*/
/*custom button*/
/*-----------------------------------------------------------------------------------*/
function jk_alert_info($atts, $content = NULL) {
    $jk_att = shortcode_atts(array(

        'type' => ''
    ), $atts);

    return '<!-- alert -->
       			<div class="alert-box alert-'.$jk_att['type'].' alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <p>'.__($content).'</p>
                    </div>
        	<!-- alert -->';
}
add_shortcode( 'Alert', 'jk_alert_info' );

/*-----------------------------------------------------------------------------------*/
/*price table*/
/*-----------------------------------------------------------------------------------*/


function jk_pricing_table_info($atts) {
    global $post;

    extract(shortcode_atts(array(
        'pricing_id' => '0',
        'title' => 'Pricing Tables'
    ), $atts));

    $args = array(
        'post_type' => 'pricing_packages'
    );
    $query = new WP_Query($args);
    // The Query
    $the_query = new WP_Query($args);
    $trainer_data = '';



    $html = '<h1 class="styled">'.$title.'</h1>
                <div class="row">';
// The Loop
    if ($the_query->have_posts()) {

        while ($the_query->have_posts()) {
            $the_query->the_post();
            $post_id = get_the_id();


            $package_price = get_post_meta($post_id, "_package_price", TRUE);
            $package_buy_link = get_post_meta($post_id, "_package_buy_link", TRUE);

            $package_features = get_post_meta($post_id, "_package_features", TRUE);
            $package_features = ($package_features == '') ? array() : json_decode($package_features);

            $html .= '<div class="col-md-4">
                        <div class="pricing-table">
                            <div class="pricing-table-name">' . __(get_the_title()). '</div>
                            <ul class="pricing-table-stuff">';
            foreach ($package_features as $package_feature) {

                $html .= '<li>' . __($package_feature) . '</li>';
            }

            $html .='</ul>
                    <div class="pricing-table-price"><span>$</span>' .__( $package_price ). '</div>
                    <p>per month</p>
                    <p><a href="'.__($package_buy_link).'" class="button button-medium d-bg-c">Buy now</a></p>
                </div>
            </div>';


        }}
    $html .= '</div>';

    return  $html;
}
add_shortcode("Pricetable", "jk_pricing_table_info");

/*-----------------------------------------------------------------------------------*/
/* trainer
/*-----------------------------------------------------------------------------------*/

function jk_member_info( $atts, $content = null ) {


    $posts = '';
    $posts = ' <!-- BLOGaaaa -->
	        <div class="lessons testimonials-section">
	            <div class="lessons-arrows">
	                <span class="next"><i class="fa fa-chevron-right"></i></span>
	                <span class="prev disabled"><i class="fa fa-chevron-left"></i></span>
	            </div>
	            <div class="container">
	        <div class="owl-carousel" id="testimonials-carousel">';


    if(get_locale() == 'en_US'){
        $args = array(
            'category_name' => 'testimonials',
            'posts_per_page' => 9
        );
    }else{
        $args = array(
            'category_name' => 'hoi vien',
            'posts_per_page' => 9
        );
    }

    // The Query
    $the_query = new WP_Query( $args );


    // The Loop
    if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $post_id = get_the_ID();
            $url = wp_get_attachment_image_src( get_post_thumbnail_id($post_id),'thumbnail' ,false);
            if(esc_url($url['0'] == ''))
                $img = '<img class="' . 'lazyOwl' . '" data-src="' . get_template_directory_uri() . '/images/nshape-logo-square.png' . '" alt="' . get_the_title() . '" style="opacity: 0.5; height:165px"/>';
            else
                $img = '<img class="' . 'lazyOwl' . '" data-src="' . esc_url($url['0']) . '" alt="' . get_the_title() . '"/>';
            if(get_the_author() != 'admin')
                $author = '<li>'.__('by').' <a href="'.esc_url(get_permalink()).'">'.__(get_the_author( )).'</a></li>';
            else
                $author = '';
            $posts .= '	<div class="item">
	                        <div class="blog-entry">
	                            <div class="entry-cover">
                                    <div class="postImage">'.$img.'</div>
	                                <div class="timestams">
                                        <div class="date">'.get_the_date("d").'</div>
                                        <div class="month">'.get_the_date("m").'</div>
                                    </div>
	                            </div>
	                            <div class="entry-header">
	                                <h2><a class="d-text-c-h" href="'.esc_url(get_permalink()).'">'.__(get_the_title( )).'</a></h2>
	                                <ul>'.$author.'<li>'.get_the_date( ).'</li>
	                                </ul>
	                            </div>
	                            <div class="entry-content">
                                                <p>'.__(substr(get_the_excerpt(), 0 , 105)).'</p>
                                            </div>
                                            <a href="'.get_the_permalink().'">'.__('Read More >>').'</a>
	                        </div>
	                    </div>';

        }
    }
    wp_reset_postdata();
    return $posts .= '</div>
            </div>
        </div>
        <!-- blog -->';
}
add_shortcode( 'Members', 'jk_member_info' );



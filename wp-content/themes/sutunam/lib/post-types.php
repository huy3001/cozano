<?php 
/*-----------------------------------------------------------------------------------*/
/* Register Trainers post type
/*-----------------------------------------------------------------------------------*/
$t_labels = array(
			'name'               => _x( 'Trainers', 'post type general name', 'hercules' ),
			'singular_name'      => _x( 'Trainer', 'post type singular name', 'hercules' ),
			'menu_name'          => _x( 'Trainers', 'admin menu', 'hercules' ),
			'name_admin_bar'     => _x( 'Trainer', 'add new on admin bar', 'hercules' ),
			'add_new'            => _x( 'Add New', 'Trainer', 'hercules' ),
			'add_new_item'       => __( 'Add New Trainer', 'hercules' ),
			'new_item'           => __( 'New Trainer', 'hercules' ),
			'edit_item'          => __( 'Edit Trainer', 'hercules' ),
			'view_item'          => __( 'View Trainer', 'hercules' ),
			'all_items'          => __( 'All Trainers', 'hercules' ),
			'search_items'       => __( 'Search Trainers', 'hercules' ),
			'parent_item_colon'  => __( 'Parent Trainers:', 'hercules' ),
			'not_found'          => __( 'No trainers found.', 'hercules' ),
			'not_found_in_trash' => __( 'No trainers found in Trash.', 'hercules' ),
		);

		$t_args = array(
			'labels'             => $t_labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'trainer' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title','thumbnail','editor')
		);

register_post_type( 'trainer', $t_args );

/*-----------------------------------------------------------------------------------*/
/* Register Trainers post type
/*-----------------------------------------------------------------------------------*/
$t_labels = array(
			'name'               => _x( 'Tesstimonials', 'post type general name', 'hercules' ),
			'singular_name'      => _x( 'Tesstimonial', 'post type singular name', 'hercules' ),
			'menu_name'          => _x( 'Tesstimonials', 'admin menu', 'hercules' ),
			'name_admin_bar'     => _x( 'Tesstimonial', 'add new on admin bar', 'hercules' ),
			'add_new'            => _x( 'Add New', 'Tesstimonial', 'hercules' ),
			'add_new_item'       => __( 'Add New Tesstimonial', 'hercules' ),
			'new_item'           => __( 'New Tesstimonial', 'hercules' ),
			'edit_item'          => __( 'Edit Tesstimonial', 'hercules' ),
			'view_item'          => __( 'View Tesstimonial', 'hercules' ),
			'all_items'          => __( 'All Tesstimonials', 'hercules' ),
			'search_items'       => __( 'Search Tesstimonials', 'hercules' ),
			'parent_item_colon'  => __( 'Parent Tesstimonials:', 'hercules' ),
			'not_found'          => __( 'No tesstimonials found.', 'hercules' ),
			'not_found_in_trash' => __( 'No tesstimonials found in Trash.', 'hercules' ),
		);

		$t_args = array(
			'labels'             => $t_labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'tesstimonial' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title','editor')
		);

register_post_type( 'tesstimonial', $t_args );


/*-----------------------------------------------------------------------------------*/
/* Register Trainers post type
/*-----------------------------------------------------------------------------------*/
$t_labels = array(
			'name'               => _x( 'Gallery', 'post type general name', 'hercules' ),
			'singular_name'      => _x( 'Gallery', 'post type singular name', 'hercules' ),
			'menu_name'          => _x( 'Gallery', 'admin menu', 'hercules' ),
			'name_admin_bar'     => _x( 'Gallery', 'add new on admin bar', 'hercules' ),
			'add_new'            => _x( 'Add New', 'Gallery', 'hercules' ),
			'add_new_item'       => __( 'Add New Gallery', 'hercules' ),
			'new_item'           => __( 'New Gallery', 'hercules' ),
			'edit_item'          => __( 'Edit Gallery', 'hercules' ),
			'view_item'          => __( 'View Gallery', 'hercules' ),
			'all_items'          => __( 'All Gallery', 'hercules' ),
			'search_items'       => __( 'Search Gallerys', 'hercules' ),
			'parent_item_colon'  => __( 'Parent Gallerys:', 'hercules' ),
			'not_found'          => __( 'No Gallerys found.', 'hercules' ),
			'not_found_in_trash' => __( 'No Gallerys found in Trash.', 'hercules' ),
		);

		$t_args = array(
			'labels'             => $t_labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'gallery' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title')
		);

register_post_type( 'gallery', $t_args );


/*-----------------------------------------------------------------------------------*/
/* Register Partner Post type
/*-----------------------------------------------------------------------------------*/
$t_labels = array(
    'name'               => _x( 'Partners', 'post type general name', 'sutunam' ),
    'singular_name'      => _x( 'Partner', 'post type singular name', 'sutunam' ),
    'menu_name'          => _x( 'Partners', 'admin menu', 'hercules' ),
    'name_admin_bar'     => _x( 'Partner', 'add new on admin bar', 'sutunam' ),
    'add_new'            => _x( 'Add New', 'Partner', 'sutunam' ),
    'add_new_item'       => __( 'Add New Partner', 'sutunam' ),
    'new_item'           => __( 'New Partner', 'sutunam' ),
    'edit_item'          => __( 'Edit Partner', 'sutunam' ),
    'view_item'          => __( 'View Partner', 'sutunam' ),
    'all_items'          => __( 'All Partners', 'sutunam' ),
    'search_items'       => __( 'Search Partners', 'sutunam' ),
    'parent_item_colon'  => __( 'Parent Partners:', 'sutunam' ),
    'not_found'          => __( 'No Partner found.', 'sutunam' ),
    'not_found_in_trash' => __( 'No Partners found in Trash.', 'sutunam' ),
);

$t_args = array(
    'labels'             => $t_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'partner' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title','thumbnail')
);

register_post_type( 'partner', $t_args );

/*-----------------------------------------------------------------------------------*/
/* Trainer and Class meta boxes
/*-----------------------------------------------------------------------------------*/

function jk_add_meta_boxes(){
	add_meta_box(
			'trainer_metabox',
			__( 'trainer Infomation', 'hurcules' ),
			'jk_trainer_meta_box_callback',
			'trainer',
			'normal',
			'high'
		);
	add_meta_box(
			'class_metabox',
			__( 'class Infomation', 'hurcules' ),
			'jk_class_meta_box_callback',
			'class',
			'normal',
			'high'
		);
	add_meta_box(
			'timetable_metabox',
			__( 'Timetable Infomation', 'hurcules' ),
			'jk_timetablerow_meta_box_callback',
			'timetable',
			'normal',
			'high'
		);
	add_meta_box(
			'tesstimonial_metabox',
			__( 'Tesstimonial Infomation', 'hurcules' ),
			'jk_tesstimonial_meta_box_callback',
			'tesstimonial',
			'normal',
			'high'
		);
    add_meta_box(
        'partner_metabox',
        __( 'Partner Infomation', 'sutunam' ),
        'jk_partner_meta_box_callback',
        'partner',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'jk_add_meta_boxes' );
add_action( 'save_post', 	  	  'jk_save_meta_boxes') ;

function jk_trainer_meta_box_callback(){
    global $post;
    wp_nonce_field( 'post_nonce', 'post_nonce' );
    ?>
    <label class="trainer-lbl" for="trainer_name"><?php _e('Name:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="trainer_name" id="trainer_name" placeholder="e.g: Jhon Deo   "  value="<?php echo get_post_meta( $post->ID, 'trainer_name',true); ?>"><br>

    <label class="trainer-lbl" for="trainer_awards"><?php _e('Awards:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="trainer_awards" id="trainer_awards" placeholder="e.g: 7 International Awards" value="<?php echo get_post_meta($post->ID, 'trainer_awards', true) ?>"><br>

    <label class="trainer-lbl" for="trainer_exp"><?php _e('Experience:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="trainer_exp" id="trainer_exp" placeholder="e.g: 5 Years of Experience" value="<?php echo get_post_meta($post->ID, 'trainer_exp', true) ?>"><br>

    <label class="trainer-lbl" for="trainer_desc"><?php _e('Description:', 'hurcules') ?></label>
    <textarea rows="4" cols="33" name="trainer_desc" id="trainer_desc" placeholder="e.g: Desription"><?php echo get_post_meta($post->ID, 'trainer_desc', true) ?></textarea><br>


    <style type="text/css">
        input.input-custom-field{width: 300px;width: 300px;margin-bottom: 15px;margin-top: 15px;}label.trainer-lbl{display:inline-block;min-width: 70px;}
    </style>
<?php
}


function jk_class_meta_box_callback(){
    global $post;
    wp_nonce_field( 'post_nonce', 'post_nonce' );
    ?>
    <label class="class-lbl" for="class_time"><?php _e('Timing:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="class_time" id="class_time" placeholder="e.g: Mon - Wed 10:30 - 14:20 am"  value="<?php echo get_post_meta( $post->ID, 'class_time',true); ?>"><br>

    <label class="class-lbl" for="class_info"><?php _e('Info:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="class_info" id="class_info" placeholder="Put details here" value="<?php echo get_post_meta($post->ID, 'class_info', true) ?>"><br>

    <label class="class-lbl" for="class_desc"><?php _e('Description:', 'hurcules') ?></label>
    <textarea rows="4" cols="33" name="class_desc" id="class_desc" placeholder="e.g: Desription"><?php echo get_post_meta($post->ID, 'class_desc', true) ?></textarea><br>

    <style type="text/css">
        input.input-custom-field{width: 300px;width: 300px;margin-bottom: 15px;margin-top: 15px;}label.class-lbl{display:inline-block;min-width: 70px;}
    </style>
<?php
}
function jk_timetablerow_meta_box_callback(){
    global $post;
    wp_nonce_field( 'post_nonce', 'post_nonce' );
    ?>
    <label class="timetablerow-lbl" for="monday"><?php _e('Monday:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="monday" id="monday" placeholder="e.g: Cardio<span>16:00 - 17:00</span>   "  value="<?php echo get_post_meta( $post->ID, 'monday',true); ?>"><br>

    <label class="timetablerow-lbl" for="tuesday"><?php _e('Tuesday:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="tuesday" id="tuesday" placeholder="e.g: Cardio<span>16:00 - 17:00</span>" value="<?php echo get_post_meta($post->ID, 'tuesday', true) ?>"><br>

    <label class="timetablerow-lbl" for="wednesday"><?php _e('Wednesday:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="wednesday" id="wednesday" placeholder="e.g: Cardio<span>16:00 - 17:00</span>" value="<?php echo get_post_meta($post->ID, 'wednesday', true) ?>"><br>

    <label class="timetablerow-lbl" for="thursday"><?php _e('Thursday:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="thursday" id="thursday" placeholder="e.g: Cardio<span>16:00 - 17:00</span>" value="<?php echo get_post_meta($post->ID, 'thursday', true) ?>"><br>

    <label class="timetablerow-lbl" for="friday"><?php _e('Friday:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="friday" id="friday" placeholder="e.g: Cardio<span>16:00 - 17:00</span>" value="<?php echo get_post_meta($post->ID, 'friday', true) ?>"><br>

    <label class="timetablerow-lbl" for="saturday"><?php _e('Saturday:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="saturday" id="saturday" placeholder="e.g: Cardio<span>16:00 - 17:00</span>" value="<?php echo get_post_meta($post->ID, 'saturday', true) ?>"><br>

    <label class="timetablerow-lbl" for="sunday"><?php _e('Sunday:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="sunday" id="sunday" placeholder="e.g: Cardio<span>16:00 - 17:00</span>" value="<?php echo get_post_meta($post->ID, 'sunday', true) ?>"><br>


    <style type="text/css">
        input.input-custom-field{width: 300px;width: 300px;margin-bottom: 15px;margin-top: 15px;}label.timetablerow-lbl{display:inline-block;min-width: 70px;}
    </style>
<?php
}
function jk_tesstimonial_meta_box_callback(){
    global $post;
    wp_nonce_field( 'post_nonce', 'post_nonce' );
    ?>
    <label class="tesstimonial-lbl" for="class_dur"><?php _e('Class and Duration:', 'hurcules') ?></label>
    <input type="text" class="input-custom-field" name="class_dur" id="class_dur" placeholder="e.g: BOXING, 1 year"  value="<?php echo get_post_meta( $post->ID, 'class_dur',true); ?>"><br>




    <style type="text/css">
        input.input-custom-field{width: 300px;width: 300px;margin-bottom: 15px;margin-top: 15px;}label.tesstimonial-lbl{display:inline-block;min-width: 70px;}
    </style>
<?php
}

function jk_partner_meta_box_callback(){
    global $post;
    wp_nonce_field( 'post_nonce', 'post_nonce' );
    ?>
    <label class="partner-lbl" for="partner_url"><?php _e('Partner Link:', 'sutunam') ?></label>
    <input type="text" class="input-custom-field" name="partner_url" id="partner_url" placeholder="e.g: Partner url"  value="<?php echo get_post_meta( $post->ID, 'partner_url',true); ?>"><br>




    <style type="text/css">
        input.input-custom-field{width: 300px;width: 300px;margin-bottom: 15px;margin-top: 15px;}label.partner-lbl{display:inline-block;min-width: 70px;}
    </style>
<?php
}
/*-----------------------------------------------------------------------------------*/
/* Saving custom file data
/*-----------------------------------------------------------------------------------*/
function jk_save_meta_boxes($post_id){
    if ( get_post_type( $post_id ) ==  'trainer' ){

        if ( ! isset( $_POST['post_nonce'] ) )
            return $post_id;

        if ( ! wp_verify_nonce( $_POST['post_nonce'], 'post_nonce' ) )
            return $post_id;

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
            return;

        if ( ! current_user_can( 'edit_post', $post_id ) )
            return $post_id;

        if(isset($_POST['trainer_name']))
            update_post_meta( $post_id, 'trainer_name', $_POST['trainer_name'] );
        if(isset($_POST['trainer_awards']))
            update_post_meta( $post_id, 'trainer_awards', $_POST['trainer_awards'] );
        if(isset($_POST['trainer_exp']))
            update_post_meta( $post_id, 'trainer_exp', $_POST['trainer_exp'] );
        if(isset($_POST['trainer_desc']))
            update_post_meta( $post_id, 'trainer_desc', $_POST['trainer_desc'] );

    }
    if ( get_post_type( $post_id ) ==  'class' ){

        if ( ! isset( $_POST['post_nonce'] ) )
            return $post_id;

        if ( ! wp_verify_nonce( $_POST['post_nonce'], 'post_nonce' ) )
            return $post_id;

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
            return;

        if ( ! current_user_can( 'edit_post', $post_id ) )
            return $post_id;

        if(isset($_POST['class_time']))
            update_post_meta( $post_id, 'class_time', $_POST['class_time'] );

        if(isset($_POST['class_desc']))
            update_post_meta( $post_id, 'class_desc', $_POST['class_desc'] );

    }
    if ( get_post_type( $post_id ) ==  'timetable' ){

        if ( ! isset( $_POST['post_nonce'] ) )
            return $post_id;

        if ( ! wp_verify_nonce( $_POST['post_nonce'], 'post_nonce' ) )
            return $post_id;

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
            return;

        if ( ! current_user_can( 'edit_post', $post_id ) )
            return $post_id;

        if(isset($_POST['monday']))
            update_post_meta( $post_id, 'monday', $_POST['monday'] );
        if(isset($_POST['tuesday']))
            update_post_meta( $post_id, 'tuesday', $_POST['tuesday'] );

        if(isset($_POST['wednesday']))
            update_post_meta( $post_id, 'wednesday', $_POST['wednesday'] );
        if(isset($_POST['thursday']))
            update_post_meta( $post_id, 'thursday', $_POST['thursday'] );
        if(isset($_POST['friday']))
            update_post_meta( $post_id, 'friday', $_POST['friday'] );
        if(isset($_POST['saturday']))
            update_post_meta( $post_id, 'saturday', $_POST['saturday'] );
        if(isset($_POST['sunday']))
            update_post_meta( $post_id, 'sunday', $_POST['sunday'] );



    }
    if ( get_post_type( $post_id ) ==  'tesstimonial' ){

        if ( ! isset( $_POST['post_nonce'] ) )
            return $post_id;

        if ( ! wp_verify_nonce( $_POST['post_nonce'], 'post_nonce' ) )
            return $post_id;

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
            return;

        if ( ! current_user_can( 'edit_post', $post_id ) )
            return $post_id;

        if(isset($_POST['class_dur']))
            update_post_meta( $post_id, 'class_dur', $_POST['class_dur'] );

    }

    //Add partner by Sutunam
    if(get_post_type($post_id) == 'partner'){
        if ( ! isset( $_POST['post_nonce'] ) )
            return $post_id;

        if ( ! wp_verify_nonce( $_POST['post_nonce'], 'post_nonce' ) )
            return $post_id;

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
            return;

        if ( ! current_user_can( 'edit_post', $post_id ) )
            return $post_id;

        if(isset($_POST['partner_url']))
            update_post_meta( $post_id, 'partner_url', $_POST['partner_url'] );
    }

    return $post_id;
}

/*-----------------------------------------------------------------------------------*/
 /* Registering and saving pricing packages
 /*-----------------------------------------------------------------------------------*/

add_action('init', 'jk_register_cpt_pricing_packages');

function jk_register_cpt_pricing_packages() {

    $labels = array(
        'name' => _x('Pricing Packages', 'pricing_packages'),
        'singular_name' => _x('Pricing Package', 'pricing_packages'),
        'add_new' => _x('Add New', 'pricing_packages'),
        'add_new_item' => _x('Add New Pricing Package', 'pricing_packages'),
        'edit_item' => _x('Edit Pricing Package', 'pricing_packages'),
        'new_item' => _x('New Pricing Package', 'pricing_packages'),
        'view_item' => _x('View Pricing Package', 'pricing_packages'),
        'search_items' => _x('Search Pricing Packages', 'pricing_packages'),
        'not_found' => _x('No Pricing Packages found', 'pricing_packages'),
        'not_found_in_trash' => _x('No Pricing Packages found in Trash', 'pricing_packages'),
        'parent_item_colon' => _x('Parent Pricing Package:', 'pricing_packages'),
        'menu_name' => _x('Pricing Packages', 'pricing_packages'),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Pricing Packages',
        'supports' => array('title', 'editor'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type('pricing_packages', $args);
}

add_action('add_meta_boxes', 'jk_pricing_packages_meta_boxes');

function jk_pricing_packages_meta_boxes() {

    add_meta_box("pricing-package-info", "Pricing Package Info", 'jk_generate_pricing_package_info', "pricing_packages", "normal", "high");
    add_meta_box("pricing-features-info", "Pricing Features", 'jk_generate_pricing_features_info', "pricing_packages", "normal", "high");
}

function jk_generate_pricing_package_info() {
    global $post;

    $package_price = get_post_meta($post->ID, "_package_price", true);
    $package_buy_link = get_post_meta($post->ID, "_package_buy_link", true);

    $html = '<input type="hidden" name="pricing_package_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';

    $html .= '<table class="form-table">';

    $html .= "<tr><th style=''>
                    <label for='Price'>Package Price *</label>
              </th>
              <td>
                    <input name='package_price' id='package_price' type='text' value='$package_price' />
              </td></tr>";

    $html .= "<tr><th style=''>
                    <label for='Buy Now'>Buy Now Link *</label>
              </th>
              <td>
                    <input name='package_buy_link' id='package_buy_link' type='text' value='$package_buy_link' />
              </td></tr>";




    $html .= "</tr>";
    $html .= '</table>';

    echo $html;
}

function jk_generate_pricing_features_info() {

    global $post;

    $package_features = get_post_meta($post->ID, "_package_features", true);
    $package_features = ($package_features == '') ? array() : json_decode($package_features);



    $html = '<table class="form-table">';

    $html .= "<tr><th style=''>
                    <label for='Price'>Add Package Features</label>
              </th>
              <td>
                    <input name='package_feature' id='package_feature' type='text'  />
                    <input type='button' id='add_features' value='Add Features' />
              </td></tr>";

    $html .= "<tr><td>
                    <ul id='package_features_box' name='package_features_box' >";
    foreach ($package_features as $package_feature) {
        $html .= "<li><input type='hidden' name='package_features[]' value='$package_feature' />$package_feature
        <a href='javascript:void(0);'>Delete</a></li>";
    }
    $html .= "</ul>
              </td></tr>";

    $html .= '</table>';

    echo $html;
}

add_action('save_post', 'jk_save_pricing_packages');

function jk_save_pricing_packages($post_id) {

    if (!wp_verify_nonce($_POST['pricing_package_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    if ('pricing_packages' == $_POST['post_type'] && current_user_can('edit_post', $post_id)) {
        $package_price = (isset($_POST['package_price']) ? $_POST['package_price'] : '');
        $package_buy_link = (isset($_POST['package_buy_link']) ? $_POST['package_buy_link'] : '');

        $package_features = (isset($_POST['package_features']) ? $_POST['package_features'] : array());
        $package_features = json_encode($package_features);

        update_post_meta($post_id, "_package_price", $package_price);
        update_post_meta($post_id, "_package_buy_link", $package_buy_link);
        update_post_meta($post_id, "_package_features", $package_features);
    } else {
        return $post_id;
    }
}


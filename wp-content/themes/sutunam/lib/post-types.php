<?php 
/*-----------------------------------------------------------------------------------*/
/* Register Ingredient post type
/*-----------------------------------------------------------------------------------*/
$t_labels = array(
			'name'               => _x( 'Ingredients', 'post type general name', 'sutunam' ),
			'singular_name'      => _x( 'Ingredients', 'post type singular name', 'sutunam' ),
			'menu_name'          => _x( 'Ingredients', 'admin menu', 'sutunam' ),
			'name_admin_bar'     => _x( 'Ingredient', 'add new on admin bar', 'sutunam' ),
			'add_new'            => _x( 'Add New', 'Ingredient', 'sutunam' ),
			'add_new_item'       => __( 'Add New Ingredient', 'sutunam' ),
			'new_item'           => __( 'New Ingredient', 'sutunam' ),
			'edit_item'          => __( 'Edit Ingredient', 'sutunam' ),
			'view_item'          => __( 'View Ingredient', 'sutunam' ),
			'all_items'          => __( 'All Ingredients', 'sutunam' ),
			'search_items'       => __( 'Search Ingredients', 'sutunam' ),
			'parent_item_colon'  => __( 'Parent Ingredients:', 'sutunam' ),
			'not_found'          => __( 'No Ingredients found.', 'sutunam' ),
			'not_found_in_trash' => __( 'No Ingredients found in Trash.', 'sutunam' ),
		);

		$t_args = array(
			'labels'             => $t_labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'ingredient' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title','thumbnail','editor')
		);

register_post_type( 'ingredient', $t_args );

/*-----------------------------------------------------------------------------------*/
/* Register Retailers Supply post type
/*-----------------------------------------------------------------------------------*/
$t_labels = array(
    'name'               => _x( 'Retailers Supply', 'post type general name', 'sutunam' ),
    'singular_name'      => _x( 'Retailers Supply', 'post type singular name', 'sutunam' ),
    'menu_name'          => _x( 'Retailers Supply', 'admin menu', 'sutunam' ),
    'name_admin_bar'     => _x( 'Retailers Supply', 'add new on admin bar', 'sutunam' ),
    'add_new'            => _x( 'Add New', 'Retailer Supply', 'sutunam' ),
    'add_new_item'       => __( 'Add New Retailer Supply', 'sutunam' ),
    'new_item'           => __( 'New Retailer Supply', 'sutunam' ),
    'edit_item'          => __( 'Edit Retailer Supply', 'sutunam' ),
    'view_item'          => __( 'View Retailer Supply', 'sutunam' ),
    'all_items'          => __( 'All Retailers Supply', 'sutunam' ),
    'search_items'       => __( 'Search Retailers Supply', 'sutunam' ),
    'parent_item_colon'  => __( 'Parent Retailers Supply:', 'sutunam' ),
    'not_found'          => __( 'No Retailers Supply found.', 'sutunam' ),
    'not_found_in_trash' => __( 'No Retailers Supply found in Trash.', 'sutunam' ),
);

$t_args = array(
    'labels'             => $t_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'retailer' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title','thumbnail','editor')
);

register_post_type( 'retailer', $t_args );

/*-----------------------------------------------------------------------------------*/
/* Register Food Service post type
/*-----------------------------------------------------------------------------------*/
$t_labels = array(
    'name'               => _x( 'Food Products', 'post type general name', 'sutunam' ),
    'singular_name'      => _x( 'Food Products', 'post type singular name', 'sutunam' ),
    'menu_name'          => _x( 'Food Service', 'admin menu', 'sutunam' ),
    'name_admin_bar'     => _x( 'Food Products', 'add new on admin bar', 'sutunam' ),
    'add_new'            => _x( 'Add New', 'Product', 'sutunam' ),
    'add_new_item'       => __( 'Add New Product', 'sutunam' ),
    'new_item'           => __( 'New Product', 'sutunam' ),
    'edit_item'          => __( 'Edit Product', 'sutunam' ),
    'view_item'          => __( 'View Product', 'sutunam' ),
    'all_items'          => __( 'All Food Products', 'sutunam' ),
    'search_items'       => __( 'Search Product', 'sutunam' ),
    'parent_item_colon'  => __( 'Parent Product:', 'sutunam' ),
    'not_found'          => __( 'No Product found.', 'sutunam' ),
    'not_found_in_trash' => __( 'No Product found in Trash.', 'sutunam' ),
);

$t_args = array(
    'labels'             => $t_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'product' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title','thumbnail','editor')
);

register_post_type( 'food', $t_args );


/*-----------------------------------------------------------------------------------*/
/* Register Area for Retailers Supply post type
/*-----------------------------------------------------------------------------------*/

register_taxonomy(
    'area',
    'retailer',
    array(
        'hierarchical' => true,
        'label' => 'Area',
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'area',
            'with_front' => false
        )
    )
);

/*-----------------------------------------------------------------------------------*/
/* Register Ingredient Distributor for Ingredient post type
/*-----------------------------------------------------------------------------------*/

register_taxonomy(
    'ingredient-distributor',
    'ingredient',
    array(
        'hierarchical' => true,
        'label' => 'Distributor',
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'ingredient-distributor',
            'with_front' => true
        )
    )
);

/*-----------------------------------------------------------------------------------*/
/* Register Category for Food Service post type
/*-----------------------------------------------------------------------------------*/

register_taxonomy(
    'food_category',
    'food',
    array(
        'hierarchical' => true,
        'label' => 'Food Categories',
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'food',
            'with_front' => true
        )
    )
);

function food_category_taxonomy_custom_fields($tag) {
    $t_id = $tag->term_id;
    $term_meta = get_option( "taxonomy_term_$t_id" );
    ?>

    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="leader_name"><?php _e('Team Leader'); ?></label>
        </th>
        <td>
            <input type="text" name="term_meta[leader_name]" id="term_meta[leader_name]" size="100" value="<?php echo $term_meta['leader_name'] ? $term_meta['leader_name'] : ''; ?>"><br />
            <span class="description"><?php _e('The Team Leader Name'); ?></span>
        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="leader_telephone"><?php _e('Telephone'); ?></label>
        </th>
        <td>
            <input type="text" name="term_meta[leader_telephone]" id="term_meta[leader_telephone]" size="100" value="<?php echo $term_meta['leader_telephone'] ? $term_meta['leader_telephone'] : ''; ?>"><br />
        </td>
    </tr>

    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="leader_contact"><?php _e('Contact'); ?></label>
        </th>
        <td>
            <input type="text" name="term_meta[leader_contact]" id="term_meta[leader_contact]" size="100" value="<?php echo $term_meta['leader_contact'] ? $term_meta['leader_contact'] : ''; ?>"><br />
        </td>
    </tr>

    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="leader_email"><?php _e('Email'); ?></label>
        </th>
        <td>
            <input type="text" name="term_meta[leader_email]" id="term_meta[leader_email]" size="100" value="<?php echo $term_meta['leader_email'] ? $term_meta['leader_email'] : ''; ?>"><br />
        </td>
    </tr>

    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="leader_email"><?php _e('Position'); ?></label>
        </th>
        <td>
            <input type="text" name="term_meta[position]" id="term_meta[position]" size="100" value="<?php echo $term_meta['position'] ? $term_meta['position'] : ''; ?>"><br />
        </td>
    </tr>

    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="class_name"><?php _e('Class Name'); ?></label>
        </th>
        <td>
            <input type="text" name="term_meta[class_name]" id="term_meta[class_name]" size="100" value="<?php echo $term_meta['class_name'] ? $term_meta['class_name'] : ''; ?>"><br />
        </td>
    </tr>
<?php
}

//Add team leader to channels

function save_taxonomy_custom_fields( $term_id ) {
    if ( isset( $_POST['term_meta'] ) ) {
        $t_id = $term_id;
        $term_meta = get_option( "taxonomy_term_$t_id" );
        $cat_keys = array_keys( $_POST['term_meta'] );
        foreach ( $cat_keys as $key ){
            if ( isset( $_POST['term_meta'][$key] ) ){
                $term_meta[$key] = $_POST['term_meta'][$key];
            }
        }
        //save the option array
        update_option( "taxonomy_term_$t_id", $term_meta );
    }
}

add_action( 'food_category_edit_form_fields', 'food_category_taxonomy_custom_fields', 10, 2 );
add_action( 'edited_food_category', 'save_taxonomy_custom_fields', 10, 2 );
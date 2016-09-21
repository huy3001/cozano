<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 22/04/2015
 * Time: 17:44
 */

/*-----------------------------------------------------------------------------------*/
/* ReduxFramework Admin Panel
/*-----------------------------------------------------------------------------------*/

if ( !class_exists( 'ReduxFramework' ) ) {
    require_once( get_template_directory() . '/lib/admin_core/framework.php' );
}

//if ( !isset( $redux_demo ) ) {
require_once( get_template_directory() . '/lib/admin_core/admin-config.php' );
//}
/**
 * Get path of theme
 */
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . '/core');

require_once(CORE . '/init.php');
require_once ('lib/post-types.php');
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
    $content_width = 620;
}

/**
 * Set function to support sutunam theme
 */

if (!function_exists('sutunam_theme_setup')) {
    function sutunam_theme_setup()
    {

        /*
         * Set translate to sutunam theme
         */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('sutunam', $language_folder);

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ));

        // Setup the WordPress core custom background feature.
        $default_background = array(
            'default-color' => '#e8e8e8',
        );
        add_theme_support('custom-background', $default_background);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'top-menu' => __('Top Menu', 'sutunam'),
            'left-menu' => __('Left Menu', 'sutunam'),
        ));

        /*
         * Create sidebar for sutunam theme
         */
        $sidebar = array(
            'name' => __('Footer Sidebar', 'sutunam'),
            'id' => 'footer-sidebar',
            'description' => 'Footer sidebar for Cozano theme',
            'class' => 'footer-sidebar',
            'before_title' => '<h3 class="footer-title">',
            'after_title' => '</h3>',

        );
        register_sidebar($sidebar);

//        $left_sidebar = array(
//            'name' => __('Left Sidebar', 'sutunam'),
//            'id' => 'left-sidebar',
//            'description' => 'Left sidebar for Cozano theme',
//            'class' => 'left-sidebar',
//            'before_title' => '<h3 class="left-sidebar-title">',
//            'after_title' => '</h3>'
//        );
//        register_sidebar($left_sidebar);

        add_theme_support('post-thumbnails');

    }

    add_action('init', 'sutunam_theme_setup');
}

/**
 * Display logo for sutunam theme
 */
if (!function_exists('sutunam_logo')) {
    function sutunam_logo()
    { ?>
        <div class="sutunam-logo">
            <div class="site-name">
                <?php if (is_home()) {
                    printf(
                        '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
                        get_bloginfo('url'),
                        get_bloginfo('description'),
                        get_bloginfo('sitename')
                    );
                } else {
                    printf(
                        '<a href="%1$s" title="%2$s">%3$s</a>',
                        get_bloginfo('url'),
                        get_bloginfo('description'),
                        get_bloginfo('sitename')
                    );
                }?>
            </div>
            <div class="site-description"><?php bloginfo('description');?></div>
        </div>
    <?php }
}

/**
 * Display menu
 */
if (!function_exists('sutunam_menu')) {
    function sutunam_menu($slug)
    {
        $menu = array(
            'theme_location' => $slug,
            'container' => 'nav',
            'container_class' => $slug
        );
        wp_nav_menu($menu);
    }
}

/**
 * Display pagination
 */
if (!function_exists('sutunam_pagination')) {
    function sutunam_pagination()
    {

        //Not display if pagination < 2
        if ($GLOBALS['wp_query']->max_num_pages < 2) {
            return '';
        }?>
        <nav class="pagition" role="navigation">
        <?php if (get_next_post_link()): ?>
        <div class="prev"><?php next_posts_link(__('Older Posts', 'sutunam')); ?></div>
    <?php endif;?>

        <?php if (get_previous_post_link()): ?>
        <div class="next"><?php previous_posts_link(__('Newer Posts', 'sutunam')); ?></div>
    <?php endif;?>
        </nav><?php
    }
}

/**
 * Display thumbnail of post
 */
if (!function_exists('sutunam_thumbnail')) {
    function sutunam_thumbnail($size)
    {
        if (!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')): ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail($size) ?></figure>
        <?php endif;
    }
}

/**
 * Display entry header
 */
if (!function_exists('sutunam_entry_header')) {
    function sutunam_entry_header()
    {
        if (is_single()): ?>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute() ?>">
                    <?php the_title() ?>
                </a>
            </h1>
        <?php else: ?>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute() ?>">
                    <?php the_title() ?>
                </a>
            </h2>
        <?php endif;
    }
}

/**
 * Display meta entry of post
 */

if (!function_exists('sutunam_entry_meta')) {
    function sutunam_entry_meta()
    {
        if (!is_page()) :
            echo '<div class="entry-meta">';

            //Display Author
            printf(__('<span class="author">Posted by %1$s</span>', 'sutunam'),
                get_the_author());
            printf(__('<span class="date-published"> at %1$s</span>', 'sutunam'),
                get_the_date());
            printf(__('<span class="category"> in %1$s</span>', 'sutunam'),
                get_the_category_list(', '));

            // Display comment
            if (comments_open()) :
                echo ' <span class="meta-reply">';
                comments_popup_link(
                    __('Leave a comment', 'sutunam'),
                    __('One comment', 'sutunam'),
                    __('% comments', 'sutunam'),
                    __('Read all comments', 'sutunam')
                );
                echo '</span>';
            endif;
            echo '</div>';
        endif;
    }
}

/**
 * Add Read More to excerpt
 */
function sutunam_readmore()
{
    return '...<a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('Read More', 'sutunam') . '</a>';
}

add_filter('excerpt_more', 'sutunam_readmore');

/**
 * Display content of post
 */
if (!function_exists('sutunam_entry_content')) {
    function sutunam_entry_content()
    {
        if (!is_single()):
            the_excerpt();
        else:
            the_content();
            $link_pages = array(
                'before' => __('<p>Page:', 'sutunam'),
                'after' => '</p>',
                'nextpagelink' => __('Next page', 'sutunam'),
                'previouspagelink' => __('Previous page', 'sutunam')
            );
            wp_link_pages($link_pages);
        endif;
    }
}

add_action( 'wp_enqueue_scripts','stn_frontend_scripts' );
add_filter( 'wp_default_editor', create_function('', 'return "tinymce";') );
/**
 * Enqueue js  css
 */
function stn_frontend_scripts() {
    /*============ Styles ============ */
    wp_enqueue_style( 'bootstrap',   get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-theme',   get_template_directory_uri() . '/css/bootstrap-theme.min.css');
    wp_enqueue_style( 'bootstrap-select',   get_template_directory_uri() . '/css/bootstrap-select.min.css');
    wp_enqueue_style( 'font-awesome',   get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style( 'font-roboto',   'https://fonts.googleapis.com/css?family=Roboto:400,700,500&subset=latin,vietnamese');
    wp_enqueue_style( 'styles',   get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'custom',   get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_style( 'styles-editor',   get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'filter',   get_template_directory_uri() . '/css/filtrify.css');
    /*============ Javascripts ============ */
    wp_enqueue_script( 'jquery',   get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script( 'bootstrap',   get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'), '3.1.1', true);
    wp_enqueue_script( 'filter',   get_template_directory_uri() . '/js/filtrify.min.js',array('jquery'), '3.1.1', true);
    wp_enqueue_script( 'bootstrap-select',   get_template_directory_uri() . '/js/bootstrap-select.min.js',array('jquery'), '3.1.1', true);
    wp_enqueue_script( 'elevatezoom',   get_template_directory_uri() . '/js/jquery.elevatezoom.js',array('jquery'), '3.1.1', true);
    wp_enqueue_script( 'slick',   get_template_directory_uri() . '/js/slick/slick.min.js',array('jquery'), '3.1.1', true);
    wp_enqueue_script( 'sticky',   get_template_directory_uri() . '/js/jquery.sticky.js',array('jquery'), '3.1.1', true);
    wp_enqueue_script( 'match-height',   get_template_directory_uri() . '/js/jquery.matchHeight-min.js',array('jquery'), '3.1.1', true);
    wp_enqueue_script( 'custom',   get_template_directory_uri() . '/js/custom.js',array('jquery'), '3.1.1', true);
}

add_filter( 'wp_mail_content_type', 'set_html_content_type' );
function set_html_content_type() {
    return 'text/html';
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 16 );

add_action( 'woocommerce_before_add_to_cart_button', 'add_content_before_addtocart_button_func' );

function add_content_before_addtocart_button_func() {
    global $product;

    //style
    $fits = get_the_terms( get_the_ID(), 'fit' );
    $fit = null;
    $i =0;
    foreach($fits as $item){
        if($i == 0)
            $fit = $item->name;
        else
            $fit .= ', '.$item->name;
        $i++;
    }

    //color
    $colors = get_the_terms( get_the_ID(), 'color' );
    $color = null;
    $i =0;
    foreach($colors as $item){
        if($i == 0)
            $color = $item->name;
        else
            $color .= ', '.$item->name;
        $i++;
    }

    //fabric
    $fabrics = get_the_terms( get_the_ID(), 'fabric' );
    $fabric = null;
    $i =0;
    ?>
    <?php foreach($fabrics as $item){
        if($i == 0)
            $fabric = $item->name;
        else
            $fabric .= ', '.$item->name;
        $i++;
    }
    if($fits){
        echo '<p class="fit"><span>Kiểu dáng: </span>';
        echo '<strong>'. $fit. '</strong></p>';
    }
    if($fabrics){
        echo '<p class="fabric"><span>Chất liệu: </span>';
        echo '<strong>'. $fabric. '</strong></p>';
    }
    if($colors){
        echo '<p class="color"><span>Màu sắc: </span>';
        echo '<strong>'. $color. '</strong></p>';
    }
    echo '<p class="size"><span>Chọn size: </span>';
    //Size
    $sizes = get_the_terms( get_the_ID(), 'size' );
    foreach ($sizes as $size){
        echo '<span><input type="checkbox" name="size" id="'.$size->slug.'" value="'.$size->slug.'"><label for="'.$size->slug.'">'.$size->name .'</label></span>';
    }
    echo '</select>';
}

function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('product'));
    }
    return $query;
}
add_filter('pre_get_posts','searchfilter');

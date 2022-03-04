<?php


function enqueue_parent_styles()
{

    wp_register_style('font-awesome', get_template_directory_uri() . '/assets/src/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome');

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/src/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/src/owlcarousel/owl.carousel.min.css');
    wp_enqueue_style('owl-carousel');

    wp_register_style('owl-theme', get_template_directory_uri() . '/assets/src/owlcarousel/owl.theme.default.min.css');
    wp_enqueue_style('owl-theme');

    wp_register_style('animate', get_template_directory_uri() . '/assets/src/css/animate.min.css');
    wp_enqueue_style('animate');

    wp_register_style('custom', get_template_directory_uri() . '/assets/src/css/custom.css');
    wp_enqueue_style('custom');


}

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');


function load_js()
{
    wp_register_script('jquery', get_template_directory_uri() . '/assets/src/js/jquery-3.6.0.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('popper', get_template_directory_uri() . '/assets/src/js/popper.min.js', array(), 1, 1, 1);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/src/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('Owl.js', get_template_directory_uri() . '/assets/src/owlcarousel/owl.carousel.js', array(), 1, 1, 1);
    wp_enqueue_script('Owl.js');

    wp_register_script('bxslider', get_template_directory_uri() . '/assets/src/js/jquery.bxslider.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bxslider');

    wp_register_script('custom', get_template_directory_uri() . '/assets/src/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');


}

add_action('wp_enqueue_scripts', 'load_js');

add_action('init', 'create_custom_post_type');

function create_custom_post_type()
{

    $labels = array(
        'name' => _x('Practices', 'plural'),
        'singular_name' => _x('Practices', 'singular'),
        'menu_name' => _x('Practices', 'admin menu'),
        'name_admin_bar' => _x('Practices', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Practices'),
        'new_item' => __('New Practices'),
        'edit_item' => __('Edit Practices'),
        'view_item' => __('View Practices'),
        'all_items' => __('All Practices'),
        'search_items' => __('Search Practices'),
        'not_found' => __('No Practices found.'),
    );

    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $args = array(
        // enables options on admin pannel outside eg add news etc
        'labels' => $labels,

        // enables inside options after clicking editing options eg thumbnails, title etc
        'supports' => $supports,

        // give personal category and post_tag inside it instead of common to all posts
        'taxonomies' => array('category', 'post_tag'),

        //give look and feel  and options like default
        'description' => 'Holds our News and specific data',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'projects'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-megaphone',
    );

    register_post_type('practices', $args);
}


// //second custom post for Members
// add_action( 'init', 'create_custom_post_type_' );

// function create_custom_post_type_() {

//     $labels = array(
//         'name' => _x('Members', 'plural'),
//         'singular_name' => _x('Members', 'singular'),
//         'menu_name' => _x('Members', 'admin menu'),
//         'name_admin_bar' => _x('Members', 'admin bar'),
//         'add_new' => _x('Add New', 'add new'),
//         'add_new_item' => __('Add New Members'),
//         'new_item' => __('New Members'),
//         'edit_item' => __('Edit Members'),
//         'view_item' => __('View Members'),
//         'all_items' => __('All Members'),
//         'search_items' => __('Search Members'),
//         'not_found' => __('No Members found.'),
//         );

//         $supports = array(
//             'title', // post title
//             'editor', // post content
//             'author', // post author
//             'thumbnail', // featured images
//             'excerpt', // post excerpt
//             'custom-fields', // custom fields
//             'comments', // post comments
//             'revisions', // post revisions
//             'post-formats', // post formats
//             );

// $args = array(
//     // enables options on admin pannel outside eg add news etc
//   'labels' => $labels,

//   // enables inside options after clicking editing options eg thumbnails, title etc
//   'supports' => $supports,

//   // give personal category and post_tag inside it instead of common to all posts
//   'taxonomies' => array( 'category', 'post_tag' ),

//   //give look and feel  and options like default
//   'description' => 'Holds our News and specific data',
// 'public' => true,
// 'show_ui' => true,
// 'show_in_menu' => true,
// 'show_in_nav_menus' => true,
// 'show_in_admin_bar' => true,
// 'can_export' => true,
// 'capability_type' => 'post',
//  'show_in_rest' => true,
// 'query_var' => true,
// 'rewrite' => array('slug' => 'members'),
// 'has_archive' => true,
// 'hierarchical' => false,
// 'menu_position' => 6,
// 'menu_icon' => 'dashicons-megaphone',
//  );

// register_post_type( 'members',$args);
// }


//for options page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{
    // Check function exists.
    if (function_exists('acf_add_options_sub_page')) {
        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title' => __('Theme General Settings'),
            'menu_title' => __('Theme Settings'),
            'redirect' => false,
        ));
    }
}

//for custom menues
function wpb_custom_new_menu()
{
    register_nav_menus(
        array(
            'growth-natives-menu' => __('Growth Natives Menu'),
            'extra-menu' => __('Extra Menu'),
            'social-icons' => __('social icons')
        )
    );
}

add_action('init', 'wpb_custom_new_menu');


// adding new features to wordpress theme
function fn_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'fn_theme_supports');


// Allow SVG
// add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

//     global $wp_version;
//     if ( $wp_version !== '4.7.1' ) {
//        return $data;
//     }
  
//     $filetype = wp_check_filetype( $filename, $mimes );
  
//     return [
//         'ext'             => $filetype['ext'],
//         'type'            => $filetype['type'],
//         'proper_filename' => $data['proper_filename']
//     ];
  
//   }, 10, 4 );
  
//   function cc_mime_types( $mimes ){
//     $mimes['svg'] = 'image/svg+xml';
//     return $mimes;
//   }
//   add_filter( 'upload_mimes', 'cc_mime_types' );
  
//   function fix_svg() {
//     echo '<style type="text/css">
//           .attachment-266x266, .thumbnail img {
//                width: 100% !important;
//                height: auto !important;
//           }
//           </style>';
//   }
//   add_action( 'admin_head', 'fix_svg' );
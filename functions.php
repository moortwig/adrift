<?php

//////////////////////////////////////////////////////////////
// INCLUDE FILES =============================================
// Require template for staff custom post type
require_once locate_template('post-type-comic.php');

// Require templates for ACF
require_once locate_template('lib/acf/adrift-info.php');
require_once locate_template('lib/acf/comic-strips.php');


//////////////////////////////////////////////////////////////
// IMAGES ====================================================
// Featured image
add_theme_support('post-thumbnails');

// Custom image size, resize by height
add_image_size( 'comicThumb', 9999, 225, false);
add_image_size( 'comic', 9999, 370, false);
add_image_size( 'logo', 9999, 150, false);



//////////////////////////////////////////////////////////////
// DIFFERENT SECTIONS ========================================
// Widget support:
function arphabet_widgets_init() {
    register_sidebar( array(
        'name' => 'Posts right sidebar',
        'id' => 'post_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// Navigation menus:
register_nav_menus( array(
    'side_menu' => 'Shown at side of the page',
    'bottom_menu' => 'Menu displayed at the bottom of the page'
) );


// Blog Categories for archive page:
$blogCategories = array(
    'show_option_all'    => '',
    'orderby'            => 'name',
    'order'              => 'ASC',
    'style'              => 'list',
    'show_count'         => 0,
    'hide_empty'         => 1,
    'use_desc_for_title' => 1,
    'child_of'           => 0,
    'feed'               => '',
    'feed_type'          => '',
    'feed_image'         => '',
    'exclude'            => '',
    'exclude_tree'       => '',
    'include'            => '',
    'hierarchical'       => 1,
    'title_li'           => __(''),
    'show_option_none'   => __('No categories'),
    'number'             => null,
    'echo'               => 1,
    'depth'              => 0,
    'current_category'   => 0,
    'pad_counts'         => 0,
    'taxonomy'           => 'category',
    'walker'             => null
);

// Comic Categories (chapters) for archive page:
$comicCategories = array(
    'show_option_all'    => '',
    'orderby'            => 'name',
    'order'              => 'ASC',
    'style'              => 'list',
    'show_count'         => 0,
    'hide_empty'         => 1,
    'use_desc_for_title' => 1,
    'child_of'           => 0,
    'feed'               => '',
    'feed_type'          => '',
    'feed_image'         => '',
    'exclude'            => '',
    'exclude_tree'       => '',
    'include'            => '',
    'hierarchical'       => 1,
    'title_li'           => __( '' ),
    'show_option_none'   => __( 'No chapters' ),
    'number'             => null,
    'echo'               => 1,
    'depth'              => 0,
    'current_category'   => 0,
    'pad_counts'         => 0,
    'taxonomy'           => 'strip',
    'walker'             => null
);
?>
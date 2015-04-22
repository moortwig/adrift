<?php

//////////////////////////////////////////////////////
// CUSTOM POST TYPE ==================================
add_action('init', 'comic_register');

function comic_register() {
    $labels = array(
        'name'               => _x('My comics', 'post type general name'),
        'singular name'      => _x('comic item', 'post type singular name'),
        'add_new'            => _x('Add new', 'comic item'),
        'add_new_item'       => __('Add new comic strip'),
        'edit_item'          => __('Edit comic strip'),
        'new item'           => __('New comic strip'),
        'view_item'          => __('View comic strip'),
        'search_items'       => __('Search comic strips'),
        'not_found'          => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'Comic strips',
        'show_in_nav_menu'   => true
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,   // visible in admin UI
        'publicly_queryable' => true,
        'show_ui'            => true,  // displays an admin panel for this cpt
        'query_var'          => true,
        'rewrite'            => true,      // permalinks
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'thumbnail', 'page-attribute'),
        'exclude_from_search' => true,
        'has_archive'        => true,
        'show_in_nav_menu'   => true,
    );
    register_post_type('comic', $args);
}



// Add taxonomy "Chapter"
add_action( 'init', 'create_comic_tax', 0 );

function create_comic_tax() {
    $labels = array(
        'name'                       => _x( 'Chapters', 'taxonomy general name' ),
        'singular_name'              => _x( 'Chapter', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Chapters' ),
        'popular_items'              => __( 'Popular Chapters' ),
        'all_items'                  => __( 'All Chapters' ),
        'edit_item'                  => __( 'Edit Chapter' ),
        'update_item'                => __( 'Update Chapter' ),
        'add_new_item'               => __( 'Add New Chapter' ),
        'new_item_name'              => __( 'New Chapter Name' ),
        'separate_items_with_commas' => __( 'Separate chapters with commas' ),
        'add_or_remove_items'        => __( 'Add or remove chapters' ),
        'choose_from_most_used'      => __( 'Choose from the most used writers' ),
        'not_found'                  => __( 'No chapters found.' ),
        'menu_name'                  => __( 'Chapters' ),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'chapter' ),
    );

    register_taxonomy( 'chapter', 'comic', $args );
}
?>
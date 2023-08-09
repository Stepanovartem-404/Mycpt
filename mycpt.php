<?php
/*
Plugin Name: Custom Post Types
Plugin URI: http://cpt.com/
Description: Declares a plugin that will create a custom post type displaying movie reviews.
Version: 1.0
Author: Artem Stepanov
Author URI: http://cpt.com/
License: GPLv2
*/

function create_speaker() {
    register_post_type( 'speaker',
        array(
            'labels' => array(
                'name' => 'Speakers',
                'singular_name' => 'Speaker',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Speaker',
                'add_new_featured_image' => 'Featured Image',
                'add_new_content_editor' => 'Content Editor',
                'edit' => 'Edit',
                'edit_item' => 'Edit Speaker',
                'new_item' => 'New Speaker',
                'view' => 'View',
                'view_item' => 'View Speaker',
                'search_items' => 'Search Speaker',
                'not_found' => 'No Speaker found',

            ),

            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats' ),
            'taxonomies' => array( 'Positions','Countries' ),
            'has_archive' => true
        ));

        register_taxonomy(
            'position',
            'speaker',
            array(
                'label' => ('Positions'),
                'rewrite' => array( 'slug' => 'position'),
                'hierarchical' => true
            )
    );
add_action( 'init', 'position' );

    register_taxonomy(
        'country',
        'speaker',
        array(
            'label' => ('Countries'),
            'rewrite' => array( 'slug' => 'country'),
            'hierarchical' => true
            )
    );
    add_action( 'init', 'country' );
}

add_action( 'init', 'create_speaker' );



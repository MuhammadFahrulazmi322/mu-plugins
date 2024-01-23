<?php
    function university_post_types(){

        //Event Post Types
        register_post_type('event',array(
            'rewrite' => array('slug' => 'events'),
            'supports' => array('title', 'editor','excerpt'),
            'has_archive' => true,
            'public'=> true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'add_new'  => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => 'Event',
            ),
            'menu_icon' => 'dashicons-calendar'
        ));

        //Program Post Types
        register_post_type('program',array(
            'rewrite' => array('slug' => 'programs'),
            'supports' => array('title', 'editor'),
            'has_archive' => true,
            'public'=> true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Programs',
                'add_new_item' => 'Add New Program',
                'add_new'  => 'Add New Program',
                'edit_item' => 'Edit Program',
                'all_items' => 'All Programs',
                'singular_name' => 'program',
            ),
            'menu_icon' => 'dashicons-awards'
        ));

        //Professor Post Types
        register_post_type('professor',array(
            'supports' => array('title', 'editor','thumbnail'),
            'public'=> true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Professors',
                'add_new_item' => 'Add New Professor',
                'add_new'  => 'Add New Professor',
                'edit_item' => 'Edit Professor',
                'all_items' => 'All Professors',
                'singular_name' => 'professor',
            ),
            'menu_icon' => 'dashicons-welcome-learn-more'
        ));

        //Campuses Post Types
        register_post_type('Campus',array(
            'rewrite' => array('slug' => 'campuses'),
            'supports' => array('title', 'editor','excerpt'),
            'has_archive' => true,
            'public'=> true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Campuses',
                'add_new_item' => 'Add New Campus',
                'add_new'  => 'Add New Campus',
                'edit_item' => 'Edit Campus',
                'all_items' => 'All Campuses',
                'singular_name' => 'Campus',
            ),
            'menu_icon' => 'dashicons-location-alt'
        ));
        
    }
    add_action('init','university_post_types')


?>
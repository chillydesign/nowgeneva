<?php

add_action('init', 'create_custom_post_types'); // Add our HTML5 Blank Custom Post Type


function create_custom_post_types() {


    $labels_boutique_cat = array(
        'name'                       => 'Categories',
        'singular_name'              => 'Categorie',
        'menu_name'                  => 'Categorie',
        'all_items'                  => 'Toutes les Categories',
        'parent_item'                => 'Categorie parente',
        'parent_item_colon'          => 'Categorie parente:',
        'new_item_name'              => 'Nom de la nouvelle categorie',
        'add_new_item'               => 'Ajouter une categorie',
        'edit_item'                  => 'Modifier categorie',
        'update_item'                => 'Mettre à jur la categorie',
        'separate_items_with_commas' => 'Separer les categories avec des virgules',
        'search_items'               => 'Chercher dans les categories',
        'add_or_remove_items'        => 'Ajouter ou supprimer des categories',
        'choose_from_most_used'      => 'Choisir parmi les categories les plus utilisées',
    );
    $args_boutique_cat = array(
        'labels'                     => $labels_boutique_cat,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
    );
    register_taxonomy( 'boutique_cat', array( 'boutique' ), $args_boutique_cat );


    $labels_boutique_tag = array(
        'name'                       => 'Tags',
        'singular_name'              => 'Tag',
        'menu_name'                  => 'Tag',
        'all_items'                  => 'Toutes les Tags',
        'parent_item'                => 'Tag parente',
        'parent_item_colon'          => 'Tag parente:',
        'new_item_name'              => 'Nom de la nouvelle tag',
        'add_new_item'               => 'Ajouter une tag',
        'edit_item'                  => 'Modifier tag',
        'update_item'                => 'Mettre à jur la tag',
        'separate_items_with_commas' => 'Separer les tags avec des virgules',
        'search_items'               => 'Chercher dans les tags',
        'add_or_remove_items'        => 'Ajouter ou supprimer des tags',
        'choose_from_most_used'      => 'Choisir parmi les tags les plus utilisées',
    );
    $args_boutique_tag = array(
        'labels'                     => $labels_boutique_tag,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
    );
    register_taxonomy( 'boutique_tag', array( 'boutique' ), $args_boutique_tag );











    register_post_type('boutique', // Register Custom Post Type
    array(
        'labels' => array(
            'name' => __('Boutiques', 'html5blank'), // Rename these to suit
            'singular_name' => __('Boutique', 'html5blank'),
            'add_new' => __('Ajouter', 'html5blank'),
            'add_new_item' => __('Add New Boutique', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Boutique', 'html5blank'),
            'new_item' => __('New Boutique', 'html5blank'),
            'view' => __('View Boutique', 'html5blank'),
            'view_item' => __('View Boutique', 'html5blank'),
            'search_items' => __('Search Boutique', 'html5blank'),
            'not_found' => __('No Boutiques found', 'html5blank'),
            'not_found_in_trash' => __('No Boutique found in Trash', 'html5blank')
        ),
        'public' => true,
        'exclude_from_search' => false,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
        ) // Add Category and Post Tags support
    ));







    register_post_type('event', // Register Custom Post Type
    array(
        'labels' => array(
            'name' => __('Events', 'html5blank'), // Rename these to suit
            'singular_name' => __('Event', 'html5blank'),
            'add_new' => __('Ajouter', 'html5blank'),
            'add_new_item' => __('Add New Event', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Event', 'html5blank'),
            'new_item' => __('New Event', 'html5blank'),
            'view' => __('View Event', 'html5blank'),
            'view_item' => __('View Event', 'html5blank'),
            'search_items' => __('Search Event', 'html5blank'),
            'not_found' => __('No Events found', 'html5blank'),
            'not_found_in_trash' => __('No Event found in Trash', 'html5blank')
        ),
        'public' => true,
        'exclude_from_search' => false,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'category'
        ) // Add Category and Post Tags support
    ));




}



?>

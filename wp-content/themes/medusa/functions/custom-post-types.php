<?php

function servicio_post_type()
{
    $labels = array(
        'name'           => _x('Servicios', 'Post Type General Name', 'text_domain'),
        'singular_name'  => _x('Servicio', 'Post Type Singular Name', 'text_domain'),
        'menu_name'      => __('Servicios', 'text_domain'),
        'name_admin_bar' => __('Servicio', 'text_domain'),

    );
    $args   = array(
        'label'               => __('Servicio', 'text_domain'),
        'description'         => __('Tipo Servicios', 'text_domain'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats'),
        'taxonomies'          => array('category', 'post_tag'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-building',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type('servicio', $args);

}

add_action('init', 'servicio_post_type', 0);



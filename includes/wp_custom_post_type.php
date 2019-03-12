<?php

function portafolio() {

    $labels = array(
        'name'                  => _x( 'Portafolios', 'Post Type General Name', 'corporaciond1' ),
        'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'corporaciond1' ),
        'menu_name'             => __( 'Portafolio', 'corporaciond1' ),
        'name_admin_bar'        => __( 'Portafolio', 'corporaciond1' ),
        'archives'              => __( 'Archivo de Portafolio', 'corporaciond1' ),
        'attributes'            => __( 'Atributos de Portafolio', 'corporaciond1' ),
        'parent_item_colon'     => __( 'Portafolio Padre:', 'corporaciond1' ),
        'all_items'             => __( 'Todos los Items', 'corporaciond1' ),
        'add_new_item'          => __( 'Agregar Nuevo Item', 'corporaciond1' ),
        'add_new'               => __( 'Agregar Nuevo', 'corporaciond1' ),
        'new_item'              => __( 'Nuevo Item', 'corporaciond1' ),
        'edit_item'             => __( 'Editar Item', 'corporaciond1' ),
        'update_item'           => __( 'Actualizar Item', 'corporaciond1' ),
        'view_item'             => __( 'Ver Item', 'corporaciond1' ),
        'view_items'            => __( 'Ver Portafolio', 'corporaciond1' ),
        'search_items'          => __( 'Buscar en Portafolio', 'corporaciond1' ),
        'not_found'             => __( 'No hay Resultados', 'corporaciond1' ),
        'not_found_in_trash'    => __( 'No hay Resultados en la Papelera', 'corporaciond1' ),
        'featured_image'        => __( 'Imagen Destacada', 'corporaciond1' ),
        'set_featured_image'    => __( 'Colocar Imagen Destacada', 'corporaciond1' ),
        'remove_featured_image' => __( 'Remover Imagen Destacada', 'corporaciond1' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'corporaciond1' ),
        'insert_into_item'      => __( 'Insertar dentro de Item', 'corporaciond1' ),
        'uploaded_to_this_item' => __( 'Cargado a este item', 'corporaciond1' ),
        'items_list'            => __( 'Listado del Portafolio', 'corporaciond1' ),
        'items_list_navigation' => __( 'Navegación de Listado del Portafolio', 'corporaciond1' ),
        'filter_items_list'     => __( 'Filtro de Listado del Portafolio', 'corporaciond1' ),
    );
    $args = array(
        'label'                 => __( 'Portafolio', 'corporaciond1' ),
        'description'           => __( 'Portafolio de Desarrollos', 'corporaciond1' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', ),
        'taxonomies'            => array( 'custom_portafolio' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'portafolio', $args );

}
add_action( 'init', 'portafolio', 0 );

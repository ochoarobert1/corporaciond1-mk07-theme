<?php
add_action( 'cmb2_admin_init', 'corporaciond1_register_metabox' );
function corporaciond1_register_metabox() {
    $prefix = 'd1_';

    //    $cmb_metabox = new_cmb2_box( array(
    //        'id'            => $prefix . 'metabox',
    //        'title'         => esc_html__( 'Test Metabox', 'corporaciond1' ),
    //        'object_types'  => array( 'page' ), // Post type
    //        // 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
    //        // 'context'    => 'normal',
    //        // 'priority'   => 'high',
    //        // 'show_names' => true, // Show field names on the left
    //        // 'cmb_styles' => false, // false to disable the CMB stylesheet
    //        // 'closed'     => true, // true to keep the metabox closed by default
    //        // 'classes'    => 'extra-class', // Extra cmb2-wrap classes
    //        // 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
    //    ) );
    //
    //    $cmb_metabox->add_field( array(
    //        'name'       => esc_html__( 'Test Text', 'corporaciond1' ),
    //        'desc'       => esc_html__( 'field description (optional)', 'corporaciond1' ),
    //        'id'         => $prefix . 'text',
    //        'type'       => 'text',
    //        'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
    //        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
    //        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
    //        // 'on_front'        => false, // Optionally designate a field to wp-admin only
    //        // 'repeatable'      => true,
    //        // 'column'          => true, // Display field value in the admin post-listing columns
    //    ) );

    $cmb_service = new_cmb2_box( array(
        'id'            => $prefix . 'service_metabox',
        'title'         => esc_html__( 'Información Extra - Servicios', 'corporaciond1' ),
        'object_types'  => array( 'servicios' ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'cmb_styles' => true
    ) );

    $cmb_service->add_field( array(
        'name'       => esc_html__( 'Separación de Título', 'corporaciond1' ),
        'desc'       => esc_html__( 'Ingresa como debe separarse el título para el efecto en el Inicio', 'corporaciond1' ),
        'id'         => $prefix . 'service_title',
        'type'       => 'text',
        'repeatable'      => true
    ) );

    $cmb_clients = new_cmb2_box( array(
        'id'            => $prefix . 'clients_metabox',
        'title'         => esc_html__( 'Información Extra - Clientes', 'corporaciond1' ),
        'object_types'  => array( 'clientes' ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'cmb_styles' => true
    ) );

    $cmb_clients->add_field( array(
        'name'       => esc_html__( 'Activar Modo Histórico', 'corporaciond1' ),
        'desc'       => esc_html__( 'Activar si se va a colocar visible en la sección de Histórico (opcional)', 'corporaciond1' ),
        'id'         => $prefix . 'client_timeline',
        'type'       => 'checkbox'
    ) );
    
    $cmb_clients->add_field( array(
        'name'       => esc_html__( 'URL del Cliente', 'corporaciond1' ),
        'desc'       => esc_html__( 'Dirección de página web del cliente (opcional)', 'corporaciond1' ),
        'id'         => $prefix . 'client_url',
        'type'       => 'text_url'
    ) );

}

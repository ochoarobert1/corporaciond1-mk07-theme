<?php
/* --------------------------------------------------------------
CUSTOM AREA FOR OPTIONS DATA - corporaciond1
-------------------------------------------------------------- */

/* CUSTOM MENU PAGE AND FUNCTIONS IN ADMIN */
function register_corporaciond1_settings() {
    //register our settings
    register_setting( 'corporaciond1-settings-group', 'corporaciond1_dir' );
    register_setting( 'corporaciond1-settings-group', 'corporaciond1_email' );
    register_setting( 'corporaciond1-settings-group', 'corporaciond1_telf' );
    register_setting( 'corporaciond1-settings-group', 'corporaciond1_mob' );
    register_setting( 'corporaciond1-settings-group', 'corporaciond1_fb' );
    register_setting( 'corporaciond1-settings-group', 'corporaciond1_tw' );
    register_setting( 'corporaciond1-settings-group', 'corporaciond1_ig' );
    register_setting( 'corporaciond1-settings-group', 'corporaciond1_yt' );
}

function my_admin_menu() {
    add_menu_page( 'Opciones del Sitio', 'Opciones del Sitio', 'manage_options', 'corporaciond1_custom_options', 'my_custom_menu_page', get_template_directory_uri() . '/images/plugin-icon.png', 120  );
    /* call register settings function */
    add_action( 'admin_init', 'register_corporaciond1_settings' );
}

add_action( 'admin_menu', 'my_admin_menu' );



/* CUSTOM CSS FOR THIS SECTION */
function load_custom_wp_admin_style($hook) {
    if( $hook != 'toplevel_page_corporaciond1_custom_options' ) {
        return;
    }
    /* ENQUEUE THE CSS */
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' );
    wp_enqueue_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css' );
}

add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

/* SEPARATOR FOR STYLING THE CUSTOM PAGE */
function add_admin_menu_separator( $position ) {

    global $menu;

    $menu[ $position ] = array(
        0    =>    '',
        1    =>    'read',
        2    =>    'separator' . $position,
        3    =>    '',
        4    =>    'wp-menu-separator'
    );

}

function set_admin_menu_separator() {  do_action( 'admin_init', 119 );  }

add_action( 'admin_init', 'add_admin_menu_separator' );
add_action( 'admin_menu', 'set_admin_menu_separator' );

/* CUSTOM MENU PAGE CONTENT */
function my_custom_menu_page() { ?>

<div class="corporaciond1_custom_options-header">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="<?php echo get_bloginfo('name'); ?>" class="logo-header" />
    <h1><?php echo get_admin_page_title(); ?></h1>
    <div class="custom-clearfix"></div>
</div>
<div class="corporaciond1_custom_options-content">
    <form method="post" action="options.php">
        <?php settings_fields( 'corporaciond1-settings-group' ); ?>
        <?php do_settings_sections( 'corporaciond1-settings-group' ); ?>
        <table class="form-table">

            <tr valign="top">
                <th scope="row"><?php _e('Dirección', 'corporaciond1'); ?></th>
                <td><textarea name="corporaciond1_dir" cols="95" rows="5"><?php echo esc_attr( get_option('corporaciond1_dir') ); ?></textarea></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Correo Electrónico', 'corporaciond1'); ?></th>
                <td><input type="text" size="90" name="corporaciond1_email" value="<?php echo esc_attr( get_option('corporaciond1_email') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Teléfono', 'corporaciond1'); ?></th>
                <td><input type="text" size="90" name="corporaciond1_telf" value="<?php echo esc_attr( get_option('corporaciond1_telf') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Móvil', 'corporaciond1'); ?></th>
                <td><input type="text" size="90" name="corporaciond1_mob" value="<?php echo esc_attr( get_option('corporaciond1_mob') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row" colspan="2"><h3><?php _e('Redes Sociales', 'corporaciond1'); ?></h3></th>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Facebook', 'corporaciond1'); ?></th>
                <td><input type="text" size="90" name="corporaciond1_fb" value="<?php echo esc_attr( get_option('corporaciond1_fb') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Twitter', 'corporaciond1'); ?></th>
                <td><input type="text" size="90" name="corporaciond1_tw" value="<?php echo esc_attr( get_option('corporaciond1_tw') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Instagram', 'corporaciond1'); ?></th>
                <td><input type="text" size="90" name="corporaciond1_ig" value="<?php echo esc_attr( get_option('corporaciond1_ig') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Canal de Youtube', 'corporaciond1'); ?></th>
                <td><input type="text" size="90" name="corporaciond1_yt" value="<?php echo esc_attr( get_option('corporaciond1_yt') ); ?>" /></td>
            </tr>

        </table>
        <?php submit_button(); ?>
    </form>
</div>
<?php }

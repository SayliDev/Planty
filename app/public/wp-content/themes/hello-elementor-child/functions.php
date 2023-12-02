<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

function admin_link_shortcode() {
    if (is_user_logged_in()) { // Je vérifie si l'utilisateur et connecté à Wordpress
        return '<a href=" '. admin_url() .' " class="admin-link">Admin</a>'; // J'affiche un lien qui redirige vers la page Admin
    }
    return ''; // Je retourne une chaîne de caractère vide si l'utilisateur n'est pas connecté à Wordpress
}
add_shortcode('admin_link', 'admin_link_shortcode'); // Ajout d'un Shortcode pour pouvoir l'intégrer sur mon header

// END ENQUEUE PARENT ACTION

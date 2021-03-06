<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */

$template_directory = get_template_directory();

require( $template_directory . '/core/includes/functions.php' );
require( $template_directory . '/core/includes/functions-update.php' );
require( $template_directory . '/core/includes/functions-sidebar.php' );
require( $template_directory . '/core/includes/functions-install.php' );
require( $template_directory . '/core/includes/functions-admin.php' );
require( $template_directory . '/core/includes/functions-extras.php' );
require( $template_directory . '/core/includes/functions-extentions.php' );
require( $template_directory . '/core/includes/theme-options/theme-options.php' );
require( $template_directory . '/core/includes/post-custom-meta.php' );
require( $template_directory . '/core/includes/tha-theme-hooks.php' );
require( $template_directory . '/core/includes/hooks.php' );
require( $template_directory . '/core/includes/version.php' );
require( $template_directory . '/core/includes/upsell/theme-upsell.php' );
require( $template_directory . '/core/includes/customizer.php' );

// Return value of the supplied responsive free theme option.
function responsive_free_get_option( $option, $default = false ) {
	global $responsive_options;

	// If the option is set then return it's value, otherwise return false.
	if ( isset( $responsive_options[$option] ) ) {
		return $responsive_options[$option];
	}

	return $default;
}
function responsive_free_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'responsive_free_setup' );

if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function responsive_free_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'responsive_free_render_title' );
endif;

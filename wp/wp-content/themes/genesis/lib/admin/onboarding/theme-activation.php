<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package StudioPress\Genesis\Admin
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

add_action( 'admin_init', 'genesis_theme_activation_redirect' );
/**
 * Redirects users to the Getting Started page after theme activation
 * if the theme provides an onboarding configuration in config/onboarding.php.
 *
 * @since 2.8.0
 */
function genesis_theme_activation_redirect() {

	global $pagenow;

	if ( 'themes.php' !== $pagenow || ! isset( $_GET['activated'] ) || ! is_admin() ) { // phpcs:ignore WordPress.Security.NonceVerification.NoNonceVerification
		return;
	}

	if ( version_compare( $GLOBALS['wp_version'], '5.0', '<' ) ) {
		return;
	}

	// @todo use genesis_get_config() here.
	if ( ! is_readable( locate_template( '/config/onboarding.php' ) ) ) {
		return;
	}

	wp_safe_redirect( esc_url( admin_url( 'admin.php?page=genesis-getting-started' ) ) );
	exit;
}



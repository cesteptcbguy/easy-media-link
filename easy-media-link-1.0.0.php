<?php
/**
 * Plugin Name:       Easy Media Link
 * Plugin URI:        https://github.com/cesteptcbguy/easy-media-link
 * Description:       Adds a Media Library link to the admin bar when logged in and viewing the front end.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Tested up to:      6.8
 * Requires PHP:      7.4
 * Author:            Chris Estep, TCBGuys
 * Author URI:        https://tcbguys.net
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       easy-media-link
 */

defined( 'ABSPATH' ) || exit;

/**
 * Add “Media Library” link to the admin bar on the front end for users who can upload files.
 *
 * @param WP_Admin_Bar $wp_admin_bar
 */
function eml_add_media_link_to_admin_menu( $wp_admin_bar ) {
    // Only on front end and only if the toolbar is visible.
    if ( is_admin() || ! is_admin_bar_showing() ) {
        return;
    }

    // Restrict to users allowed to upload media.
    if ( current_user_can( 'upload_files' ) ) {
        $wp_admin_bar->add_menu( array(
            // Use 'site-name' as a stable parent or omit 'parent' to make it top-level.
            'parent' => 'site-name',
            'id'     => 'eml-media-library',
            'title'  => __( 'Media Library', 'easy-media-link' ),
            'href'   => admin_url( 'upload.php' ),
            'meta'   => array( 'title' => __( 'Open Media Library', 'easy-media-link' ) ),
        ) );
    }
}
add_action( 'admin_bar_menu', 'eml_add_media_link_to_admin_menu', 999 );

<?php
/**
 * Hide the WYSIWYG editor on templates.
 */
add_action( 'admin_init', 'app_hide_editor' );
function app_hide_editor() {
	$post_id = false;

	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	} else if ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	}

	$post_id = intval( $post_id );

	if ( ! $post_id ) {
		return;
	}

	$current_template = get_page_template_slug( $post_id );
	// $exclude_on       = [
	// 	'templates/page-builder.php',
	// ];
}
<?php

// Allow SVG file upload
add_filter( 'upload_mimes', function( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
} );

add_filter( 'wp_check_filetype_and_ext', function( $data, $file, $filename, $mimes ) {
	$filetype = wp_check_filetype( $filename, $mimes );

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4 );

// Fix SVG preview in Media Library
add_filter( 'wp_prepare_attachment_for_js', function( $response ) {
	if ( $response['mime'] === 'image/svg+xml' ) {
		$response['sizes']['full'] = [
			'orientation' => 'portrait',
			'url'         => $response['url'],
			'width'       => 0,
			'height'      => 0,
		];
	}

	return $response;
} );
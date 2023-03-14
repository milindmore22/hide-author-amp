<?php
/*
 * Plugin Name: Hide Author on AMP Legacy Mode.
 */

 add_filter( 'amp_post_article_header_meta', 'xyz_amp_remove_author_meta' );
/**
 * Remove author meta from AMP Legacy Mode.
 * @param array $meta_parts Meta parts.
 * @return array
 */
function xyz_amp_remove_author_meta( $meta_parts ) {
	foreach ( array_keys( $meta_parts, 'meta-author', true ) as $key ) {
		unset( $meta_parts[ $key ] );
	}
	return $meta_parts;
}

add_action( 'amp_post_template_css', function() {
	?>
	[amp] .amp-wp-meta{display:none}
	<?php
} );

<?php
/**
 * Footer block pattern
 *
 * @package blennder
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Footer links', 'blennder' ),
	'categories' => array( 'text' ),
	'inserter'   => false,
	'content'    => '
		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
		<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} --><div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"extra-small"} --> <p class="has-extra-small-font-size">' . __( 'Copyright', 'blennder' ) . ' ' . date_i18n( _x( 'Y', 'copyright date format', 'blennder' ) ) . '</p><!-- /wp:paragraph -->
		<!-- wp:site-title {"level":0, "fontSize":"extra-small"} /-->' . blennder_privacy() . '
		<!-- wp:social-links {"className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
		<!-- /wp:social-links -->
		</div><!-- /wp:group -->
		</div><!-- /wp:group -->
	',
);




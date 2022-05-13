<?php
/**
 * Search page block pattern
 *
 * @package blennder
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( 'Search', 'blennder' ),
	'categories' => array( 'text' ),
	'inserter'   => false,
	'content'    => '<!-- wp:heading {"className":"is-style-blennder-text-shadow","fontSize":"x-large"} --><h2 class="is-style-blennder-text-shadow has-x-large-font-size">' . blennder_search_title() . '</h2><!-- /wp:heading -->',
);

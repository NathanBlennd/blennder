<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blennder
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'BLENNDER_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function blennder_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( './assets/css/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [
		'blennder-blocks/accordion' => [ 'deps' => [ 'blennder' ] ],
		'core/button' => [],
		'core/file' => [],
		'core/latest-comments' => [],
		'core/latest-posts' => [],
		'core/post-title' => [],
		'core/quote' => [],
		'core/search' => [],
	 ];
	foreach ( $styled_blocks as $block_name => $theArgs ) {
		$block = explode( '/', $block_name );
		$block = $block[1];
		$args = array(
			'handle' => "blennder-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block.min.css" ),
			$args['path'] = get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		$args = array_merge( $args, $theArgs );
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( $block_name, $args );
	}

}
add_action( 'after_setup_theme', 'blennder_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function blennder_styles() {
	wp_enqueue_style(
		'blennder',
		get_stylesheet_uri(),
		[ 'bootstrap' ],
		BLENNDER_VERSION
	);
	wp_enqueue_style(
		'blennder-shared',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[ 'blennder' ],
		BLENNDER_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'blennder_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Webfonts.
require_once get_theme_file_path( 'inc/fonts.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'patterns/register-block-patterns.php' );

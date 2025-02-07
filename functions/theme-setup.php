<?php
/**
 * Theme setup
 */

namespace Launchpad\ThemeSetup;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook.
 */
function theme_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'unlink-homepage-logo' );
	add_theme_support( 'block-template-parts' );
	add_theme_support( 'post-thumbnails' );
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\theme_setup', 15 );

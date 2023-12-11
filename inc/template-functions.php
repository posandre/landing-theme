<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package landing_theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function landing_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'landing_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function landing_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'landing_theme_pingback_header' );

/**
 *  Get Acf field value
 */
function landing_theme_get_acf_field($selector,  $post_id = 0, $default = '') {
    if (empty($post_id)) $post_id = get_the_ID();

    if( !class_exists('ACF') ) return $default;

    $result = get_field($selector,$post_id);

    if (empty($result)) return $default;

    return $result;
}

/**
 *  Get Theme image urls
 */
function landing_theme_get_image_url($image_name) {
    return esc_attr(get_stylesheet_directory_uri() . '/images/' . $image_name);
}

/**
 * Get attachment image
 */
function landing_theme_the_attachment_image($image_id, $image_size, $image_alt, $image_class, $default_image) {
	$image = wp_get_attachment_image(
		$image_id,
		$image_size,
		false,
		array(
			'class' =>  $image_class,
			'alt'   =>  $image_alt
		)
	);

	if (isset($image)) {
		echo $image;
	} else {
		echo '<img alt="' .$image_alt. '" class="' .$image_class. '" src="' .landing_theme_get_image_url($default_image). ' />';
	}
}
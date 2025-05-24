<?php
/**
 * Online Fashion functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Online Fashion
 * @since Online Fashion 1.0
 */


if ( ! function_exists( 'online_fashion_support' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since 1.0.0
     *
     * @return void
     */

    function online_fashion_support() {

    	load_theme_textdomain( 'online-fashion', get_template_directory() . '/languages' );

        add_editor_style( get_stylesheet_directory_uri().'/assets/css/editor.css' );
    }

endif;
add_action( 'after_setup_theme', 'online_fashion_support' );

function online_fashion_styles() {
	wp_enqueue_style(
		'online-fashion-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'online_fashion_styles' );


/**
 * Register pattern categories.
 */


if ( ! function_exists( 'online_fashion_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Online Fashion 1.0
	 * @return void
	 */
	function online_fashion_pattern_categories() {

		register_block_pattern_category(
			'online-fashion',
			array(
				'label'       => __( 'Online Fashion', 'online-fashion' ),
				'description' => __( 'A collection of full theme pattern.', 'online-fashion' ),
			)
		);
	}
endif;

add_action( 'init', 'online_fashion_pattern_categories' );

// tgm-plugin
require get_template_directory() . '/inc/tgm-plugin/tgmpa-hook.php';

<?php
/**
 * wuk-experiments functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since wuk-experiments 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'wuk_experiments_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since wuk-experiments 1.0
	 *
	 * @return void
	 */
	function wuk_experiments_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'wuk_experiments_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'wuk_experiments_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since wuk-experiments 1.0
	 *
	 * @return void
	 */
	function wuk_experiments_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'wuk_experiments_editor_style' );

// Enqueues the theme stylesheet on the front.
if ( ! function_exists( 'wuk_experiments_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front.
	 *
	 * @since wuk-experiments 1.0
	 *
	 * @return void
	 */
	function wuk_experiments_enqueue_styles() {
		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$src    = 'style' . $suffix . '.css';

		wp_enqueue_style(
			'wuk-experiments-style',
			get_parent_theme_file_uri( $src ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data(
			'wuk-experiments-style',
			'path',
			get_parent_theme_file_path( $src )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'wuk_experiments_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'wuk_experiments_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since wuk-experiments 1.0
	 *
	 * @return void
	 */
	function wuk_experiments_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'wuk-experiments' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'wuk_experiments_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'wuk_experiments_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since wuk-experiments 1.0
	 *
	 * @return void
	 */
	function wuk_experiments_pattern_categories() {

		register_block_pattern_category(
			'wuk_experiments_page',
			array(
				'label'       => __( 'Pages', 'wuk-experiments' ),
				'description' => __( 'A collection of full page layouts.', 'wuk-experiments' ),
			)
		);

		register_block_pattern_category(
			'wuk_experiments_post-format',
			array(
				'label'       => __( 'Post formats', 'wuk-experiments' ),
				'description' => __( 'A collection of post format patterns.', 'wuk-experiments' ),
			)
		);
	}
endif;
add_action( 'init', 'wuk_experiments_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'wuk_experiments_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since wuk-experiments 1.0
	 *
	 * @return void
	 */
	function wuk_experiments_register_block_bindings() {
		register_block_bindings_source(
			'wuk-experiments/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'wuk-experiments' ),
				'get_value_callback' => 'wuk_experiments_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'wuk_experiments_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'wuk_experiments_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since wuk-experiments 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function wuk_experiments_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;

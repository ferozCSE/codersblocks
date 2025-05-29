<?php

use Roots\Acorn\Application;

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

Application::configure()
    ->withProviders([
        App\Providers\ThemeServiceProvider::class,
    ])
    ->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });


// Registers pattern categories.
if ( ! function_exists( 'codersblocks_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Coders Blocks 1.0
	 *
	 * @return void
	 */
	function codersblocks_pattern_categories() {

		register_block_pattern_category(
			'codersblocks',
			array(
				'label'       => __( 'Coders Blocks', 'codersblocks' ),
				'description' => __( 'A collection of full page layouts.', 'codersblocks' ),
			)
		);
	}
endif;
add_action( 'init', 'codersblocks_pattern_categories' );


// Enqueues style.css on the front.
if ( ! function_exists( 'codersblocks_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Coders Blocks 1.0
	 *
	 * @return void
	 */
	function codersblocks_enqueue_styles() {
		wp_enqueue_style(
			'codersblocks-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'codersblocks_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'codersblocks_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Coders Blocks 1.0
	 *
	 * @return void
	 */
	function codersblocks_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'codersblocks' ),
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
add_action( 'init', 'codersblocks_block_styles' );

// after setup theme
function codersblocks_after_setup_theme() {
    // Basic theme supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');

    // Editor styles
    add_theme_support('editor-styles');
    
    // Only load if the file exists
    if (file_exists(get_template_directory() . '/editor_style.css')) {
        add_editor_style('editor_style.css');
    }
}
add_action('after_setup_theme', 'codersblocks_after_setup_theme');

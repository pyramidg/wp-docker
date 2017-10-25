<?php

/**
 * Theme customizations
 *
 * @package genchild2
 * @author Pyramid Guest
 * @link http://webstudioplace.com/
 * @copyright (c) 2017, Pyramid Guest
 * @license GPL-2.0+
 */


// * Start the engine.
include_once (get_template_directory() . '/lib/init.php');

// load child theme textdomain.
load_child_theme_textdomain(genchild2);

add_action('genesis_setup', 'genchild2_setup',15);
/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters. All
 * the functions themselves ate defined below this setup function.
 *
 * @since 1.0.0
 */
function genchild2_setup() {

    //Define theme constants.
    define( 'CHILD_THEME_NAME', 'genchild2');
    define('CHILD_THEME_URL', 'http://webstudioplace.dev/genchild2');
    define('CHILD_THEME_VERSION', '1.0.0');

    //Add HTML markup structure
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

    //Add viewport meta tag for mobile browsers.
    add_theme_support( 'genesis-responsive-viewport' );

    // Add theme support for accessibility.
    add_theme_support( 'genesis-accessibility', array(
			'404-page',
			'drop-down-menu',
			'headings',
			'rems',
			'search-form',
			'skip-links',
		) );

    // Add theme support fot footer widgets.
    add_theme_support('genesis-footer-widgets', 3 );

    // Unregister layouts that use secondary sidebar.
    genesis_unregister_layout( 'content-sidebar-sidebar');
    genesis_unregister_layout( 'sidebar-content-sidebar');
    genesis_unregister_layout( 'sidebar-sidebar-content');


    // Unregister secondary sidebar that use secondary sidebar.
    unregister_sidebar('sidebar-alt');

    // Add theme widget areas.
    include_once( get_stylesheet_directory() . '/includes/widget-areas.php');

}

<?php
/**
 * @author  Pressbooks <code@pressbooks.com>
 * @license GPLv2 (or any later version)
 */

add_action( 'after_setup_theme', function () {
	add_theme_support( 'pressbooks_global_typography', 'grc' );
} );

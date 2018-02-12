<?php

/*
Plugin Name: ACF Duplicate Repeater
Plugin URI: http://wordpress.org/
Description: Enter description here.
Author: Jörn Lund
Version: 0.1.6
Author URI:
License: GPL3
Github Repository: mcguffin/acf-duplicate-repeater
Text Domain: acf-duplicate-repeater
Domain Path: /languages/
*/

/*  Copyright 2017  Jörn Lund

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
Plugin was generated by WP Plugin Scaffold
https://github.com/mcguffin/wp-plugin-scaffold
Command line args were: `"ACF Duplicate Repeater" admin+css+js git gulp`
*/


namespace AcfDuplicateRepeater;

define( 'ACF_DUPLICATE_REPEATER_FILE', __FILE__ );
define( 'ACF_DUPLICATE_REPEATER_DIRECTORY', plugin_dir_path(__FILE__) );

require_once ACF_DUPLICATE_REPEATER_DIRECTORY . 'include/vendor/autoload.php';

Core\Core::instance();




if ( is_admin() || defined( 'DOING_AJAX' ) ) {

	// don't WP-Update actual repos!
	if ( ! file_exists( ACF_DUPLICATE_REPEATER_DIRECTORY . '/.git/' ) ) {
		AutoUpdate\AutoUpdateGithub::instance();
	}

	Admin\Admin::instance();

}

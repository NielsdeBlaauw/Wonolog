<?php # -*- coding: utf-8 -*-
/*
 * This file is part of the Inpsyde Inpsyde wonolog package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

putenv( 'TESTS_PATH=' . __DIR__ );
putenv( 'LIBRARY_PATH=' . dirname( __DIR__ ) );

$vendor = dirname( dirname( __FILE__ ) ) . '/vendor/';

if ( ! realpath( $vendor ) ) {
	die( 'Please install via Composer before running tests.' );
}

if ( ! defined( 'PHPUNIT_COMPOSER_INSTALL' ) ) {
	define( 'PHPUNIT_COMPOSER_INSTALL', $vendor . 'autoload.php' );
}

require_once $vendor . '/antecedent/patchwork/Patchwork.php';
require_once $vendor . 'autoload.php';

unset( $vendor );
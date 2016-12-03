<?php
/**
 * This file replaces the concrete/dispatcher.php to bootstrap the CMS for
 * use as a dependancy.
 */
/*
 * ----------------------------------------------------------------------------
 * Set our own version of __DIR__ as $__DIR__ so we can include this file on
 * PHP < 5.3 and have it not die wholesale.
 * ----------------------------------------------------------------------------
 */
$__DIR__ = 'vendor/concrete5/concrete5';
/*
 * ----------------------------------------------------------------------------
 * Override some of the concrete5 dcore directory location
 * ----------------------------------------------------------------------------
 */

defined( 'DIR_BASE' ) or define( 'DIR_BASE', $__DIR__ );
defined( 'DIRNAME_CORE' ) or define( 'DIRNAME_CORE', $__DIR__ . DIRECTORY_SEPARATOR . 'concrete' );
defined( 'DIR_APPLICATION' ) or define( 'DIR_APPLICATION', $__DIR__ . DIRECTORY_SEPARATOR . 'application' );

/*
 * ----------------------------------------------------------------------------
 * Add the vendor path to the list of include paths
 * ----------------------------------------------------------------------------
 */
ini_set('include_path', __DIR__. DIRECTORY_SEPARATOR. 'vendor' . PATH_SEPARATOR . get_include_path());
/*
 * ----------------------------------------------------------------------------
 * Require the composer autoloaders
 * ----------------------------------------------------------------------------
 */
require 'vendor/autoload.php';

require $__DIR__ . DIRECTORY_SEPARATOR . 'concrete/dispatcher.php';
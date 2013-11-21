<?php
/**
 * Config-file for Speedy. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Speedy paths.
 *
 */
define('SPEEDY_INSTALL_PATH', __DIR__ . '/..');
define('SPEEDY_THEME_PATH', SPEEDY_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(SPEEDY_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
session_start();
 
 
/**
 * Create the Speedy variable.
 *
 */
$speedy = array();
 
 
/**
 * Site wide settings.
 *
 */
$speedy['lang']         = 'sv';
$speedy['title_append'] = ' | Speedy en webbtemplate';

/**
 * Theme related settings.
 *
 */
/*$speedy['stylesheet'] = 'css/style.css';*/
$speedy['stylesheets'] = array('css/style.css');
$speedy['favicon']    = 'img/favicon.ico';


/**
 * Settings for JavaScript.
 *
 */

$speedy['jquery']     = true; // To disable jQuery
$speedy['jquery_src'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
$speedy['modernizr'] = 'js/modernizr.js';
//$speedy['javascript_include'] = array('js/main.js'); // To add extra javascript files
$speedy['javascript_include'] = array();
/**
 * Google analytics.
 *
 */
$speedy['google_analytics'] = null; // Set to null to disable google analytics


/**
 * The navbar
 *
 * change class to suite css-file.
 * use class nb-plain for standard style.
 *
 */
//$speedy['navbar'] = null; // To skip the navbar
$speedy['navbar'] = array(
		'class' => 'nb-mestyle',
		'items' => array(
				'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
				'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
				'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
		),
		'callback_selected' => function($url) {
			if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
				return true;
			}
		}
);

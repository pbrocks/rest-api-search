<?php
/**
 * Plugin Name:     Rest Api Search
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     rest-api-search
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Rest_Api_Search
 */


include_once __DIR__ .'/vendor/autoload.php';

/**
 * Load plugin if WordPress is loaded
 */
if( function_exists( 'init' ) ){
    add_action( 'init', function(){
        $hooks = new \CalderaLearn\RestSearch\Hooks();
        $hooks->addHooks();
    });
}

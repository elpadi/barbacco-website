<?php
/*
Plugin Name: Barbacco Base Code
Plugin URI: http://barbaccosf.com
Description: Code used on the Barbacco website irrespective of theme.
Version: 1
Author: Carlos Padilla
Author URI: http://cpadilla.thejackmag.com
License: GPL2
*/
use Barbacco\News;

require(__DIR__.'/vendor/autoload.php');

add_action('init', function() {
	News::create();
});

/*
add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style('aop', plugins_url('aop/aop.css', __FILE__));
	$mfn = 'wptouch_is_mobile_theme_showing';
	if (function_exists($mfn) && $mfn()) {
		wp_enqueue_style('aop-mobile', plugins_url('aop/aop-mobile.css', __FILE__));
	}
});
 */


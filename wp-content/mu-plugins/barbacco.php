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
	include(__DIR__.'/barbacco/custom-fields.php');
});

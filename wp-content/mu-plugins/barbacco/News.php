<?php
namespace Barbacco;

class News {

	use \MustUsePlugin\PostTypesTrait;
	
	function __construct() {
	}

	public static function create() {
		return new News();
	}

}

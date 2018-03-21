<?php
namespace Barbacco;

class News {

	use \MustUsePlugin\PostTypesTrait;
	
	protected static function prefix($s) {
		return "barbacco_$s";
	}

	function __construct() {
		$this->registerPostType('news', 'News Article');
	}

	public static function create() {
		return new News();
	}

}

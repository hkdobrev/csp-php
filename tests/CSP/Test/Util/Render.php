<?php

namespace CSP\Test\Util;

use CSP\Renderable;

class Render implements Renderable {

	protected $_value;

	public function __construct($value)
	{
		$this->_value = $value;
	}

	public function render()
	{
		return $this->_value;
	}
}

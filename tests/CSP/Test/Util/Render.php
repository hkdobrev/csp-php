<?php namespace CSP\Test\Util;

use CSP\Renderable;

class Render implements Renderable {

	protected $value;

	public function __construct($value)
	{
		$this->value = $value;
	}

	public function render()
	{
		return $this->value;
	}
}

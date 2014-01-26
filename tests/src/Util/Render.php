<?php namespace CSP\Test\Util;

use CSP\RenderableInterface;

class Render implements RenderableInterface
{
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

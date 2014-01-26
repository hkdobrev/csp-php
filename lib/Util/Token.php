<?php namespace CSP\Util;

use CSP\RenderableInterface;

class Token implements RenderableInterface
{
	protected $value;

	public function __construct($value = NULL)
	{
		if ($value !== NULL)
		{
			$this->value = $value;
		}
	}

	public function getValue()
	{
		return $this->value;
	}

	public function setValue($value)
	{
		$this->value = $value;

		return $this;
	}

	public function render()
	{
		return $this->getValue();
	}
}

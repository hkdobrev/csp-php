<?php namespace CSP\Util;

use CSP\Renderable;

class Token implements Renderable {

	protected $_value;

	public function __construct($value = NULL)
	{
		if ($value !== NULL)
		{
			$this->_value = $value;
		}
	}

	public function getValue()
	{
		return $this->_value;
	}

	public function setValue($value)
	{
		$this->_value = $value;

		return $this;
	}

	public function render()
	{
		return $this->getValue();
	}
}

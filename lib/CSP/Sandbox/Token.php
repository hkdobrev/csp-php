<?php

namespace CSP\Token;

class Token implements Renderable {

	protected $_value;

	public function getValue()
	{
		return $this->getValue();
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

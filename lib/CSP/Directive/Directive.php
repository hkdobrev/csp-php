<?php

namespace CSP\Directive;

abstract class Directive {

	protected $_name;

	protected $_value;

	public function getName()
	{
		return $this->_name;
	}

	public function setName($name)
	{
		$this->_name = $name;

		return $this;
	}

	public function getValue()
	{
		return $this->_value;
	}

	public function setValue($value)
	{
		$this->value = $value;

		return $this;
	}
}

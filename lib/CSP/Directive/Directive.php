<?php

namespace CSP\Directive;

abstract class Directive implements DirectiveInterface {

	const NAME_VALUE_DELIMITER = ' ';

	protected $_value;

	public function getName()
	{
		return static::NAME;
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

	public function render()
	{
		return $this->getName().self::NAME_VALUE_DELIMITER.$this->renderValue();
	}

	abstract public function renderValue();
}

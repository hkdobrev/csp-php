<?php namespace CSP\Directive;

abstract class AbstractDirective implements DirectiveInterface
{
	const NAME_VALUE_DELIMITER = ' ';

	protected $value;

	public function __construct($value = NULL)
	{
		if ($value !== NULL) {
			$this->setValue($value);
		}
	}

	public function getName()
	{
		return static::NAME;
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
		return $this->getName().self::NAME_VALUE_DELIMITER.$this->renderValue();
	}

	abstract public function renderValue();
}

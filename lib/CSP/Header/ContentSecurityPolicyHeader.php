<?php namespace CSP\Header;

use CSP\PolicyInterface;

class ContentSecurityPolicyHeader implements Header {

	const NAME = 'Content-Security-Policy';

	protected $_value;

	public function __construct($value = NULL)
	{
		if ($value)
		{
			$this->setValue($value);
		}
	}

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
		if ( ! $value instanceof PolicyInterface)
			throw new \InvalidArgumentException('ContentSecurityPolicyHeader value must be an instance of PolicyInterface');

		$this->_value = $value;

		return $this;
	}
}

<?php

namespace CSP\Header;

use CSP\PolicyInterface;

class ContentSecurityPolicyHeader implements Header {

	const NAME = 'Content-Security-Policy';

	protected $_value;

	public function __construct(PolicyInterface $value = NULL)
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
		$this->_value = $value;

		return $this;
	}
}

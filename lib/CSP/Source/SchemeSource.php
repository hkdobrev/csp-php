<?php

namespace CSP\Source;

class SchemeSource implements Sourceable {

	const SCHEME_SUFFIX = ':';

	protected $_scheme;

	public function getScheme()
	{
		return $this->_scheme;
	}

	public function render()
	{
		return $this->getScheme().self::SCHEME_SUFFIX;
	}
}

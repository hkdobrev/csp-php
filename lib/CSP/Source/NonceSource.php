<?php

namespace CSP\Source;

class NonceSource extends Source {

	const NONCE_PREFIX = "'nonce-";

	const NONCE_SUFFIX = "'";

	protected $_nonce;

	public function getNonce()
	{
		return $this->_nonce;
	}

	public function render()
	{
		return self::NONCE_PREFIX.$this->getNonce().self::NONCE_SUFFIX;
	}
}

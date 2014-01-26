<?php namespace CSP\Source;

class NonceSource implements SourceableInterface
{
	const NONCE_PREFIX = "'nonce-";

	const NONCE_SUFFIX = "'";

	protected $nonce;


	public function __construct($nonce)
	{
		$this->nonce = $nonce;
	}

	public function getNonce()
	{
		return $this->nonce;
	}

	public function render()
	{
		return self::NONCE_PREFIX.$this->getNonce().self::NONCE_SUFFIX;
	}
}

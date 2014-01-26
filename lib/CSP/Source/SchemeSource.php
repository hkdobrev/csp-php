<?php namespace CSP\Source;

class SchemeSource implements SourceableInterface
{
	const SCHEME_SUFFIX = ':';

	protected $scheme;

	public function __construct($scheme)
	{
		$this->scheme = $scheme;
	}

	public function getScheme()
	{
		return $this->scheme;
	}

	public function render()
	{
		return $this->getScheme().self::SCHEME_SUFFIX;
	}
}

<?php namespace CSP\Source;

class HostSource implements Sourceable
{
	protected $host;

	public function __construct($host)
	{
		$this->host = $host;
	}

	public function getHost()
	{
		return $this->host;
	}

	public function render()
	{
		return $this->getHost();
	}
}

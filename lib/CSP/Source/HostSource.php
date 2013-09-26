<?php

namespace CSP\Source;

class HostSource implements Sourceable {

	protected $_host;

	public function __construct($host)
	{
		$this->_host = $host;
	}

	public function getHost()
	{
		return $this->_host;
	}

	public function render()
	{
		return $this->getHost();
	}
}

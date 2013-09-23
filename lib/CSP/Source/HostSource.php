<?php

namespace CSP\Source;

class HostSource extends Source {

	protected $_host;

	public function getHost()
	{
		return $this->_host;
	}

	public function render()
	{
		return $this->getHost();
	}
}

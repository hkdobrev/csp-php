<?php

class URI implements Renderable {

	protected $_uri;

	public function __construct($uri)
	{
		$this->_uri = $uri;
		$this->check();
	}

	public function check()
	{
		return TRUE;
	}

	public function render()
	{
		return $this->_uri;
	}
}

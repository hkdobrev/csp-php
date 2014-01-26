<?php namespace CSP;

class URI implements RenderableInterface
{
	protected $uri;

	public function __construct($uri)
	{
		$this->uri = $uri;
		$this->check();
	}

	public function check()
	{
		return TRUE;
	}

	public function render()
	{
		return $this->uri;
	}
}

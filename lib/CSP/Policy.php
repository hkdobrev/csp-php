<?php

namespace CSP;

use CSP\Directive\DirectiveList;

class Policy implements PolicyInterface {

	/**
	 * List of directives
	 * @var CSP\Directive\DirectiveList
	 */
	protected $_directives;

	public function __construct(DirectiveList $directives = NULL)
	{
		if ($directives)
		{
			$this->setDirectives($directives);
		}
	}

	public function getDirectives()
	{
		return $this->_directives;
	}

	public function setDirectives(DirectiveList $directives)
	{
		$this->_directives = $directives;

		return $this;
	}

	public function render()
	{
		return $this->getDirectives()->render();
	}
}

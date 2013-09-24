<?php

namespace CSP\Directive;

use CSP\Sandbox\TokenList;

/**
 * Rules for sandboxing iframes
 */
class SandboxDirective extends Directive {

	const NAME = 'sandbox';

	public function setValue(TokenList $tokens)
	{
		return parent::setValue($tokens);
	}

	public function renderValue()
	{
		return $this->getValue()->render();
	}
}

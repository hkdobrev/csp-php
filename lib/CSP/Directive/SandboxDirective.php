<?php

namespace CSP\Directive;

use CSP\Sandbox\TokenList;

/**
 * Rules for sandboxing iframes
 */
class SandboxDirective extends Directive {

	const NAME = 'sandbox';

	public function setValue($tokens)
	{
		if ( ! $tokens instanceof TokenList)
			throw new \InvalidArgumentException('SandboxDirective value must be an instance of TokenList');

		return parent::setValue($tokens);
	}

	public function renderValue()
	{
		return $this->getValue()->render();
	}
}

<?php

namespace CSP\Directive;

use CSP\Sandbox\Token;

/**
 * Rules for sandboxing iframes
 */
class SandboxDirective extends Directive {

	const NAME = 'sandbox';

	protected $_name = self::NAME;

	public function setValue(Token $token)
	{
		return parent::setValue($token);
	}
}

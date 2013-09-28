<?php

namespace CSP\Test\Directive;

use CSP\Directive\Directive;

class ActualDirective extends Directive {

	const NAME = 'test-directive';

	public function renderValue()
	{
		return 'test-value';
	}
}

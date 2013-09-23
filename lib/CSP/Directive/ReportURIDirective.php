<?php

namespace CSP\Directive;

use CSP\URI;

/**
 * URI for the browser to submit violations of the Content Security Policy
 */
class ReportURIDirective extends Directive {

	const NAME = 'report-uri';

	protected $_name = self::NAME;

	public function setValue(URI $uri)
	{
		return parent::setValue($uri);
	}
}

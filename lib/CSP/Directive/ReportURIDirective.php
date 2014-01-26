<?php namespace CSP\Directive;

use CSP\URI;

/**
 * URI for the browser to submit violations of the Content Security Policy
 */
class ReportURIDirective extends Directive {

	const NAME = 'report-uri';

	public function setValue($uri)
	{
		if ( ! $uri instanceof URI)
			throw new \InvalidArgumentException('ReportURIDirective value must be an instance of URI');

		return parent::setValue($uri);
	}

	public function renderValue()
	{
		return $this->getValue()->render();
	}
}

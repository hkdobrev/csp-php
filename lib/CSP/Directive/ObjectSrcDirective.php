<?php namespace CSP\Directive;

use CSP\Source\SourceList;

/**
 * Restrict sources for:
 *  - `data` attribute on `object` elements
 *  - `src` attribute on `embed` elements
 *  - `code` or `archive` attribute on `applet` elements
 */
class ObjectSrcDirective extends AbstractSrcDirective
{
	const NAME = 'object-src';
}

<?php

namespace CSP\Directive;

use CSP\Source\SourceList;

/**
 * Restrict sources for:
 *  - `href` attribute on link elements with stylesheet relation
 *  - import statements in CSS code
 */
class StyleSrcDirective extends SrcDirective {

	const NAME = 'style-src';

	protected $_name = self::NAME;
}

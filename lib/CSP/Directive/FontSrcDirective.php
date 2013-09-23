<?php

namespace CSP\Directive;

/**
 * Restrict sources of fonts. Such as:
 *  - `@font-face` rule in CSS
 */
class FontSrcDirective extends SrcDirective {

	const NAME = 'font-src';

	protected $_name = self::NAME;
}

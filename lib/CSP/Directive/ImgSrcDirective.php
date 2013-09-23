<?php

namespace CSP\Directive;

use CSP\Source\SourceList;

/**
 * Restrict sources for images. Such as:
 *  - `src` attribute in img element
 *  - `url()` construct in CSS
 */
class ImgSrcDirective extends SrcDirective {

	const NAME = 'img-src';

	protected $_name = self::NAME;
}

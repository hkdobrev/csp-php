<?php

namespace CSP\Directive;

use CSP\Source\SourceList;

/**
 * Restrict sources for:
 *  - `src` attribute on video elements
 *  - `src` attribute on audio elements
 *  - `src` attribute on source elements
 *  - `src` attribute on track elements
 */
class MediaSrcDirective extends SrcDirective {

	const NAME = 'media-src';

	protected $_name = self::NAME;
}

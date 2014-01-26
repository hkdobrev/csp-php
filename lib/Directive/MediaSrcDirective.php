<?php namespace CSP\Directive;

use CSP\Source\SourceList;

/**
 * Restrict sources for:
 *  - `src` attribute on video elements
 *  - `src` attribute on audio elements
 *  - `src` attribute on source elements
 *  - `src` attribute on track elements
 */
class MediaSrcDirective extends AbstractSrcDirective
{
    const NAME = 'media-src';
}

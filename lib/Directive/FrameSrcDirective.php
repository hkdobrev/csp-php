<?php namespace CSP\Directive;

/**
 * Restrict sources for:
 *  - `src` attribute on `frame` elements
 *  - `src` attribute on `iframe` elements
 */
class FrameSrcDirective extends AbstractSrcDirective
{
    const NAME = 'frame-src';
}

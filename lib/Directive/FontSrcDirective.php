<?php namespace CSP\Directive;

/**
 * Restrict sources of fonts. Such as:
 *  - `@font-face` rule in CSS
 */
class FontSrcDirective extends AbstractSrcDirective
{
    const NAME = 'font-src';
}

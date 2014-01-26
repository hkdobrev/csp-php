<?php namespace CSP\Directive;

/**
 * Restrict sources for loading resources not mentioned in other directives
 */
class DefaultSrcDirective extends AbstractSrcDirective
{
    const NAME = 'default-src';
}

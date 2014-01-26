<?php namespace CSP\Directive;

use CSP\Source\SourceList;

/**
 * Restrict sources for scripts. Such as:
 *  - `src` attrbiute on script elements
 *  - constructors of `Worker` or `SharedWorker`
 * Use `unsafe-inline`to allow inline scripts or inline event handler.
 * Use `unsafe-eval` to allow unsafe dynamic code evaluation - passing
 */
class ScriptSrcDirective extends SrcDirective
{
	const NAME = 'script-src';

	protected $allowedSources = array(
		SourceList::SOURCE_HOST,
		SourceList::SOURCE_KEYWORD,
		SourceList::SOURCE_SCHEME,
		SourceList::SOURCE_NONCE,
	);
}

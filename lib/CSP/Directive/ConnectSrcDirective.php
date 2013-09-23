<?php

namespace CSP\Directive;

use CSP\Source\SourceList;

/**
 * Restict sources which could be loaded via script interfaces. Such as:
 *  - `open()` method of `XMLHttpRequest` object
 *  - `WebSocket` constructor
 *  - `EventSource` constructor
 */
class ConnectSrcDirective extends SrcDirective {

	const NAME = 'connect-src';

	protected $_name = self::NAME;
}

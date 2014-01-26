<?php namespace CSP\Directive;

use CSP\Source\SourceList;

/**
 * Restict sources which could be loaded via script interfaces. Such as:
 *  - `open()` method of `XMLHttpRequest` object
 *  - `WebSocket` constructor
 *  - `EventSource` constructor
 */
class ConnectSrcDirective extends AbstractSrcDirective
{
    const NAME = 'connect-src';
}

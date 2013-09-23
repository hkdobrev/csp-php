<?php

namespace CSP\Source;

use ArrayObject;

class SourceList extends ArrayObject {

	const SOURCE_KEYWORD = 'KeywordSource';

	const SOURCE_HOST = 'HostSource';

	const SOURCE_NONCE = 'NonceSource';

	const SOURCE_SCHEME = 'SchemeSource';

	public function __construct($input = array(), $flags = ArrayObject::ARRAY_AS_PROPS, $iterator_class = "ArrayIterator")
	{
		parent::__construct($input, $flags, $iterator_class);
	}
}

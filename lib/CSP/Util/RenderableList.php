<?php

namespace CSP\Util;

use ArrayObject;
use CSP\Renderable;

class RenderableList extends ArrayObject implements Renderable {

	const ITEM_DELIMITER = ' ';

	public function __construct($input = array(), $flags = ArrayObject::ARRAY_AS_PROPS, $iterator_class = "ArrayIterator")
	{
		parent::__construct($input, $flags, $iterator_class);
	}

	public function render()
	{
		return implode(
			static::ITEM_DELIMITER,
			array_filter(array_map(function($token)
			{
				return $token->render();
			}, $this->getArrayCopy()))
		);
	}
}

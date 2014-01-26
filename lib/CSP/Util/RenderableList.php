<?php namespace CSP\Util;

use ArrayObject;
use CSP\Renderable;

class RenderableList extends ArrayObject implements Renderable {

	const ITEM_DELIMITER = ' ';

	public function render()
	{
		return implode(
			static::ITEM_DELIMITER,
			array_filter(array_map(function($item)
			{
				return $item->render();
			}, $this->getArrayCopy()))
		);
	}
}

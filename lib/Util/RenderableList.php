<?php namespace CSP\Util;

use ArrayObject;
use CSP\RenderableInterface;

class RenderableList extends ArrayObject implements RenderableInterface
{
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

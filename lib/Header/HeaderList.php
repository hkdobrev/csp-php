<?php namespace CSP\Header;

use CSP\Util\RenderableList;
use CSP\Util\ToArrayInterface;

/**
 * Hold a number of headers together.
 * Very useful for vendor-prefixed headers and Report-URI headers.
 */
class HeaderList extends RenderableList implements ToArrayInterface
{
	const ITEM_DELIMITER = "\n";

	/**
	 * Return an associative array with header names as keys and rendered
	 * header values as values.
	 *
	 * @return array
	 */
	public function toArray()
	{
		$result = array();

		foreach ($this->getArrayCopy() as $item)
		{
			$result[$item->getName()] = $item->getValue()->render();
		}

		return $result;
	}
}

<?php namespace CSP\Util;

interface ToArrayInterface
{
	/**
	 * Get array representation of an object.
	 * Best suitable for iterators, containers etc.
	 *
	 * @return array
	 */
	public function toArray();
}

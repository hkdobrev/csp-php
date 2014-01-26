<?php namespace CSP\Header;

interface Header {

	public function __construct($value = NULL);

	/**
	 * Get the name of the header (the part before the colon)
	 * @return string
	 */
	public function getName();

	public function getValue();

	public function setValue($value);
}

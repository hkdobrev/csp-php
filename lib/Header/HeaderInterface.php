<?php namespace CSP\Header;

interface HeaderInterface
{

    public function __construct($value = null);

    /**
     * Get the name of the header (the part before the colon)
     * @return string
     */
    public function getName();

    public function getValue();

    public function setValue($value);
}

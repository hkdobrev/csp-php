<?php namespace CSP\Header;

use CSP\RenderableInterface;
use CSP\PolicyInterface;

interface HeaderInterface extends RenderableInterface
{
    const DELIMITER = ': ';

    public function __construct(PolicyInterface $value = null);

    /**
     * Get the name of the header (the part before the colon)
     * @return string
     */
    public function getName();

    public function getValue();

    public function setValue(PolicyInterface $value);
}

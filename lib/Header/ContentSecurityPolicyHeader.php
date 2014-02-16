<?php namespace CSP\Header;

use CSP\PolicyInterface;

class ContentSecurityPolicyHeader implements HeaderInterface
{
    const NAME = 'Content-Security-Policy';

    protected $value;

    public function __construct($value = null)
    {
        if ($value) {
            $this->setValue($value);
        }
    }

    public function getName()
    {
        return static::NAME;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        if (! $value instanceof PolicyInterface) {
            throw new \InvalidArgumentException(
                'ContentSecurityPolicyHeader value must be an instance of PolicyInterface'
            );
        }

        $this->value = $value;

        return $this;
    }

    public function render()
    {
        return $this->getName()
            .HeaderInterface::DELIMITER
            .$this->getValue()->render();
    }
}

<?php namespace CSP\Header;

use CSP\PolicyInterface;

class ContentSecurityPolicyHeader implements HeaderInterface
{
    const NAME = 'Content-Security-Policy';

    protected $value;

    public function __construct(PolicyInterface $value = null)
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

    public function setValue(PolicyInterface $value)
    {
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

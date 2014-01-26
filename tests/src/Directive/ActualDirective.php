<?php namespace CSP\Test\Directive;

use CSP\Directive\AbstractDirective;

class ActualDirective extends AbstractDirective
{
    const NAME = 'test-directive';

    public function renderValue()
    {
        return 'test-value';
    }
}

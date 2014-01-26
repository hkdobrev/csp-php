<?php namespace CSP\Directive;

use CSP\RenderableInterface;

interface DirectiveInterface extends RenderableInterface {

    public function getName();

    public function getValue();

    public function setValue($value);
}

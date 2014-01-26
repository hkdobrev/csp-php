<?php namespace CSP;

use CSP\Directive\DirectiveList;

interface PolicyInterface extends RenderableInterface
{

    public function __construct(DirectiveList $directives = null);

    public function getDirectives();

    public function setDirectives(DirectiveList $directives);
}

<?php namespace CSP;

use CSP\Directive\DirectiveList;

class Policy implements PolicyInterface
{
    /**
     * List of directives
     * @var CSP\Directive\DirectiveList
     */
    protected $directives;

    public function __construct(DirectiveList $directives = null)
    {
        if ($directives) {
            $this->setDirectives($directives);
        }
    }

    public function getDirectives()
    {
        return $this->directives;
    }

    public function setDirectives(DirectiveList $directives)
    {
        $this->directives = $directives;

        return $this;
    }

    public function render()
    {
        return $this->getDirectives()->render();
    }
}

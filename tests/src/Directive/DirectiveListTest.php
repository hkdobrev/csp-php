<?php namespace CSP\Test\Directive;

use CSP\Test\TestCase;
use CSP\Directive\DirectiveList;
use CSP\Test\Util\Renderable;

class DirectiveListTest extends TestCase
{
    /**
     * @coversNothing
     */
    public function testRenderableList()
    {
        $this->assertInstanceOf('CSP\Util\RenderableList', new DirectiveList);
    }

    /**
     * @coversNothing
     */
    public function testRenderWithSemiColonDelimiter()
    {
        $directiveList = new DirectiveList(array(
            new Renderable('A'),
            new Renderable('B'),
            new Renderable('C'),
        ));

        $this->assertSame('A; B; C', $directiveList->render());
    }
}

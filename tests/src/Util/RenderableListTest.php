<?php namespace CSP\Test\Util;

use CSP\Test\TestCase;
use CSP\Util\RenderableList;
use CSP\Test\Util\Renderable;
use CSP\Test\Util\RenderableListWithComma;

class RenderableListTest extends TestCase
{
    /**
     * @coversNothing
     */
    public function testArrayObjectInstance()
    {
        $this->assertInstanceOf('ArrayObject', new RenderableList);
    }

    /**
     * @coversNothing
     */
    public function testRenderable()
    {
        $this->assertInstanceOf('CSP\RenderableInterface', new RenderableList);
    }

    /**
     * @covers CSP\Util\RenderableList::render
     */
    public function testRender()
    {
        $renderableList = new RenderableList(array(
            new Renderable('A'),
            new Renderable('B'),
            new Renderable('C'),
            new Renderable('D'),
        ));
        $this->assertEquals('A B C D', $renderableList->render());
    }

    /**
     * @covers CSP\Util\RenderableList::render
     */
    public function testRenderEmptyList()
    {
        $renderableList = new RenderableList;
        $this->assertEquals('', $renderableList->render());

        $renderableList = new RenderableList(array(
            new Renderable(''),
        ));
        $this->assertEquals('', $renderableList->render());
    }

    /**
     * @covers CSP\Util\RenderableList::render
     */
    public function testStaticItemDelimiterConstant()
    {
        $renderableList = new RenderableListWithComma(array(
            new Renderable('A'),
            new Renderable('B'),
            new Renderable('C'),
            new Renderable('D'),
        ));
        $this->assertInstanceOf('CSP\Util\RenderableList', $renderableList);
        $this->assertEquals('A,B,C,D', $renderableList->render());
    }
}

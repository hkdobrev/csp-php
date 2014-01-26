<?php namespace CSP\Test\Util;

use CSP\Test\TestCase;
use CSP\Util\RenderableList;
use CSP\Test\Util\Render;
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
			new Render('A'),
			new Render('B'),
			new Render('C'),
			new Render('D'),
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
			new Render(''),
		));
		$this->assertEquals('', $renderableList->render());
	}

	/**
	 * @covers CSP\Util\RenderableList::render
	 */
	public function testStaticItemDelimiterConstant()
	{
		$renderableList = new RenderableListWithComma(array(
			new Render('A'),
			new Render('B'),
			new Render('C'),
			new Render('D'),
		));
		$this->assertInstanceOf('CSP\Util\RenderableList', $renderableList);
		$this->assertEquals('A,B,C,D', $renderableList->render());
	}
}

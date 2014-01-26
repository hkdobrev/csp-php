<?php namespace CSP\Test\Directive;

use CSP\Test\TestCase;
use CSP\Directive\DirectiveList;
use CSP\Test\Util\Render;

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
			new Render('A'),
			new Render('B'),
			new Render('C'),
		));

		$this->assertSame('A; B; C', $directiveList->render());
	}
}

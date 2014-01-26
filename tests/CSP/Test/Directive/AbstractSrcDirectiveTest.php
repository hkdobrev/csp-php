<?php namespace CSP\Test\Directive;

use CSP\Test\TestCase;
use CSP\Test\Directive\ActualSrcDirective;
use CSP\Source\SourceList;

class AbstractSrcDirectiveTest extends TestCase
{
	/**
	 * @coversNothing
	 */
	public function testSourceableDirectiveInterface()
	{
		$this->assertInstanceOf('CSP\Directive\SourceableDirectiveInterface', new ActualSrcDirective);
	}

	/**
	 * @covers CSP\Directive\AbstractSrcDirective::setValue
	 */
	public function testSetValueArgumentException()
	{
		$this->setExpectedException('InvalidArgumentException', 'SrcDirective value must be an instance of SourceList');
		$directive = new ActualSrcDirective;
		$directive->setValue('ABCDE');
	}

	/**
	 * @covers CSP\Directive\AbstractSrcDirective::setValue
	 */
	public function testSetValue()
	{
		$directive = new ActualSrcDirective;
		$sourceList = new SourceList;
		$directive->setValue($sourceList);
		$this->assertSame($sourceList, $directive->getValue());
	}

	/**
	 * @covers CSP\Directive\AbstractSrcDirective::renderValue
	 */
	public function testRenderValue()
	{
		$sourceList = $this->getMock('CSP\Source\SourceList', array(
			'render',
		));

		$sourceList
			->expects($this->once())
			->method('render')
			->will($this->returnValue('ABCDE'));

		$directive = new ActualSrcDirective($sourceList);
		$this->assertSame('ABCDE', $directive->renderValue());
	}
}

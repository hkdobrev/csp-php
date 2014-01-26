<?php namespace CSP\Test\Directive;

use CSP\Test\TestCase;
use CSP\Test\Directive\ActualDirective;

class DirectiveTest extends TestCase
{
	/**
	 * @coversNothing
	 */
	public function testDirectiveInterface()
	{
		$this->assertInstanceOf('CSP\Directive\DirectiveInterface', new ActualDirective);
	}

	/**
	 * @covers CSP\Directive\Directive::__construct
	 */
	public function testConstructor()
	{
		$directive = $this->getMock('CSP\Test\Directive\ActualDirective', array('setValue'));

		$directive
			->expects($this->at(0))
			->method('setValue')
			->with($this->equalTo(''))
			->will($this->returnValue($directive));

		$directive
			->expects($this->at(1))
			->method('setValue')
			->with($this->equalTo('ABCDE'))
			->will($this->returnValue($directive));

		$directive->__construct();
		$directive->__construct('');
		$directive->__construct('ABCDE');
	}

	/**
	 * @covers CSP\Directive\Directive::getName
	 */
	public function testGetName()
	{
		$directive = new ActualDirective;
		$this->assertSame('test-directive', $directive->getName());
	}

	/**
	 * @covers CSP\Directive\Directive::getValue
	 */
	public function testGetValue()
	{
		$directive = new ActualDirective('ABCDE');
		$this->assertSame('ABCDE', $directive->getValue());
	}

	/**
	 * @covers CSP\Directive\Directive::setValue
	 */
	public function testSetValue()
	{
		$directive = new ActualDirective;
		$directive->setValue('ABCDE');
		$this->assertSame('ABCDE', $directive->getValue());
	}

	/**
	 * @covers CSP\Directive\Directive::setValue
	 */
	public function testSetValueChaining($value='')
	{
		$directive = new ActualDirective;
		$setValueResult = $directive->setValue('ABCDE');
		$this->assertSame($directive, $setValueResult);
	}

	public function testRender()
	{
		$directive = new ActualDirective;
		$this->assertSame('test-directive test-value', $directive->render());
	}
}

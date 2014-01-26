<?php namespace CSP\Test\Directive;

use CSP\Test\TestCase;
use CSP\Directive\SandboxDirective;
use CSP\Util\TokenList;

class SandboxDirectiveTest extends TestCase
{
	/**
	 * @coversNothing
	 */
	public function testDirective()
	{
		$this->assertInstanceOf('CSP\Directive\AbstractDirective', new SandboxDirective);
	}

	/**
	 * @covers CSP\Directive\SandboxDirective::setValue
	 */
	public function testSetValueArgumentException()
	{
		$this->setExpectedException('InvalidArgumentException', 'SandboxDirective value must be an instance of TokenList');
		$directive = new SandboxDirective;
		$directive->setValue('ABCDE');
	}

	/**
	 * @covers CSP\Directive\SandboxDirective::setValue
	 */
	public function testSetValue()
	{
		$directive = new SandboxDirective;
		$sourceList = new TokenList;
		$directive->setValue($sourceList);
		$this->assertSame($sourceList, $directive->getValue());
	}

	/**
	 * @covers CSP\Directive\SandboxDirective::renderValue
	 */
	public function testRenderValue()
	{
		$tokenList = $this->getMock('CSP\Util\TokenList', array('render'));

		$tokenList
			->expects($this->once())
			->method('render')
			->will($this->returnValue('ABCDE'));

		$directive = new SandboxDirective($tokenList);
		$this->assertSame('ABCDE', $directive->renderValue());
	}


}

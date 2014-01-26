<?php

namespace CSP\Test\Directive;

use CSP\Test\TestCase;
use CSP\Directive\ReportURIDirective;
use CSP\URI;

class ReportURIDirectiveTest extends TestCase {

	/**
	 * @coversNothing
	 */
	public function testDirective()
	{
		$this->assertInstanceOf('CSP\Directive\Directive', new ReportURIDirective);
	}

	/**
	 * @covers CSP\Directive\ReportURIDirective::setValue
	 */
	public function testSetValueArgumentException()
	{
		$this->setExpectedException('InvalidArgumentException', 'ReportURIDirective value must be an instance of URI');
		$directive = new ReportURIDirective;
		$directive->setValue('ABCDE');
	}

	/**
	 * @covers CSP\Directive\ReportURIDirective::setValue
	 */
	public function testSetValue()
	{
		$directive = new ReportURIDirective;
		$sourceList = new URI('http://example.com');
		$directive->setValue($sourceList);
		$this->assertSame($sourceList, $directive->getValue());
	}

	/**
	 * @covers CSP\Directive\ReportURIDirective::renderValue
	 */
	public function testRenderValue()
	{
		$uri = $this->getMock('CSP\URI', array('render'), array('http://example.com'));

		$uri
			->expects($this->once())
			->method('render')
			->will($this->returnValue('ABCDE'));

		$directive = new ReportURIDirective($uri);
		$this->assertSame('ABCDE', $directive->renderValue());
	}


}

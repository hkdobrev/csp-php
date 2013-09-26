<?php

namespace CSP\Test;

use CSP\Policy;
use CSP\Directive\DirectiveList;

class PolicyTest extends TestCase {

	public function testRenderable()
	{
		$this->assertInstanceOf('CSP\Renderable', new Policy);
	}

	public function testPolicynterface()
	{
		$this->assertInstanceOf('CSP\PolicyInterface', new Policy);
	}

	/**
	 * @covers CSP\Policy::__construct
	 */
	public function testConstructor()
	{
		$policy = new Policy;
		$this->assertNull($policy->getDirectives());

		$policy = new Policy(NULL);
		$this->assertNull($policy->getDirectives());

		$directives = new DirectiveList;
		$policy = new Policy($directives);
		$this->assertSame($directives, $policy->getDirectives());
	}

	/**
	 * @covers CSP\Policy::getDirectives
	 */
	public function testGetDirectives()
	{
		$directiveList = new DirectiveList;
		$policy = new Policy($directiveList);
		$this->assertSame($directiveList, $policy->getDirectives());

		$policy = new Policy;
		$this->assertNull($policy->getDirectives());

		$policy->setDirectives($directiveList);
		$this->assertSame($directiveList, $policy->getDirectives());
	}

	/**
	 * @covers CSP\Policy::setDirectives
	 */
	public function testSetDirectives()
	{
		$policy = new Policy;
		$directiveList = new DirectiveList;
		$policy->setDirectives($directiveList);
		$this->assertSame($directiveList, $policy->getDirectives());
	}

	/**
	 * @covers CSP\Policy::render
	 */
	public function testRender()
	{
		$exampleReturnValue = 'ABCDE';
		$directiveList = $this->getMock('CSP\Directive\DirectiveList', array(
			'render'
		));

		$directiveList
			->expects($this->once())
			->method('render')
			->will($this->returnValue($exampleReturnValue));

		$policy = new Policy($directiveList);
		$actualResult = $policy->render();

		$this->assertSame($exampleReturnValue, $actualResult);
	}
}
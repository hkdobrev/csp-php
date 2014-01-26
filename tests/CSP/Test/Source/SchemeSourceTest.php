<?php namespace CSP\Test\Source;

use CSP\Test\TestCase;
use CSP\Source\SchemeSource;

class SchemeSourceTest extends TestCase {

	/**
	 * @coversNothing
	 */
	public function testSourceable()
	{
		$this->assertInstanceOf('CSP\Source\Sourceable', new SchemeSource('abc'));
	}

	/**
	 * @covers CSP\Source\SchemeSource::__construct
	 * @covers CSP\Source\SchemeSource::getScheme
	 */
	public function testConstructAndGetScheme()
	{
		$schemeSource = new SchemeSource('abc');
		$this->assertSame('abc', $schemeSource->getScheme());
	}

	/**
	 * @covers CSP\Source\SchemeSource::render()
	 */
	public function testRender()
	{
		$schemeSource = new SchemeSource('abc');
		$this->assertSame('abc:', $schemeSource->render());
	}
}

<?php namespace CSP\Test\Source;

use CSP\Test\TestCase;
use CSP\Source\HostSource;

class HostSourceTest extends TestCase
{
	/**
	 * @coversNothing
	 */
	public function testSourceable()
	{
		$this->assertInstanceOf(
			'CSP\Source\SourceableInterface',
			new HostSource('abc')
		);
	}

	/**
	 * @covers CSP\Source\HostSource::__construct
	 * @covers CSP\Source\HostSource::getHost
	 */
	public function testConstructAndGetHost()
	{
		$hostSource = new HostSource('abc');
		$this->assertSame('abc', $hostSource->getHost());
	}

	/**
	 * @covers CSP\Source\HostSource::render()
	 */
	public function testRender()
	{
		$hostSource = new HostSource('abc');
		$this->assertSame('abc', $hostSource->render());
	}
}

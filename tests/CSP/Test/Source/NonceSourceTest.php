<?php namespace CSP\Test\Source;

use CSP\Test\TestCase;
use CSP\Source\NonceSource;

class NonceSourceTest extends TestCase
{
	/**
	 * @coversNothing
	 */
	public function testSourceable()
	{
		$this->assertInstanceOf('CSP\Source\SourceableInterface', new NonceSource('abc'));
	}

	/**
	 * @covers CSP\Source\NonceSource::__construct
	 * @covers CSP\Source\NonceSource::getNonce
	 */
	public function testConstructAndGetHost()
	{
		$nonceSource = new NonceSource('abc');
		$this->assertSame('abc', $nonceSource->getNonce());
	}

	/**
	 * @covers CSP\Source\NonceSource::render()
	 */
	public function testRender()
	{
		$nonceSource = new NonceSource('abc');
		$this->assertSame("'nonce-abc'", $nonceSource->render());
	}
}

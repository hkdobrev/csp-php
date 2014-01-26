<?php namespace CSP\Test;

use CSP\URI;

class URITest extends TestCase
{

    /**
     * @covers CSP\URI::__construct
     */
    public function testConstructor()
    {
        $uri = new URI('abc');
        $this->assertSame('abc', $uri->render());
    }

    /**
     * @covers CSP\URI::check
     */
    public function testCheck()
    {
        $uri = new URI('');
        $this->assertTrue($uri->check());
    }

    /**
     * @covers CSP\URI::render
     */
    public function testRender()
    {
        $uri = new URI('abc');
        $this->assertSame('abc', $uri->render());
    }
}

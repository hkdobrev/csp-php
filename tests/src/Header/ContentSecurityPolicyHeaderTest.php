<?php namespace CSP\Test\Header;

use CSP\Test\TestCase;
use CSP\Header\ContentSecurityPolicyHeader;
use CSP\Policy;
use CSP\Test\Util\Renderable;

class ContentSecurityPolicyHeaderTest extends TestCase
{
    /**
     * @coversNothing
     */
    public function testHeaderInterface()
    {
        $header = new ContentSecurityPolicyHeader;
        $this->assertInstanceOf('CSP\Header\HeaderInterface', $header);
    }

    /**
     * @covers CSP\Header\ContentSecurityPolicyHeader::__construct
     */
    public function testConstructor()
    {
        $header = new ContentSecurityPolicyHeader;
        $this->assertNull($header->getValue());

        $header = new ContentSecurityPolicyHeader(null);
        $this->assertNull($header->getValue());

        $policy = new Policy;
        $header = new ContentSecurityPolicyHeader($policy);
        $this->assertSame($policy, $header->getValue());
    }

    /**
     * @covers CSP\Header\ContentSecurityPolicyHeader::getValue
     */
    public function testGetValue()
    {
        $header = new ContentSecurityPolicyHeader;
        $this->assertNull($header->getValue());

        $policy = new Policy;
        $header->setValue($policy);
        $this->assertSame($policy, $header->getValue());
    }

    /**
     * @covers CSP\Header\ContentSecurityPolicyHeader::setValue
     */
    public function testSetValue()
    {
        $header = new ContentSecurityPolicyHeader;
        $policy = new Policy;
        $header->setValue($policy);
        $this->assertSame($policy, $header->getValue());
    }

    /**
     * @covers CSP\Header\ContentSecurityPolicyHeader::setValue
     */
    public function testSetValueArgumentException()
    {
        $this->setExpectedException(
            'PHPUnit_Framework_Error',
            sprintf(
                'Argument 1 passed to %s must %s, string given',
                'CSP\Header\ContentSecurityPolicyHeader::setValue()',
                'implement interface CSP\PolicyInterface'
            )
        );
        $header = new ContentSecurityPolicyHeader;
        $header->setValue('ABCDE');
    }

    /**
     * @covers CSP\Header\ContentSecurityPolicyHeader::getName
     */
    public function testGetName()
    {
        $header = new ContentSecurityPolicyHeader;
        $this->assertSame(
            ContentSecurityPolicyHeader::NAME,
            $header->getName()
        );
    }

    /**
     * @covers CSP\Header\ContentSecurityPolicyHeader::render
     */
    public function testRender()
    {
        $header = $this->getMock(
            'CSP\Header\ContentSecurityPolicyHeader',
            array(
                'getName',
                'getValue'
            )
        );

        $header
            ->expects($this->once())
            ->method('getName')
            ->will($this->returnValue('ABCDE'));

        $header
            ->expects($this->once())
            ->method('getValue')
            ->will($this->returnValue(new Renderable('QWERTY')));

        $this->assertSame(
            'ABCDE: QWERTY',
            $header->render()
        );
    }
}

<?php namespace CSP\Test\Header;

use CSP\Test\TestCase;
use CSP\Header\ContentSecurityPolicyHeader;
use CSP\Policy;

class ContentSecurityPolicyHeaderTest extends TestCase {

	/**
	 * @coversNothing
	 */
	public function testHeader()
	{
		$header = new ContentSecurityPolicyHeader;
		$this->assertInstanceOf('CSP\Header\Header', $header);
	}

	/**
	 * @covers CSP\Header\ContentSecurityPolicyHeader::__construct
	 */
	public function testConstructor()
	{
		$header = new ContentSecurityPolicyHeader;
		$this->assertNull($header->getValue());

		$header = new ContentSecurityPolicyHeader(NULL);
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
		$this->setExpectedException('InvalidArgumentException', 'ContentSecurityPolicyHeader value must be an instance of PolicyInterface');
		$header = new ContentSecurityPolicyHeader;
		$header->setValue('ABCDE');
	}

	public function testGetName()
	{
		$header = new ContentSecurityPolicyHeader;
		$this->assertSame(ContentSecurityPolicyHeader::NAME, $header->getName());
	}

}

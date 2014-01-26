<?php namespace CSP\Test\Util;

use CSP\Test\TestCase;
use CSP\Util\Token;

class TokenTest extends TestCase {

	/**
	 * @covers CSP\Util\Token::__construct
	 */
	public function testConstructor()
	{
		$token = new Token;
		$this->assertNull($token->getValue());

		$token = new Token(NULL);
		$this->assertNull($token->getValue());

		$token = new Token(FALSE);
		$this->assertFalse($token->getValue());

		$token = new Token('ABCDE');
		$this->assertSame('ABCDE', $token->getValue());
	}

	/**
	 * @covers CSP\Util\Token::getValue
	 */
	public function testGetValue()
	{
		$token = new Token;
		$this->assertNull($token->getValue());

		$token->setValue('ABCDE');
		$this->assertSame('ABCDE', $token->getValue());

		$token->setValue(NULL);
		$this->assertNull($token->getValue());
	}

	/**
	 * @covers CSP\Util\Token::setValue
	 */
	public function testSetValue()
	{
		$token = new Token;
		$token->setValue('ABCDE');
		$this->assertSame('ABCDE', $token->getValue());

		$token->setValue(FALSE);
		$this->assertFalse($token->getValue());

		$token->setValue(NULL);
		$this->assertNull($token->getValue());
	}

	/**
	 * @covers CSP\Util\Token::render
	 */
	public function testRender()
	{
		$token = new Token('ABCDE');
		$this->assertSame('ABCDE', $token->render());
	}
}

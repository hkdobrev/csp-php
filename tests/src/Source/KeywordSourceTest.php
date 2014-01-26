<?php namespace CSP\Test\Source;

use CSP\Test\TestCase;
use CSP\Source\KeywordSource;

class KeywordSourceTest extends TestCase
{
    /**
     * @coversNothing
     */
    public function testSourceable()
    {
        $this->assertInstanceOf(
            'CSP\Source\SourceableInterface',
            new KeywordSource('abc')
        );
    }

    /**
     * @covers CSP\Source\KeywordSource::__construct
     * @covers CSP\Source\KeywordSource::getKeyword
     */
    public function testConstructAndGetKeyword()
    {
        $keywordSource = new KeywordSource('abc');
        $this->assertSame('abc', $keywordSource->getKeyword());
    }

    /**
     * @covers CSP\Source\KeywordSource::render()
     */
    public function testRender()
    {
        $keywordSource = new KeywordSource('abc');
        $this->assertSame('abc', $keywordSource->render());
    }
}

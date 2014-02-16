<?php namespace CSP\Test;

use CSP\Test\TestCase;
use CSP\Header\ContentSecurityPolicyHeader;
use CSP\Policy;
use CSP\Directive\DirectiveList;
use CSP\Directive\ScriptSrcDirective;
use CSP\Source\SourceList;
use CSP\Source\KeywordSource;

/**
 * @coversNothing
 */
class IntegrationTest extends TestCase
{
    public function testSimpleScriptDirective()
    {
        $header = new ContentSecurityPolicyHeader(new Policy(
            new DirectiveList(array(
                new ScriptSrcDirective(new SourceList(array(
                    new KeywordSource(KeywordSource::KEYWORD_SELF)
                )))
            ))
        ));

        $this->assertSame(
            "Content-Security-Policy: script-src 'self'",
            $header->render()
        );
    }
}

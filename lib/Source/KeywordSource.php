<?php namespace CSP\Source;

class KeywordSource implements SourceableInterface
{
    const KEYWORD_SELF = "'self'";

    const KEYWORD_UNSAFE_INLINE = "'unsafe-inline'";

    const KEYWORD_UNSAFE_EVAL = "'unsafe-eval'";

    protected $keyword;

    public function __construct($keyword)
    {
        $this->keyword = $keyword;
    }

    public function getKeyword()
    {
        return $this->keyword;
    }

    public function render()
    {
        return $this->keyword;
    }
}

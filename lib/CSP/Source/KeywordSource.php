<?php

namespace CSP\Source;

class KeywordSource extends Source {

	const KEYWORD_SELF = "'self'";

	const KEYWORD_UNSAFE_INLINE = "'unsafe-inline'";

	const KEYWORD_UNSAFE_EVAL = "'unsafe-eval'";

	protected $_keyword;

	public function getKeyword()
	{
		return $this->_keyword;
	}

	public function render()
	{
		return $this->_keyword;
	}
}

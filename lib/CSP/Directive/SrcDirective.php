<?php

namespace CSP\Directive;

use CSP\Source\SourceList;

abstract class SrcDirective extends Directive implements SourceableDirective {

	protected $_allowed_sources = array(
		SourceList::SOURCE_HOST,
		SourceList::SOURCE_KEYWORD,
		SourceList::SOURCE_SCHEME,
	);

	public function setValue(SourceList $sourceList)
	{
		return parent::setValue($sourceList);
	}
}

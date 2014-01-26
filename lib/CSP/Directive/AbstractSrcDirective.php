<?php namespace CSP\Directive;

use CSP\Source\SourceList;

abstract class AbstractSrcDirective extends AbstractDirective implements SourceableDirectiveInterface
{
	protected $allowedSources = array(
		SourceList::SOURCE_HOST,
		SourceList::SOURCE_KEYWORD,
		SourceList::SOURCE_SCHEME,
	);

	public function setValue($sourceList)
	{
		if ( ! $sourceList instanceof SourceList)
			throw new \InvalidArgumentException('SrcDirective value must be an instance of SourceList');

		return parent::setValue($sourceList);
	}

	public function renderValue()
	{
		return $this->getValue()->render();
	}
}

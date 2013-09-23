<?php

namespace CSP\Test\Source;

use CSP\Test\TestCase;
use CSP\Source\SourceList;

class SourceListTest extends TestCase {

	public function testArrayObjectInstance()
	{
		$sourceList = new SourceList;
		$this->assertInstanceOf('ArrayObject', $sourceList);
	}

}

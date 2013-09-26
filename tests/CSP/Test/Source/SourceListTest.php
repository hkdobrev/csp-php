<?php

namespace CSP\Test\Source;

use CSP\Test\TestCase;
use CSP\Source\SourceList;

class SourceListTest extends TestCase {

	public function testRenderableList()
	{
		$this->assertInstanceOf('CSP\Util\RenderableList', new SourceList);
	}

}

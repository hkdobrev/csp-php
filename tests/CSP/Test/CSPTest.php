<?php

namespace CSP\Test;

use CSP\CSP;

class CSPTest extends TestCase {

	public function test_generate()
	{
		$csp = new CSP;
		$this->assertTrue(method_exists($csp, 'generate'), 'CSP\\CSP MUST have a method generate');
		$this->assertSame('generated', $csp->generate());
	}
}

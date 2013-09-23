<?php

namespace CSP\Source;

abstract class Source implements Sourceable {

	public function __toString()
	{
		return $this->render();
	}
}

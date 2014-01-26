<?php namespace CSP\Directive;

use CSP\Renderable;

interface DirectiveInterface extends Renderable {

	public function getName();

	public function getValue();

	public function setValue($value);
}

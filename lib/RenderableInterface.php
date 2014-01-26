<?php namespace CSP;

/**
 * Implementing this interface means an object could be rendered to a string.
 */
interface RenderableInterface {

    /**
     * Get the string representation
     * @return string
     */
    public function render();
}

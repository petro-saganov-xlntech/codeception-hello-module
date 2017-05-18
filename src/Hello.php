<?php

namespace Codeception\Module;

use Codeception\Module;

/**
 * Class Hello
 *
 * @package Codeception\Module
 */
class Hello extends Module
{
    /**
     * @param string $name
     */
    public function greet(string $name) {

        $this->debug("Hello {$name}!");
    }
}

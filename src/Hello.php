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
     * @param $name
     */
    public function greet($name)
    {
        $this->debug("Hello {$name}!");
    }

    /**
     * @param $name
     * @param $surname
     */
    public function greetWithSurname($name, $surname)
    {
        $this->debug("Hello {$name} {$surname}!");
    }
}

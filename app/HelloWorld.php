<?php

namespace App;

/**
 * Class HelloWorld
 * @package App
 */
class HelloWorld
{
    /**
     * @param string $name User name.
     *
     * @return string
     */
    public function sayHello(string $name) : string
    {
        return "Hello, " . $name . "!";
    }
}

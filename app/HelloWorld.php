<?php

namespace App;

/**
 * Class HelloWorld
 * @package App
 */
class HelloWorld
{
    /**
     * @param string $n User name.
     *
     * @return string
     */
    public function sayHello(string $n) : string
    {
        return "Hello" . $n . "!";
    }
}

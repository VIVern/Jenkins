<?php

namespace App;

/**
 * Class HelloWorld
 * @package App
 */
class HelloWorld
{
    /**
     * @param $name
     * @return string
     */
    public function sayHello($name)
    {
        return "Hello" . $name . "!";
    }
}

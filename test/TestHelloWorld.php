<?php

namespace test;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

class TestHelloWorld extends TestCase
{
    public function testSayHello()
    {
        $helloWorld = new HelloWorld();

        $result = $helloWorld->sayHello('Denis');
        $this->assertEquals('Hello Denis!', $result);
    }
}
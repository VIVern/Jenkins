<?php

namespace test;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

/**
 * Class TestHelloWorld
 * @package test
 */
class TestHelloWorld extends TestCase
{
    /**
     * Test sayHello method.
     *
     * @return void
     */
    public function testSayHello()
    {
        $helloWorld = new HelloWorld();

        $result = $helloWorld->sayHello('Denis');
        $this->assertEquals('Hello Denis!', $result);
    }
}

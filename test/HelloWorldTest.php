<?php

namespace test;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

/**
 * Class HelloWorldTest
 * @package test
 */
class HelloWorldTest extends TestCase
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

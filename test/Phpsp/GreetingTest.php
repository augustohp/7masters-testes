<?php

namespace Phpsp;

class GreetingTest extends \PHPUnit_Framework_TestCase
{
    function test_dependencies()
    {
        if (!class_exists('Phpsp\Greeting'))
            $this->markTestSkipped('Class missing');
    }

    /**
     * @depends test_dependencies
     */
    function test_greeting_someone()
    {
        $greet   = new Greeting;
        $someone = '7masters';
        $this->assertEquals(
            'Hello '.$someone.'!',
            $greet->someone($someone)
        );
    }

    /**
     * @expectedException InvalidArgumentException
     */
    function test_greeting_invalid_someone()
    {
        $invalid = 'a';
        $greet = new Greeting;
        $greet->someone($invalid);
    }
}
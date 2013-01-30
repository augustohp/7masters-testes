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
     * @dataProvider provide_valid_people
     */
    function test_greeting_someone($someone)
    {
        $greet   = new Greeting;
        $this->assertEquals(
            'Hello '.$someone.'!',
            $greet->someone($someone)
        );
    }

    function provide_valid_people()
    {
        return [
            ['7masters'],
            ['PHPSP'],
            ['iMasters']
        ];
    }

    /**
     * @expectedException InvalidArgumentException
     * @dataProvider provide_invalid_people
     */
    function test_greeting_invalid_someone($invalid)
    {
        $greet = new Greeting;
        $greet->someone($invalid);
    }

    function provide_invalid_people()
    {
        return [
            ['a'],
            [''],
            ['ab']
        ];
    }
}
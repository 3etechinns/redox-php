<?php

namespace RoundingWell\Redox;

use PHPUnit_Framework_TestCase as TestCase;

class PushConstructorTest extends TestCase
{
    public function testFromFile()
    {
        $file = realpath(__DIR__ . '/redox_sample.json');
        $push = Push::fromFile($file);

        $this->assertInstanceOf(Push::class, $push);
    }

    public function testFromString()
    {
        $file = realpath(__DIR__ . '/redox_sample.json');
        $string = file_get_contents($file);
        $push = Push::fromString($string);

        $this->assertInstanceOf(Push::class, $push);
    }

    public function testFromObject()
    {
        $file = realpath(__DIR__ . '/redox_sample.json');
        $string = file_get_contents($file);
        $object = json_decode($string);
        $push = Push::fromObject($object);

        $this->assertInstanceOf(Push::class, $push);
    }
}

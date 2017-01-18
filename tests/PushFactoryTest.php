<?php

namespace RoundingWell\Redox;

use PHPUnit_Framework_TestCase as TestCase;

class PushFactoryTest extends TestCase
{
    public function testFromFile()
    {
        $file = realpath(__DIR__ . '/redox_sample.json');
        $push = PushMessage::fromFile($file);

        $this->assertInstanceOf(PushMessage::class, $push);
    }

    public function testFromString()
    {
        $file = realpath(__DIR__ . '/redox_sample.json');
        $string = file_get_contents($file);
        $push = PushMessage::fromString($string);

        $this->assertInstanceOf(PushMessage::class, $push);
    }

    public function testFromObject()
    {
        $file = realpath(__DIR__ . '/redox_sample.json');
        $string = file_get_contents($file);
        $object = json_decode($string);
        $push = PushMessage::fromObject($object);

        $this->assertInstanceOf(PushMessage::class, $push);
    }
}

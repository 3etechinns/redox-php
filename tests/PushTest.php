<?php

namespace RoundingWell\Redox;

use PHPUnit_Framework_TestCase as TestCase;

class PushTest extends TestCase
{
    public function testFromFile()
    {
        $file = realpath(__DIR__ . '/redox_sample.json');
        $push = Push::fromFile($file);

        $this->assertInstanceOf(Push::class, $push);
    }
}

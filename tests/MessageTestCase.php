<?php

namespace RoundingWell\Redox;

use PHPUnit\Framework\TestCase;

use function JmesPath\search;

abstract class MessageTestCase extends TestCase
{
    /**
     * @return string
     */
    abstract protected function sampleFile();

    /**
     * @return string
     */
    abstract protected function messageClass();

    /**
     * @return string[] JMES paths for valid message sections
     */
    abstract protected function messageSections();

    /**
     * Tests the named constructors of the message.
     */
    public function testConstructor()
    {
        $message = $this->make('fromFile', $this->sampleFile());

        $this->assertInstanceOf($this->messageClass(), $message);
        $this->assertInstanceOf(AbstractMessage::class, $message);
        $this->assertInstanceOf(RedoxInterface::class, $message);
    }

    /**
     * Tests for compatibility of the message against the sample file.
     */
    public function testMessage()
    {
        // Parse the sample JSON as the control.
        $json = json_decode(file_get_contents($this->sampleFile()));

        // Create a message from the sample file and then convert it back into
        // JSON to enforce serialization rules. Direct comparison against the
        // message will not work because of timestamps, etc.
        $message = json_decode(json_encode($this->make('fromFile', $this->sampleFile())));

        foreach ($this->messageSections() as $path) {
            $this->assertSame(
                search($path, $json),
                search($path, $message),
                $path
            );
        }
    }

    /**
     * @return string
     */
    protected function samplePath()
    {
        return __DIR__ . '/../samples';
    }

    /**
     * @return AbstractMessage
     */
    private function make($constructor, $input)
    {
        // Create a message using the given constructor and input
        return call_user_func([$this->messageClass(), $constructor], $input);
    }
}

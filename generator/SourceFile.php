<?php

namespace RoundingWell\Redox\Generator;

use Krlove\CodeGenerator\Model\ClassModel;

class SourceFile
{
    public static function make(
        $filename,
        ClassModel $body
    ) {
        $file = new self();
        $file->filename = $filename;
        $file->body = $body;

        return $file;
    }

    /**
     * @var string
     */
    private $filename;

    /**
     * @var ClassModel
     */
    private $body;

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->body->render();
    }
}

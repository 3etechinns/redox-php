<?php

namespace RoundingWell\Redox\Traits;

use JsonMapper;

trait HasNamedConstructors
{
    /**
     * Create a new instance from a file.
     *
     * @param string $path
     * @return static
     */
    public static function fromFile($path)
    {
        $json = \file_get_contents($path);
        return static::fromString($json);
    }

    /**
     * Create a new instance from a JSON string.
     *
     * @param string $json
     * @return static
     */
    public static function fromString($json)
    {
        $object = \json_decode($json);
        return static::fromObject($object);
    }

    /**
     * Create a new instance from an object.
     *
     * @param object $data
     * @return static
     */
    public static function fromObject($data, JsonMapper $mapper = null)
    {
        if (empty($mapper)) {
            $mapper = new JsonMapper();
        }

        return $mapper->map($data, new static());
    }
}

<?php

namespace RoundingWell\Redox\Traits;

trait CanBeConvertedToJson /* implements JsonSerializable */
{
    // CanBeConvertedToArray
    abstract public function toArray();

    public function jsonSerialize()
    {
        return $this->toArray();
    }
}

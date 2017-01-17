<?php

namespace RoundingWell\Redox;

use JsonSerializable;

interface RedoxInterface extends JsonSerializable
{
    /**
     * Get an array representation of the object.
     *
     * @return array
     */
    public function toArray();
}

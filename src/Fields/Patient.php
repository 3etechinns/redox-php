<?php

namespace RoundingWell\Redox\Fields;

class Patient extends AbstractField
{
    /**
     * @var Identifier[]
     */
    public $Identifiers;

    /**
     * @var Demographics
     */
    public $Demographics;
}

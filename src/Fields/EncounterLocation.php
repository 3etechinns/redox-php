<?php

namespace RoundingWell\Redox\Fields;

class EncounterLocation extends AbstractField
{
    /**
     * @var EncounterLocationAddress|null
     */
    public $Address;

    /**
     * @var EncounterLocationType|null
     */
    public $Type;

    /***
     * @var string|null
     */
    public $Name;
}

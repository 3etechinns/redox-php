<?php

namespace RoundingWell\Redox\Fields;

class EncounterLocation extends AbstractField
{
    /**
     * @var EncounterLocationAddress
     */
    public $Address;

    /**
     * @var EncounterLocationType
     */
    public $Type;

    /***
     * @var string
     */
    public $Name;
}

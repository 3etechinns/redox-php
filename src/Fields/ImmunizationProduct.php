<?php

namespace RoundingWell\Redox\Fields;

class ImmunizationProduct extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var string|null
     */
    public $Manufacturer;

    /**
     * @var string|null
     */
    public $LotNumber;
}

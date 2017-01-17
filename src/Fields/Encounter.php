<?php

namespace RoundingWell\Redox\Fields;

class Encounter extends AbstractField
{
    /**
     * @var Code
     */
    public $Type;

    /**
     * @var \DateTime
     */
    public $DateTime;

    /**
     * @var \DateTime|null
     */
    public $EndDateTime;

    /**
     * @var Provider[]
     */
    public $Providers;

    /**
     * @var DetailedLocation[]
     */
    public $Locations;

    /**
     * @var Code[]
     */
    public $Diagnosis;

    /**
     * @var Code[]
     */
    public $ReasonForVisit;
}

<?php

namespace RoundingWell\Redox\Fields;

class VitalSign extends AbstractField
{
    /**
     * @var \DateTime
     */
    public $DateTime;

    /**
     * @var VitalSignObservation[]
     */
    public $Observations;
}

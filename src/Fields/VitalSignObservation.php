<?php

namespace RoundingWell\Redox\Fields;

class VitalSignObservation extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var string
     */
    public $Status;

    /**
     * @var string|null
     */
    public $Interpretation;

    /**
     * @var \DateTime
     */
    public $DateTime;

    /**
     * @var string
     */
    public $Value;

    /**
     * @var string
     */
    public $Units;
}

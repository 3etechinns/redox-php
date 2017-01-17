<?php

namespace RoundingWell\Redox\Fields;

class ResultObservation extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var string
     */
    public $Status;

    /**
     * @var string
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

    /**
     * @var ResultObservationReferenceRange
     */
    public $ReferenceRange;
}

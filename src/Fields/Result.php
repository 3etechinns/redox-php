<?php

namespace RoundingWell\Redox\Fields;

class Result extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var string
     */
    public $Status;

    /**
     * @var ResultObservation[]
     */
    public $Observations;
}

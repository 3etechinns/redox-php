<?php

namespace RoundingWell\Redox\Fields;

class ProcedureObservation extends AbstractProcedureField
{
    use Traits\HasCodeProperties;

    /**
     * @var \DateTime|null
     */
    public $DateTime;

    /**
     * @var string|null
     */
    public $Status;

    /**
     * @var ProcedureObservationTargetSite
     */
    public $TargetSite;
}

<?php

namespace RoundingWell\Redox\Fields;

class ProcedureObservation extends AbstractProcedureField
{
    use Traits\HasCodeProperties;

    /**
     * @var \DateTime
     */
    public $DateTime;

    /**
     * @var string
     */
    public $Status;

    /**
     * @var ProcedureObservationTargetSite
     */
    public $TargetSite;
}

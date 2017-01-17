<?php

namespace RoundingWell\Redox\Fields;

class Procedure extends AbstractField
{
    /**
     * @var ProcedureObservation[]
     */
    public $Observations;

    /**
     * @var ProcedureProcedure[]
     */
    public $Procedures;

    /**
     * @var ProcedureService[]
     */
    public $Services;
}

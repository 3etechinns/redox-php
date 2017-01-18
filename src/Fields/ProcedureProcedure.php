<?php

namespace RoundingWell\Redox\Fields;

class ProcedureProcedure extends AbstractProcedureField
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
}

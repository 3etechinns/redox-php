<?php

namespace RoundingWell\Redox\Fields;

class ProcedureService extends AbstractProcedureField
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
}

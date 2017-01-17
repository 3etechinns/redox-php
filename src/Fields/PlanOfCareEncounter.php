<?php

namespace RoundingWell\Redox\Fields;

class PlanOfCareEncounter extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var string
     */
    public $Status;

    /**
     * @var \DateTime
     */
    public $DateTime;
}

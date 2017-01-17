<?php

namespace RoundingWell\Redox\Fields;

class PlanOfCareOrder extends AbstractField
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

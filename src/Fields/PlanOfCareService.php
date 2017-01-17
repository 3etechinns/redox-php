<?php

namespace RoundingWell\Redox\Fields;

class PlanOfCareService extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var string
     */
    public $Status;

    /**
     * @var \DateTime|null
     */
    public $DateTime;
}

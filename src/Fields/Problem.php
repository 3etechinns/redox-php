<?php

namespace RoundingWell\Redox\Fields;

class Problem extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var \DateTime|null
     */
    public $StartDate;

    /**
     * @var \DateTime|null
     */
    public $EndDate;

    /**
     * @var ProblemCategory
     */
    public $Category;

    /**
     * @var ProblemHealthStatus
     */
    public $HealthStatus;

    /**
     * @var ProblemStatus
     */
    public $Status;
}

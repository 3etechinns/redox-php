<?php

namespace RoundingWell\Redox\Fields;

class PlanOfCareMedication extends AbstractField
{
    /**
     * @var string
     */
    public $Status;

    /**
     * @var Dose
     */
    public $Dose;

    /**
     * @var Dose
     */
    public $Rate;

    /**
     * @var Code
     */
    public $Route;

    /**
     * @var \DateTime
     */
    public $StartDate;

    /**
     * @var \DateTime
     */
    public $EndDate;

    /**
     * @var Frequency
     */
    public $Frequency;

    /**
     * @var Code
     */
    public $Product;
}

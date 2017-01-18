<?php

namespace RoundingWell\Redox\Fields;

class PlanOfCareMedication extends AbstractField
{
    /**
     * @var string
     */
    public $Status;

    /**
     * @var PlanOfCareMedicationDose
     */
    public $Dose;

    /**
     * @var PlanOfCareMedicationRate
     */
    public $Rate;

    /**
     * @var PlanOfCareMedicationRoute
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
     * @var PlanOfCareMedicationFrequency
     */
    public $Frequency;

    /**
     * @var PlanOfCareMedicationProduct
     */
    public $Product;
}

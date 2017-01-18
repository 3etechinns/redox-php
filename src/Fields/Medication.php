<?php

namespace RoundingWell\Redox\Fields;

class Medication extends AbstractField
{
    /**
     * @var boolean
     */
    public $Prescription;

    /**
     * @var string|null
     */
    public $FreeTextSig;

    /**
     * @var MedicationDose
     */
    public $Dose;

    /**
     * @var MedicationRate
     */
    public $Rate;

    /**
     * @var MedicationRoute
     */
    public $Route;

    /**
     * @var \DateTime
     */
    public $StartDate;

    /**
     * @var \DateTime|null
     */
    public $EndDate;

    /**
     * @var MedicationFrequency
     */
    public $Frequency;

    /**
     * @var MedicationProduct
     */
    public $Product;
}

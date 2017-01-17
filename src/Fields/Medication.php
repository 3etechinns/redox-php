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
     * @var \DateTime|null
     */
    public $EndDate;

    /**
     * @var Frequency
     */
    public $Frequency;

    /**
     * @var Product
     */
    public $Product;
}

<?php

namespace RoundingWell\Redox\Fields;

class Immunization extends AbstractField
{
    /**
     * @var \DateTime
     */
    public $DateTime;

    /**
     * @var ImmunizationRoute
     */
    public $Route;

    /**
     * @var ImmunizationProduct
     */
    public $Product;

    /**
     * @var ImmunizationDose
     */
    public $Dose;
}

<?php

namespace RoundingWell\Redox\Fields;

class Immunization extends AbstractField
{
    /**
     * @var \DateTime
     */
    public $DateTime;

    /**
     * @var Code
     */
    public $Route;

    /**
     * @var Product
     */
    public $Product;

    /**
     * @var Dose
     */
    public $Dose;
}

<?php

namespace RoundingWell\Redox\Fields;

class MedicalEquipment extends AbstractField
{
    /**
     * @var string
     */
    public $Status;

    /**
     * @var \DateTime
     */
    public $StartDate;

    /**
     * @var string|null
     */
    public $Quantity;

    /**
     * @var MedicalEquipmentProduct
     */
    public $Product;
}

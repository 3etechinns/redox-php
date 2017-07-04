<?php

namespace RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit\Insurance;

use RoundingWell\Redox\AbstractMessage;
class Company extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $ID;
    /**
     * @var string|null
     */
    public $IDType;
    /**
     * @var string|null
     */
    public $Name;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit\Insurance\Company\Address
     */
    public $Address;
    /**
     * @var string|null
     */
    public $PhoneNumber;
}
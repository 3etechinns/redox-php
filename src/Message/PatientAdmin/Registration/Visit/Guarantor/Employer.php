<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Registration\Visit\Guarantor;

use RoundingWell\Redox\AbstractMessage;
class Employer extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $Name;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Visit\Guarantor\Employer\Address
     */
    public $Address;
    /**
     * @var string|null
     */
    public $PhoneNumber;
}
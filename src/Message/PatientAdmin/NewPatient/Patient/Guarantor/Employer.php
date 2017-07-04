<?php

namespace RoundingWell\Redox\Message\PatientAdmin\NewPatient\Patient\Guarantor;

use RoundingWell\Redox\AbstractMessage;
class Employer extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $Name;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Patient\Guarantor\Employer\Address
     */
    public $Address;
    /**
     * @var string|null
     */
    public $PhoneNumber;
}
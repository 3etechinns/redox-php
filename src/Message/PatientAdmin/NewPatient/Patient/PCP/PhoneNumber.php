<?php

namespace RoundingWell\Redox\Message\PatientAdmin\NewPatient\Patient\PCP;

use RoundingWell\Redox\AbstractMessage;
class PhoneNumber extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $Office;
}
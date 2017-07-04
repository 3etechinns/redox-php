<?php

namespace RoundingWell\Redox\Message\PatientAdmin;

use RoundingWell\Redox\AbstractMessage;
class NewPatient extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Meta
     */
    public $Meta;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Patient
     */
    public $Patient;
}
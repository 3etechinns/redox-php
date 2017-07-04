<?php

namespace RoundingWell\Redox\Message\PatientAdmin;

use RoundingWell\Redox\AbstractMessage;
class PatientUpdate extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Meta
     */
    public $Meta;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient
     */
    public $Patient;
}
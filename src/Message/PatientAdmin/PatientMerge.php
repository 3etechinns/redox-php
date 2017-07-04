<?php

namespace RoundingWell\Redox\Message\PatientAdmin;

use RoundingWell\Redox\AbstractMessage;
class PatientMerge extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientMerge\Meta
     */
    public $Meta;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientMerge\Patient
     */
    public $Patient;
}
<?php

namespace RoundingWell\Redox\Message\PatientAdmin;

use RoundingWell\Redox\AbstractMessage;
class Registration extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Meta
     */
    public $Meta;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Patient
     */
    public $Patient;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Visit
     */
    public $Visit;
}
<?php

namespace RoundingWell\Redox\Message\PatientAdmin;

use RoundingWell\Redox\AbstractMessage;
class Discharge extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Meta
     */
    public $Meta;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Patient
     */
    public $Patient;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Visit
     */
    public $Visit;
}
<?php

namespace RoundingWell\Redox\Message\PatientAdmin;

use RoundingWell\Redox\AbstractMessage;
class Arrival extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Arrival\Meta
     */
    public $Meta;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Arrival\Patient
     */
    public $Patient;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Arrival\Visit
     */
    public $Visit;
}
<?php

namespace RoundingWell\Redox\Message\PatientAdmin;

use RoundingWell\Redox\AbstractMessage;
class VisitUpdate extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Meta
     */
    public $Meta;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Patient
     */
    public $Patient;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit
     */
    public $Visit;
}
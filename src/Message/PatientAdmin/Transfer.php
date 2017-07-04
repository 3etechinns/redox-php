<?php

namespace RoundingWell\Redox\Message\PatientAdmin;

use RoundingWell\Redox\AbstractMessage;
class Transfer extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Meta
     */
    public $Meta;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Patient
     */
    public $Patient;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit
     */
    public $Visit;
}
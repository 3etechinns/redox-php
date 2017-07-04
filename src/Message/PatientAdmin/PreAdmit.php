<?php

namespace RoundingWell\Redox\Message\PatientAdmin;

use RoundingWell\Redox\AbstractMessage;
class PreAdmit extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Meta
     */
    public $Meta;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Patient
     */
    public $Patient;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Visit
     */
    public $Visit;
}
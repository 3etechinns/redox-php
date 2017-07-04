<?php

namespace RoundingWell\Redox\Message\PatientAdmin;

use RoundingWell\Redox\AbstractMessage;
class Cancel extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Meta
     */
    public $Meta;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Patient
     */
    public $Patient;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit
     */
    public $Visit;
}
<?php

namespace RoundingWell\Redox\Message\PatientAdmin\VisitUpdate;

use RoundingWell\Redox\AbstractMessage;
class Patient extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Patient\Identifier[]
     */
    public $Identifiers;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Patient\Demographics
     */
    public $Demographics;
    /**
     * @var array|null
     */
    public $Notes;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Patient\Contact[]
     */
    public $Contacts;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Patient\Diagnosis[]
     */
    public $Diagnoses;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Patient\PCP
     */
    public $PCP;
}
<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Discharge;

use RoundingWell\Redox\AbstractMessage;
class Patient extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Patient\Identifier[]
     */
    public $Identifiers;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Patient\Demographics
     */
    public $Demographics;
    /**
     * @var array|null
     */
    public $Notes;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Patient\Contact[]
     */
    public $Contacts;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Patient\Diagnosis[]
     */
    public $Diagnoses;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Patient\PCP
     */
    public $PCP;
}
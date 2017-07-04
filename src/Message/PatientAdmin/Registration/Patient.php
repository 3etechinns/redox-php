<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Registration;

use RoundingWell\Redox\AbstractMessage;
class Patient extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Patient\Identifier[]
     */
    public $Identifiers;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Patient\Demographics
     */
    public $Demographics;
    /**
     * @var array|null
     */
    public $Notes;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Patient\Contact[]
     */
    public $Contacts;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Patient\Diagnosis[]
     */
    public $Diagnoses;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Patient\PCP
     */
    public $PCP;
}
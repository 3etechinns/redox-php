<?php

namespace RoundingWell\Redox\Message\PatientAdmin\PatientUpdate;

use RoundingWell\Redox\AbstractMessage;
class Patient extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\Identifier[]
     */
    public $Identifiers;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\Demographics
     */
    public $Demographics;
    /**
     * @var array|null
     */
    public $Notes;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\Contact[]
     */
    public $Contacts;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\Diagnosis[]
     */
    public $Diagnoses;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\PCP
     */
    public $PCP;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\Insurance[]
     */
    public $Insurances;
}
<?php

namespace RoundingWell\Redox\Message\PatientAdmin\NewPatient;

use RoundingWell\Redox\AbstractMessage;
class Patient extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Patient\Identifier[]
     */
    public $Identifiers;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Patient\Demographics
     */
    public $Demographics;
    /**
     * @var array|null
     */
    public $Notes;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Patient\Contact[]
     */
    public $Contacts;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Patient\PCP
     */
    public $PCP;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Patient\Guarantor
     */
    public $Guarantor;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Patient\Insurance[]
     */
    public $Insurances;
}
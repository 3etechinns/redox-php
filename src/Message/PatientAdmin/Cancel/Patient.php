<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Cancel;

use RoundingWell\Redox\AbstractMessage;
class Patient extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Patient\Identifier[]
     */
    public $Identifiers;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Patient\Demographics
     */
    public $Demographics;
    /**
     * @var array|null
     */
    public $Notes;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Patient\Contact[]
     */
    public $Contacts;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Patient\Diagnosis[]
     */
    public $Diagnoses;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Patient\PCP
     */
    public $PCP;
}
<?php

namespace RoundingWell\Redox\Message\PatientAdmin\PatientMerge;

use RoundingWell\Redox\AbstractMessage;
class Patient extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientMerge\Patient\Identifier[]
     */
    public $Identifiers;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientMerge\Patient\PreviousIdentifier[]
     */
    public $PreviousIdentifiers;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientMerge\Patient\Demographics
     */
    public $Demographics;
    /**
     * @var array|null
     */
    public $Notes;
}
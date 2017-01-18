<?php

namespace RoundingWell\Redox\Fields;

class Encounter extends AbstractField
{
    /**
     * @var EncounterType
     */
    public $Type;

    /**
     * @var \DateTime
     */
    public $DateTime;

    /**
     * @var \DateTime|null
     */
    public $EndDateTime;

    /**
     * @var EncounterProvider[]
     */
    public $Providers;

    /**
     * @var EncounterLocation[]
     */
    public $Locations;

    /**
     * @var EncounterDiagnosis[]
     */
    public $Diagnosis;

    /**
     * @var EncounterReason[]
     */
    public $ReasonForVisit;
}

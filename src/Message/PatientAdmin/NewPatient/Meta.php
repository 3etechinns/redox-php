<?php

namespace RoundingWell\Redox\Message\PatientAdmin\NewPatient;

use RoundingWell\Redox\AbstractMessage;
class Meta extends AbstractMessage
{
    /**
     * @var string
     */
    public $DataModel;
    /**
     * @var string
     */
    public $EventType;
    /**
     * @var string|null
     */
    public $EventDateTime;
    /**
     * @var bool|null
     */
    public $Test;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Meta\Source
     */
    public $Source;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Meta\Destination[]
     */
    public $Destinations;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Meta\Message
     */
    public $Message;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\NewPatient\Meta\Transmission
     */
    public $Transmission;
    /**
     * @var string|null
     */
    public $FacilityCode;
}
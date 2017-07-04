<?php

namespace RoundingWell\Redox\Message\PatientAdmin\VisitUpdate;

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
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Meta\Source
     */
    public $Source;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Meta\Destination[]
     */
    public $Destinations;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Meta\Message
     */
    public $Message;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Meta\Transmission
     */
    public $Transmission;
    /**
     * @var string|null
     */
    public $FacilityCode;
}
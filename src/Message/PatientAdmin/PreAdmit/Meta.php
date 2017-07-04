<?php

namespace RoundingWell\Redox\Message\PatientAdmin\PreAdmit;

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
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Meta\Source
     */
    public $Source;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Meta\Destination[]
     */
    public $Destinations;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Meta\Message
     */
    public $Message;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Meta\Transmission
     */
    public $Transmission;
    /**
     * @var string|null
     */
    public $FacilityCode;
}
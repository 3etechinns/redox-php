<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit;

use RoundingWell\Redox\AbstractMessage;
class ConsultingProvider extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $ID;
    /**
     * @var string|null
     */
    public $IDType;
    /**
     * @var string|null
     */
    public $FirstName;
    /**
     * @var string|null
     */
    public $LastName;
    /**
     * @var array|null
     */
    public $Credentials;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\ConsultingProvider\Address
     */
    public $Address;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\ConsultingProvider\Location
     */
    public $Location;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\ConsultingProvider\PhoneNumber
     */
    public $PhoneNumber;
}
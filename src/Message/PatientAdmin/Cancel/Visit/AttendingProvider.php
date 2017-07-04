<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit;

use RoundingWell\Redox\AbstractMessage;
class AttendingProvider extends AbstractMessage
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
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit\AttendingProvider\Address
     */
    public $Address;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit\AttendingProvider\Location
     */
    public $Location;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit\AttendingProvider\PhoneNumber
     */
    public $PhoneNumber;
}
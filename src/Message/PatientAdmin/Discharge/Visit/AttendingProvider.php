<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Discharge\Visit;

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
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Visit\AttendingProvider\Address
     */
    public $Address;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Visit\AttendingProvider\Location
     */
    public $Location;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Visit\AttendingProvider\PhoneNumber
     */
    public $PhoneNumber;
}
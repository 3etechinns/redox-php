<?php

namespace RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Visit;

use RoundingWell\Redox\AbstractMessage;
class ReferringProvider extends AbstractMessage
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
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Visit\ReferringProvider\Address
     */
    public $Address;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Visit\ReferringProvider\Location
     */
    public $Location;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Visit\ReferringProvider\PhoneNumber
     */
    public $PhoneNumber;
}
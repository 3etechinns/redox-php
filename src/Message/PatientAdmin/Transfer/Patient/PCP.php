<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Transfer\Patient;

use RoundingWell\Redox\AbstractMessage;
class PCP extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $NPI;
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
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Patient\PCP\Address
     */
    public $Address;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Patient\PCP\Location
     */
    public $Location;
    /**
     * @var string|null
     */
    public $PhoneNumber;
}
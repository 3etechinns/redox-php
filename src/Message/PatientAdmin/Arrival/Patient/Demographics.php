<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Arrival\Patient;

use RoundingWell\Redox\AbstractMessage;
class Demographics extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $FirstName;
    /**
     * @var string|null
     */
    public $MiddleName;
    /**
     * @var string|null
     */
    public $LastName;
    /**
     * @var string|null
     */
    public $DOB;
    /**
     * @var string|null
     */
    public $SSN;
    /**
     * @var string|null
     */
    public $Sex;
    /**
     * @var string|null
     */
    public $Race;
    /**
     * @var bool|null
     */
    public $IsHispanic;
    /**
     * @var string|null
     */
    public $MaritalStatus;
    /**
     * @var bool|null
     */
    public $IsDeceased;
    /**
     * @var string|null
     */
    public $DeathDateTime;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Arrival\Patient\Demographics\PhoneNumber
     */
    public $PhoneNumber;
    /**
     * @var array|null
     */
    public $EmailAddresses;
    /**
     * @var string|null
     */
    public $Language;
    /**
     * @var array|null
     */
    public $Citizenship;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Arrival\Patient\Demographics\Address
     */
    public $Address;
}
<?php

namespace RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient;

use RoundingWell\Redox\AbstractMessage;
class Contact extends AbstractMessage
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
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\Contact\Address
     */
    public $Address;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\Contact\PhoneNumber
     */
    public $PhoneNumber;
    /**
     * @var string|null
     */
    public $RelationToPatient;
    /**
     * @var array|null
     */
    public $EmailAddresses;
    /**
     * @var array|null
     */
    public $Roles;
}
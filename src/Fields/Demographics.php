<?php

namespace RoundingWell\Redox\Fields;

class Demographics extends AbstractField
{
    /**
     * @var string
     */
    public $FirstName;

    /**
     * @var string
     */
    public $LastName;

    /**
     * @var \DateTime
     */
    public $DOB;

    /**
     * @var string
     */
    public $SSN;

    /**
     * @var string
     */
    public $Sex;

    /**
     * @var Address
     */
    public $Address;

    /**
     * @var PhoneNumber
     */
    public $PhoneNumber;

    /**
     * @var EmailAddress[]
     */
    public $EmailAddresses;

    /**
     * @var string
     */
    public $Race;

    /**
     * @var string
     */
    public $Ethnicity;

    /**
     * @var string
     */
    public $Religion;

    /**
     * @var string
     */
    public $MaritalStatus;
}

<?php

namespace RoundingWell\Redox\Fields;

class HeaderPatientDemographics extends AbstractField
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
     * @var HeaderPatientDemographicsAddress
     */
    public $Address;

    /**
     * @var HeaderPatientDemographicsPhoneNumber
     */
    public $PhoneNumber;

    /**
     * @var HeaderPatientDemographicsEmailAddress[]
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

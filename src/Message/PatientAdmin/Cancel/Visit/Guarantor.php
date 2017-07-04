<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit;

use RoundingWell\Redox\AbstractMessage;
class Guarantor extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $Number;
    /**
     * @var string|null
     */
    public $FirstName;
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
    public $Sex;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit\Guarantor\Spouse
     */
    public $Spouse;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit\Guarantor\Address
     */
    public $Address;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit\Guarantor\PhoneNumber
     */
    public $PhoneNumber;
    /**
     * @var string|null
     */
    public $Type;
    /**
     * @var string|null
     */
    public $RelationToPatient;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit\Guarantor\Employer
     */
    public $Employer;
}
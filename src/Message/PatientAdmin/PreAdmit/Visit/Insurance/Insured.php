<?php

namespace RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Visit\Insurance;

use RoundingWell\Redox\AbstractMessage;
class Insured extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $LastName;
    /**
     * @var string|null
     */
    public $FirstName;
    /**
     * @var string|null
     */
    public $Relationship;
    /**
     * @var string|null
     */
    public $DOB;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Visit\Insurance\Insured\Address
     */
    public $Address;
}
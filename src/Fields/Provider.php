<?php

namespace RoundingWell\Redox\Fields;

class Provider extends AbstractField
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
     * @var array
     */
    public $Credentials;

    /**
     * @var Address
     */
    public $Address;

    /**
     * @var Location
     */
    public $Location;

    /**
     * @var PhoneNumber
     */
    public $PhoneNumber;

    /**
     * @var Code
     */
    public $Role;
}

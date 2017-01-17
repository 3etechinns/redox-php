<?php

namespace RoundingWell\Redox\Fields;

class Author extends AbstractField
{
    /**
     * @var string
     */
    public $ID;

    /**
     * @var string
     */
    public $IDType;

    /**
     * @var string|null
     */
    public $Type;

    /**
     * @var string
     */
    public $FirstName;

    /**
     * @var string
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
}

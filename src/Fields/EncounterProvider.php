<?php

namespace RoundingWell\Redox\Fields;

class EncounterProvider extends AbstractField
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
     * @var EncounterProviderAddress
     */
    public $Address;

    /**
     * @var EncounterProviderLocation
     */
    public $Location;

    /**
     * @var EncounterProviderPhoneNumber
     */
    public $PhoneNumber;

    /**
     * @var EncounterProviderRole
     */
    public $Role;
}

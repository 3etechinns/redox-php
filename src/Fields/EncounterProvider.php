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
     * @var EncounterProviderAddress|null
     */
    public $Address;

    /**
     * @var EncounterProviderLocation|null
     */
    public $Location;

    /**
     * @var EncounterProviderPhoneNumber|null
     */
    public $PhoneNumber;

    /**
     * @var EncounterProviderRole|null
     */
    public $Role;
}

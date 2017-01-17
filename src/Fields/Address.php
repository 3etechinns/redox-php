<?php

namespace RoundingWell\Redox\Fields;

class Address extends AbstractField
{
    /**
     * @var string|null
     */
    public $StreetAddress;

    /**
     * @var string|null
     */
    public $City;

    /**
     * @var string|null
     */
    public $State;

    /**
     * @var string|null
     */
    public $ZIP;

    /**
     * @var string|null
     */
    public $County;

    /**
     * @var string|null
     */
    public $Country;
}
